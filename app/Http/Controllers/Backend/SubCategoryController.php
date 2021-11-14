<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;

class SubCategoryController extends Controller
{
    private $title,$route;

    public function __construct()
    {
        
        $this->title = "Sub Category";
        $this->route = "/admin/sub_category";
        
        
    }
    public function index(){
        $title = 'Sub Category';
        $route = "/admin/sub_category";
        $sub_categories = SubCategory::all();

        return view('backend.admin.sub_categories.index',compact('title','route','sub_categories'));
    }

    public function add(){
        $categories = Category::all();
        return view('backend.admin.sub_categories.add_form',['title' => $this->title,'route' => $this->route,'categories' => $categories]);
    }

    public function store(Request $request){
        $sub_category =  SubCategory::create([
            'name' => $request['name'],
            'status' => $request['status'],
            'category_id' => $request['category_id'],
            
        ]);
        
      
        if($sub_category){
            $request->session()->flash('alert-success', 'Sub Category was successful added!');
            return redirect('/admin/sub_category');
        }
        $request->session()->flash('alert-danger', 'Something went wrong!');
            return redirect('/admin/sub_category');
    }

    public function edit($id){
        $sub_category = SubCategory::findorfail($id);
        $categories = Category::all();
        return view('backend.admin.sub_categories.edit_form',['title' => $this->title,'route' => $this->route,'sub_category' => $sub_category,'categories' => $categories]);
    }
    public function update(Request $request,$id){
        $sub_category = SubCategory::findorfail($id);
        
        $sub_category->name = $request->name;
        $sub_category->status = $request->status;
        $sub_category->category_id = $request->category_id;
    
        $sub_category->save();
        $request->session()->flash('alert-success', 'Sub Category was successful updated!');
        return redirect('/admin/sub_category');
    }

    public function destroy(Request $request,$id){
        $sub_category = SubCategory::find($id);
        $sub_category->delete();
        $request->session()->flash('alert-success', 'Sub Category was successful deleted!');
        return redirect('/admin/sub_category');
    }
}
