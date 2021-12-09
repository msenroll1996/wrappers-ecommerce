<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CategoryController extends Controller
{
    private $title,$route;

    public function __construct()
    {
        
        $this->title = "Categories";
        $this->route = "/admin/category";
        
        
    }
    public function index(){
        $title = 'Categories';
        $route = "/admin/category";
        $categories = Category::all();

        return view('backend.admin.categories.index',compact('title','route','categories'));
    }

    public function add(){
        $categories = Category::whereNull('parent_id')->get();
        return view('backend.admin.categories.add_form',['title' => $this->title,'route' => $this->route,'categories' => $categories]);
    }
    public function store(Request $request){
        $this->validate($request, [
            
            'cover_image' => 'mimes:jpeg,png,jpg',
          
           
        ]);
        
        if($request->hasFile('cover_image')){
            $image_path = Storage::disk('public')->putFile('images/categories/'.$request->name, $request->file('cover_image'));
        }
        $category =  Category::create([
            'parent_id' => $request['parent_id'],
            'name' => $request['name'],
            'status' => $request['status'],
            'slug' => $request['slug'],
            'description' => $request['description'],
            'cover_image' => $image_path ?? null,
            
        ]);
        
      
        if($category){
            $request->session()->flash('alert-success', 'Category was successful added!');
            return redirect('/admin/category');
        }
        $request->session()->flash('alert-danger', 'Something went wrong!');
            return redirect('/admin/category');
    }
    public function edit($id){
        $old_category = Category::findorfail($id);
        $categories = Category::whereNull('parent_id')->get();
        return view('backend.admin.categories.edit_form',['title' => $this->title,'route' => $this->route,'old_category' => $old_category,'categories' => $categories]);
    }
    public function update(Request $request,$id){
        $this->validate($request, [
            
            'cover_image' => 'mimes:jpeg,png,jpg',
           
           
        ]);
        $category = Category::findorfail($id);
        if($request->hasFile('cover_image')){
            
            if($category->cover_image != null){
                unlink(storage_path('app/public/'.$category->cover_image));
            }
            $path_first = Storage::disk('public')->putFile('images/categories/'.$request->name, $request->file('cover_image'));
            $category->cover_image = $path_first;
           
        }
        $category->parent_id = $request->parent_id;
        $category->name = $request->name;
        $category->status = $request->status;
        $category->slug = $request->slug;
        $category->description = $request->description;
    
        $category->save();
        $request->session()->flash('alert-success', 'Category was successful updated!');
        return redirect('/admin/category');
    }

    public function destroy(Request $request,$id){
        $category = Category::find($id);
        if($category->cover_image != null){
            unlink(storage_path('app/public/'.$category->cover_image));
        }
        $category->delete();
        $request->session()->flash('alert-success', 'Category was successful deleted!');
        return redirect('/admin/category');
    }

    public function check_slug(Request $request){
        $slug = SlugService::createSlug(Category::class,'slug',$request->name);
        return response()->json(['slug' => $slug]);
    }

}
