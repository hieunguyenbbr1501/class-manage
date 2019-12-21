<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LectureRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Http\Requests\LectureRequest as StoreRequest;
use App\Http\Requests\LectureRequest as UpdateRequest;

/**
 * Class LectureCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class LectureCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation { store as traitStore; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation { update as traitUpdate; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Lecture');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/lecture');
        $this->crud->setEntityNameStrings('lecture', 'lectures');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        $this->crud->setFromDb();
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(LectureRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        $this->addFields();
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        //dd($request->request);
        $redirect_location = $this->traitStore();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = $this->traitStore();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function addFields(){
        $this->crud->addField([
            'label' => 'Course',
            'type' => 'select2',
            'name' => 'course_id',
            'entity' => 'course',
            'model' => 'App\Models\Course',
            'attribute' => 'id',
        ]);
        $this->crud->addField([
            'label' => 'Week',
            'type' => 'number',
            'name' => 'week'
        ]);
    }
}
