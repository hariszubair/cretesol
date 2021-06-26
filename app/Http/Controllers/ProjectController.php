<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Intervention\Image\Facades\Image as Image;
class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function projects(){
        $projects=Project::orderBy('created_at','desc')->get();
        return view('admin.projects',compact('projects'));
    }
    public function add_project(Request $request){
        $validated = $request->validate([
            'name' => 'required|unique:projects,name',

        ]);
    	 $input=$request->all();
       if($file = $request->file('image')){
            $name_array=array_map('strrev', explode('.', strrev($file->getClientOriginalName())));   
            $name= time().'.'.$name_array[0];
            $file->move(public_path('images/assets'), $name);
            $input['image']='/images/assets/'.$name;
            $image=Image::make(public_path($input['image']))->resize(370, 370);
            $image->save(public_path('images/assets/compressed_'.$name));
            $input['compressed_image']='/images/assets/compressed_'.$name;
        }
        Project::create($input);
        return redirect()->back()->with('message', 'Record Added successfully!!!');
    }
    public function edit_project(Request $request)
    {
    	$project= Project::find($request->id);
        $validated = $request->validate([
            'name' => 'required|unique:projects,name,'.$project->id,

        ]);
    	$input=[];
       if($file = $request->file('project_image')){
       		if(file_exists(public_path($project->image))) {
            unlink(public_path($project->image));
        }
        if(file_exists(public_path($project->compressed_image))) {
            unlink(public_path($project->compressed_image));
        }
            $name_array=array_map('strrev', explode('.', strrev($file->getClientOriginalName())));   
            $name= time().'.'.$name_array[0];
            $file->move(public_path('images/assets'), $name);
            $input['image']='/images/assets/'.$name;
            $image=Image::make(public_path($input['image']))->resize(370, 370);
            $image->save(public_path('images/assets/compressed_'.$name));
            $input['compressed_image']='/images/assets/compressed_'.$name;
        }
        $input['name']=$request->name;
        $input['category']=$request->category;
        Project::where('id',$request->id)->update($input);
        return redirect()->back()->with('message', 'Record Updated successfully!!!');
    }
    public function delete_project($id){
        $project=Project::find($id);
        if(file_exists(public_path($project->image))) {
        unlink(public_path($project->image));
        }
        if(file_exists(public_path($project->compressed_image))) {
            unlink(public_path($project->compressed_image));
        }
        $project->delete();
        return redirect()->back()->with('message', 'Record deleted successfully!!!');
}
}
