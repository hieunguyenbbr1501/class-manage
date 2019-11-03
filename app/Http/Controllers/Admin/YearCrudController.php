<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\YearRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Http\Requests\YearRequest as StoreRequest;
use App\Http\Requests\YearRequest as UpdateRequest;

/**
 * Class YearCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class YearCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation { store as traitStore; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation { update as traitUpdate; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Year');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/year');
        $this->crud->setEntityNameStrings('year', 'years');

    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        $this->crud->setFromDb();
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(YearRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        //$this->crud->setFromDb();
        $this->crud->addField([
            'label' => 'Năm bắt đầu',
            'type' => 'number',
            'name' => 'start'
        ]);


    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $end = $request['start'] + 1;
        $this->crud->request->request->add(['name'=> $request['start'] . ' - ' .$end]);
        $this->crud->addField(['type' => 'hidden', 'name' => 'name']);
        //dd($this->crud->request);
        $redirect_location = $this->traitStore();
        // ..
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here

        $redirect_location = $this->traitUpdate($request);
        // ..
        return $redirect_location;
    }
}
