<?php namespace App\Controllers\Admin;


use App\Controllers\BaseController;




class Categories extends BaseController
{
    public function index(){

        $model = model('CategoriesModel');
        return view('Admin/categories', [
            'categories' => $model->paginate(config('Blog')->regPerPage),
            'pager' => $model->pager
        ]);
    }

    public function create(){

        return view('Admin/categories_create');
    }

    public function store(){

        if(!$this->validate([
            'name' => 'required|alpha_space|max_length[120]'
        ])){
            return redirect()->back()->withInput()
                ->with('msg', [
                    'type' => 'danger',
                    'body' => 'Tienes campos incorrectos'
                ])
                ->with('errors',$this->validator->getErrors());
        }

        $model = model('CategoriesModel');

        $model->save([
            'name' => trim($this->request->getVar('name'))
        ]);

        return redirect('categories')->with('msg', [
            'type' => 'success',
            'body' => 'La categoria fue guardada correctamente'
        ]);

        dd($this->request->getPost());
    }

    public function edit(string $id)
    {
        echo "editandoo" . $id; 
    }

    
}