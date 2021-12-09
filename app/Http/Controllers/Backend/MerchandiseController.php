<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Merchandise;
use Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class MerchandiseController extends Controller
{
    private $title,$route;

    public function __construct()
    {
        
        $this->title = "Merchandise";
        $this->route = "/admin/merchandise";
        
        
    }
    public function index(){
        $title = 'Merchandise';
        $route = "/admin/merchandise";
        $merchandises = Merchandise::where('status',true)->get();

        return view('backend.admin.merchandises.index',compact('title','route','merchandises'));
    }

    public function add(){
        return view('backend.admin.merchandises.add_form',['title' => $this->title,'route' => $this->route]);
    }
    public function store(Request $request){
        $this->validate($request, [
            
            'image' => 'mimes:jpeg,png,jpg',
          
           
        ]);
        
        if($request->hasFile('image')){
            $image_path = Storage::disk('public')->putFile('images/merchandises/'.$request->name, $request->file('image'));
        }
        $merchandise =  Merchandise::create([
            'name' => $request['name'],
            'status' => $request['status'],
            'slug' => $request['slug'],
            'website_link' => $request['website_link'],
            'image' => $image_path ?? null,
            
        ]);
        
      
        if($merchandise){
            $request->session()->flash('alert-success', 'Merchandise was successful added!');
            return redirect('/admin/merchandise');
        }
        $request->session()->flash('alert-danger', 'Something went wrong!');
            return redirect('/admin/merchandise');
    }
    public function edit($id){
        $merchandise = Merchandise::findorfail($id);
        return view('backend.admin.merchandises.edit_form',['title' => $this->title,'route' => $this->route,'merchandise' => $merchandise]);
    }
    public function update(Request $request,$id){
        $this->validate($request, [
            
            'image' => 'mimes:jpeg,png,jpg',
           
           
        ]);
        $merchandise = Merchandise::findorfail($id);
        if($request->hasFile('image')){
            
            if($merchandise->image != null){
                unlink(storage_path('app/public/'.$merchandise->image));
            }
            $path_first = Storage::disk('public')->putFile('images/merchandises/'.$request->name, $request->file('image'));
            $merchandise->image = $path_first;
           
        }
        $merchandise->name = $request->name;
        $merchandise->status = $request->status;
        $merchandise->slug = $request->slug;
        $merchandise->website_link = $request->website_link;
    
        $merchandise->save();
        $request->session()->flash('alert-success', 'Merchandise was successful updated!');
        return redirect('/admin/merchandise');
    }

    public function destroy(Request $request,$id){
        $merchandise = Merchandise::find($id);
        if($merchandise->image != null){
            unlink(storage_path('app/public/'.$merchandise->image));
        }
        $merchandise->delete();
        $request->session()->flash('alert-success', 'Merchandise was successful deleted!');
        return redirect('/admin/merchandise');
    }

    public function check_slug(Request $request){
        $slug = SlugService::createSlug(Merchandise::class,'slug',$request->name);
        return response()->json(['slug' => $slug]);
    }

}
