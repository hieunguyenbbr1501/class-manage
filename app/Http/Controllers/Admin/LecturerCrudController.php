<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LecturerRequest;
use App\Imports\LecturersImport;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;

/**
 * Class LecturerCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class LecturerCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Lecturer');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/lecturer');
        $this->crud->setEntityNameStrings('lecturer', 'lecturers');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        $this->crud->setFromDb();
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(LecturerRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        $this->crud->setFromDb();
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
    public function insertFromCSV(){
        return view('vendor.backpack.lecturer_insert');
    }
    public function insertAttempt(Request $request){
        $file = $request->file;
        \Maatwebsite\Excel\Facades\Excel::import(new LecturersImport(),$file,null,\Maatwebsite\Excel\Excel::XLSX);
        return redirect()->to(backpack_url('student'));
    }
}
