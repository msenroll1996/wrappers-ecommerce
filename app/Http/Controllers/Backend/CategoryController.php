<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    private $title,$route;

    public function __construct()
    {
        
        $this->title = "Category";
        $this->route = "/admin/category";
        
        
    }
    public function index(){
        $title = 'Category';
        $route = "/admin/category";
        $categories = Category::all();

        return view('backend.admin.categories.index',compact('title','route','categories'));
    }

    public function add(){
        return view('backend.admin.categories.add_form',['title' => $this->title,'route' => $this->route]);
    }
    public function store(Request $request){
        $category =  Category::create([
            'name' => $request['name'],
            'status' => $request['status'],
            'slug' => $request['slug'],
            
        ]);
        
      
        if($category){
            $request->session()->flash('alert-success', 'Category was successful added!');
            return redirect('/admin/category');
        }
        $request->session()->flash('alert-danger', 'Something went wrong!');
            return redirect('/admin/category');
    }
    public function edit($id){
        $category = Category::findorfail($id);
        return view('backend.admin.categories.edit_form',['title' => $this->title,'route' => $this->route,'category' => $category]);
    }
    public function update(Request $request,$id){
        $category = Category::findorfail($id);
        
        $category->name = $request->name;
        $category->status = $request->status;
        $category->slug = $request->slug;
    
        $category->save();
        $request->session()->flash('alert-success', 'Category was successful updated!');
        return redirect('/admin/category');
    }

    public function destroy(Request $request,$id){
        $category = Category::find($id);
        $category->delete();
        $request->session()->flash('alert-success', 'Category was successful deleted!');
        return redirect('/admin/category');
    }

}
