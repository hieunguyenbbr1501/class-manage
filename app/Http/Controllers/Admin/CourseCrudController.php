<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CourseRequest;
use App\Models\Course;
use App\Models\Subject;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Http\Requests\CourseRequest as StoreRequest;
use App\Http\Requests\CourseRequest as UpdateRequest;

/**
 * Class CourseCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class CourseCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation { store as traitStore; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation { update as traitUpdate; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Course');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/course');
        $this->crud->setEntityNameStrings('course', 'courses');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        $this->crud->setFromDb();
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(CourseRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        //$this->crud->setFromDb();
        $this->crud->addField([
            'label' => 'Học kỳ',
            'type' => 'select2',
            'name' => 'term_id',
            'entity' => 'term',
            'model' => 'App\Models\Term',
            'attribute' => 'name'
        ]);
        $this->crud->addField([
            'label' => 'Môn học',
            'type' => 'select2',
            'name' => 'subject_id',
            'entity' => 'subject',
            'model' => 'App\Models\Subject',
            'attribute' => 'name'
        ]);
        $this->crud->addField([
            'label' => "Giảng viên ",
            'type' => 'select2_multiple',
            'name' => 'lecturers', // the method that defines the relationship in your Model
            'entity' => 'lecturers', // the method that defines the relationship in your Model
            'attribute' => 'email', // foreign key attribute that is shown to user
            'model' => "App\Lecturer", // foreign key model
            'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $subject = Subject::where('id', $request['subject_id'])->firstOrFail();
        $other_courses_count =  Course::where('subject_id', $subject->id)->count() + 1;
        $this->crud->request->request->add(['code' => $subject->code . ' ' . $other_courses_count]);
        $this->crud->addField([
            'type' => 'hidden',
            'name' => 'code',
        ]);
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
