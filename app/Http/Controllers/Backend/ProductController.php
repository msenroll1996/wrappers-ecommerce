<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ProductController extends Controller
{
    private $title,$route;

    public function __construct()
    {
        
        $this->title = "Products";
        $this->route = "/admin/products";
        
        
    }
    public function index(){
        $title = 'Products';
        $route = "/admin/products";
        $products = Product::all();

        return view('backend.admin.products.index',compact('title','route','products'));
    }

    public function add(){
        $categories = Category::whereNull('parent_id')->get();
        return view('backend.admin.products.add_form',['title' => $this->title,'route' => $this->route,'categories' => $categories]);
    }

    public function getSubCategory(Request $request){
        $sub_categories = SubCategory::where('category_id',$request['id'])->get();
        return response()->json(['results' => $sub_categories]);
    }

    public function store(Request $request){
        $this->validate($request, [
            
            'image_first' => 'mimes:jpeg,png,jpg',
            'image_second' => 'mimes:jpeg,png,jpg',
            'image_third' => 'mimes:jpeg,png,jpg',
           
        ]);
        
        if($request->hasFile('image_first')){
            $path_first = Storage::disk('public')->putFile('images/products/'.$request->name, $request->file('image_first'));
        }
        if($request->hasFile('image_second')){
            $path_second = Storage::disk('public')->putFile('images/products/'.$request->name, $request->file('image_second'));
        }
        if($request->hasFile('image_third')){
            $path_third = Storage::disk('public')->putFile('images/products/'.$request->name, $request->file('image_third'));
        }
       
  
       $product =  Product::create([

           'name' => $request['name'],
           'code' => $request['code'],
           'slug' => $request['slug'],
           'quantity' => $request['quantity'],
           'color' => $request['color'],
           'description' => $request['description'],
           'key_points' => $request['key_points'],
           'selling_price' => $request['selling_price'],
           'category_id' => $request['category_id'],
           'sub_category_id' => $request['sub_category_id'],
           'status' => $request['status'],
           'image_first' => $path_first ?? null,
           'image_second' => $path_second ?? null,
           'image_third' => $path_third ?? null,
           'display_in' => $request['display_in'] ?? null,

        
           
       ]);
       
     
       if($product){
           $request->session()->flash('alert-success', 'Product was successful added!');
           return redirect('/admin/products');
       }
       $request->session()->flash('alert-danger', 'Something went wrong!');
         return redirect('/admin/products');
       
    }

    public function edit($id){
        $product = Product::findorfail($id);
        $categories = Category::whereNull('parent_id')->get();
        // $sub_categories = SubCategory::where('category_id',$product->category_id)->get();
        return view('backend.admin.products.edit_form',['title' => $this->title,'route' => $this->route,'product' => $product,'categories' => $categories]);
    }

    public function update(Request $request,$id){
        
        $this->validate($request, [
            
            'image_first' => 'mimes:jpeg,png,jpg',
            'image_second' => 'mimes:jpeg,png,jpg',
            'image_third' => 'mimes:jpeg,png,jpg',
           
        ]);
        
        $product = Product::findorfail($id);
        if($request->hasFile('image_first')){
            
            if($product->image_first != null){
                unlink(storage_path('app/public/'.$product->image_first));
            }
            $path_first = Storage::disk('public')->putFile('images/products/'.$request->name, $request->file('image_first'));
            $product->image_first = $path_first;
           
        }
        if($request->hasFile('image_second')){
            
            if($product->image_second != null){
                unlink(storage_path('app/public/'.$product->image_second));
            }
            $path_second = Storage::disk('public')->putFile('images/products/'.$request->name, $request->file('image_second'));
            $product->image_second = $path_second;
           
        }
        if($request->hasFile('image_third')){
            
            if($product->image_third != null){
                unlink(storage_path('app/public/'.$product->image_third));
            }
            $path_third = Storage::disk('public')->putFile('images/products/'.$request->name, $request->file('image_third'));
            $product->image_third = $path_third;
           
        }
        $product->name = $request->name;
        $product->code = $request->code;
        $product->slug = $request->slug;
        $product->selling_price = $request->selling_price;
        $product->quantity = $request->quantity;
        $product->color = $request->color;
        $product->key_points = $request->key_points;
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->description = $request->description;
        $product->status = $request->status;
        $product->display_in = $request->display_in;
        $product->save();
        $request->session()->flash('alert-success', 'Product was successful updated!');
        return redirect('/admin/products');
        
        
    }
    public function destroy(Request $request,$id){
        
        $product = Product::find($request->id);

        if($product->image_first != null){
            unlink(storage_path('app/public/'.$product->image_first));
        }
        if($product->image_second != null){
            unlink(storage_path('app/public/'.$product->image_second));
        }
        if($product->image_third != null){
            unlink(storage_path('app/public/'.$product->image_third));
        }

        $product->delete();
        $request->session()->flash('alert-success', 'Product was successful deleted!');
        return redirect('/admin/products');

    }

    public function check_slug(Request $request){
        $slug = SlugService::createSlug(Product::class,'slug',$request->name);
        return response()->json(['slug' => $slug]);
    }

}
