<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Http\Requests\PostRequest as StoreRequest;
use App\Http\Requests\PostRequest as UpdateRequest;

/**
 * Class PostCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class PostCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation { store as traitStore; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation { update as traitUpdate; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Post');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/post');
        $this->crud->setEntityNameStrings('post', 'posts');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        //$this->addColumns();
        $this->crud->setFromDb();
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(PostRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        //$this->crud->setFromDb();
        $this->addFields();
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $this->crud->request->request->add(['slug'=> str_slug($request['title'])]);
        $this->crud->addField(['type' => 'hidden', 'name' => 'slug']);
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

    public function addColumns(){
        $this->crud->addColumn([
            'label' => 'Tiêu đề',
            'name' => 'title',
            'type' => 'model_function',
            'function_name' => 'getTitleWithLink',
            'limit' => 0,
        ]);

    }
    public function addFields(){
        $this->crud->addField([
            'label' => 'Tiêu đề',
            'name' => 'title',
            'type' => 'text'
        ]);
        $this->crud->addField([
            'label' => 'Nội dung',
            'name' => 'content',
            'type' => 'ckeditor'
        ]);
    }
}
