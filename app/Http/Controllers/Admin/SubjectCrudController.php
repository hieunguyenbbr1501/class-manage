<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SubjectRequest;
use App\Models\Major;
use App\Models\Subject;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Http\Requests\SubjectRequest as StoreRequest;
use App\Http\Requests\SubjectRequest as UpdateRequest;

/**
 * Class SubjectCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class SubjectCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation {
        store as traitStore;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation {
        update as traitUpdate;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Subject');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/subject');
        $this->crud->setEntityNameStrings('subject', 'subjects');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        $this->crud->setFromDb();
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(SubjectRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        $this->crud->addField([
            'label' => 'Chuyên ngành',
            'type' => 'select2',
            'name' => 'major_id',
            'entity' => 'major',
            'model' => 'App\Models\Major',
            'attribute' => 'name'
        ]);
        $this->crud->addField([
            'label' => 'Tên môn học',
            'type' => 'text',
            'name' => 'name'
        ]);
        $this->crud->addField([
            'label' => 'Môn tiên quyết',
            'type' => 'select2_grouped',
            //'data_source' => url('api/subject'),
            'name' => 'pre_id',
            'entity' => 'pre',
            'model' => 'App\Models\Subject',
            'attribute' => 'name',
            'group_by' => 'major',
            'group_by_attribute' => 'name',
            'group_by_relationship_back' => 'subjects',
            'default' => null,
            'allows_null' => true,
//            'placeholder' => 'Chọn môn tiên quyết...',
//            'minimum_input_length' => 0,
//            'dependencies' => ['major_id'],
        ]);

    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $major = Major::where('id', $request['major_id'])->firstOrFail();
        $related_subjects = Subject::orderBy('created_at', 'desc')->first();
        $last_id = $related_subjects->id;
        if($request['pre_id'] == null){

            $this->crud->request['pre_id'] = 0;
            //dd($this->crud->request['pre_id']);
        }

        $this->crud->request->request->add(['code' => $major->code . sprintf('%04d', $last_id)]);
        $this->crud->addField(['type' => 'hidden', 'name' => 'code']);
        $redirect_location = $this->traitStore();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = $this->traitUpdate();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
