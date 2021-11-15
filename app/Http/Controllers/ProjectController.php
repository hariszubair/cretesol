<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectsImage;
use Intervention\Image\Facades\Image as Image;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function projects()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();
        return view('admin.projects', compact('projects'));
    }
    public function add_project(Request $request)
    {
        return $request;
        $validated = $request->validate([
            'name' => 'required|unique:projects,name',
            'slug' => 'required|unique:products,slug,',

        ]);
        $input = $request->all();
        $project = Project::create($input);

        if ($files = $request->file('project_image')) {
            foreach ($files as $key => $file) {
                $temp_project = [];
                $temp_project['project_id'] = $project->id;
                $name_array = array_map('strrev', explode('.', strrev($file->getClientOriginalName())));
                $name = $key . '_' . time() . '.' . $name_array[0];
                if ($key == 0) {
                    $project->update(['image' => '/images/assets/' . $name]);
                    $project->update(['compressed_image' => '/images/assets/compressed_' . $name]);
                }
                $file->move(public_path('images/assets'), $name);
                $input['image'] = '/images/assets/' . $name;
                $temp_project['image'] = '/images/assets/' . $name;
                $image = Image::make(public_path($input['image']))->resize(370, 370);
                $image->save(public_path('images/assets/compressed_' . $name));
                $input['compressed_image'] = '/images/assets/compressed_' . $name;
                $temp_project['compressed_image'] = '/images/assets/compressed_' . $name;
                ProjectsImage::create($temp_project);
            }
        }

        return redirect()->back()->with('message', 'Record Added successfully!!!');
    }
    public function edit_project($id)
    {
        $project = Project::with('images')->find($id);
        return view('admin.edit_project', compact('project'));
    }

    public function update_project(Request $request, $id)
    {
        $project = Project::find($request->id);
        $validated = $request->validate([
            'name' => 'required|unique:projects,name,' . $id,
            'slug' => 'required|unique:products,slug,' . $id,
        ]);
        $input = [];

        $input['name'] = $request->name;
        $input['slug'] = $request->slug;
        Project::where('id', $request->id)->update($input);
        return redirect()->back()->with('message', 'Record Updated successfully!!!');
    }
    public function delete_project($id)
    {
        $project = Project::with('images')->find($id);

        $images = $project->images;
        foreach ($images as $key => $image) {
            if (file_exists(public_path($image->image))) {
                unlink(public_path($image->image));
            }
            if (file_exists(public_path($image->compressed_image))) {
                unlink(public_path($image->compressed_image));
            }
        }
        ProjectsImage::where('project_id', $id)->delete();
        $project->delete();
        return redirect()->back()->with('message', 'Record deleted successfully!!!');
    }
    public function add_project_image(Request $request)
    {

        if ($files = $request->file('project_image')) {
            foreach ($files as $key => $file) {
                $name_array = array_map('strrev', explode('.', strrev($file->getClientOriginalName())));
                $name = $key . '_' . time() . '.' . $name_array[0];
                $file->move(public_path('images/assets/'), $name);
                $temp_project['project_id'] = $request->project_id;
                $temp_project['image'] = '/images/assets/' . $name;
                $image = Image::make(public_path($temp_project['image']))->fit(540, 300);
                $image->save(public_path('images/assets/compressed_' . $name));
                $temp_project['compressed_image'] = '/images/assets/compressed_' . $name;
                ProjectsImage::create($temp_project);
            }
        }
        return redirect()->back();
    }
    public function delete_image(Request $request, $id)
    {
        $project = ProjectsImage::find($id);
        if (file_exists(public_path($project->image))) {
            unlink(public_path($project->image));
        }
        if (file_exists(public_path($project->compressed_image))) {
            unlink(public_path($project->compressed_image));
        }
        $project->delete();
        return redirect()->back();
    }
}
