<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StudentRequest;
use App\Http\Requests\StudentRequest as StoreRequest;
use App\Http\Requests\StudentRequest as UpdateRequest;
use App\Imports\StudentsImport;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;

/**
 * Class StudentCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class StudentCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation { store as traitStore; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation { update as traitUpdate; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Student');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/student');
        $this->crud->setEntityNameStrings('student', 'students');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        $this->addColumns();
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(StudentRequest::class);

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
        $code = $request['code'];
        $this->crud->request->request->add(['password'=> bcrypt($request['code'])]);
        $this->crud->addField(['type' => 'hidden', 'name' => 'password']);
        //dd($this->crud->request);
        $redirect_location = $this->traitStore();
        // ..
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here

        $redirect_location = $this->traitStore();
        // ..
        return $redirect_location;
    }
    public function insertFromCSV(){
        return view('vendor.backpack.student_insert');
    }
    public function insertAttempt(Request $request){
        $file = $request->file;
        \Maatwebsite\Excel\Facades\Excel::import(new StudentsImport(),$file,null,\Maatwebsite\Excel\Excel::XLSX);
        return redirect()->to(backpack_url('student'));
    }
    public function addColumns(){
        $this->crud->addColumn([
            'label' => 'Name',
            'name' => 'name',
            'type' => 'text'
        ]);
        $this->crud->addColumn([
            'label' => 'Email',
            'name' => 'email',
            'type' => 'text'
        ]);
        $this->crud->addColumn([
            'label' => 'DOB',
            'name' => 'dob',
            'type' => 'date'
        ]);
    }

    public function addFields(){
        $this->crud->addField([
            'label' => 'Name',
            'name' => 'name',
            'type' => 'text'
        ]);
        $this->crud->addField([
                'name' => 'email',
                'label' => 'Email Address',
                'type' => 'email'
        ]);
        $this->crud->addField([
            'name' => 'dob',
            'label' => 'DOB',
            'type' => 'date'
        ]);
        $this->crud->addField([
            'name' => 'code',
            'label' => 'Code',
            'type' => 'text',
        ]);
    }
}
