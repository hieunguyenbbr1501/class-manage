<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TermRequest;
use App\Models\Year as Year;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Http\Requests\TermRequest as StoreRequest;
use App\Http\Requests\TermRequest as UpdateRequest;

/**
 * Class TermCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class TermCrudController extends CrudController
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
        $this->crud->setModel('App\Models\Term');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/term');
        $this->crud->setEntityNameStrings('term', 'terms');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        $this->crud->setFromDb();
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(TermRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        //$this->crud->setFromDb();
        $this->crud->addField([
            'label' => 'Năm học',
            'type' => 'select',
            'name' => 'year',
            'entity' => 'year',
            'model' => 'App\Models\Year',
            'attribute' => 'name'
        ]);
        $this->crud->addField([
            'label' => 'Thứ tự',
            'type' => 'select_from_array',
            'options' => ['first' => 'Kì 1', 'second' => 'Kì 2', 'third' => 'Kì phụ'],
            'name' => 'order'
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $year = Year::where('id', $request->year)->firstOrFail();
        switch ($request->order) {
            case 'first':
                $order = '1';
                break;
            case 'second':
                $order = '2';
                break;
            case  'third':
                $order = 'phụ';
                break;
            default:
                abort(404);
                break;
        }
        $this->crud->request->request->add(['name' => 'Năm học ' . $year->name . ' - Học kỳ ' . $order]);
        $this->crud->addField(['type' => 'hidden', 'name' => 'name']);
        $redirect_location = $this->traitStore();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
