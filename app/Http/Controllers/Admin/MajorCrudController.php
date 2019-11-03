<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MajorRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Http\Requests\MajorRequest as StoreRequest;
use App\Http\Requests\MajorRequest as UpdateRequest;


/**
 * Class MajorCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class MajorCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation { store as traitStore; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation { update as traitUpdate; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Major');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/major');
        $this->crud->setEntityNameStrings('major', 'majors');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        $this->crud->setFromDb();
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(MajorRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        //$this->crud->setFromDb();
        $this->crud->addField([
           'label' => 'Tên chuyên ngành',
            'type' => 'text',
            'name' => 'name'
        ]);
        $this->crud->addField([
            'label' => 'Mã chuyên ngành',
            'type' => 'text',
            'name' => 'code'
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
    public function store(StoreRequest $request)
    {
        // your additional operations before save here

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
