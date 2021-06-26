<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Client;
use Intervention\Image\Facades\Image as Image;
class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function clients(){
        $clients=Client::orderBy('created_at','desc')->get();
        return view('admin.client',compact('clients'));
    }
    public function add_client(Request $request){
        $validated = $request->validate([
            'name' => 'required|unique:clients,name',

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
        Client::create($input);
        return redirect()->back()->with('message', 'Record Added successfully!!!');
    }
    public function edit_client(Request $request)
    {
    	$client= Client::find($request->id);
        $validated = $request->validate([
            'name' => 'required|unique:clients,name,'.$client->id,

        ]);
    	$input=[];
       if($file = $request->file('client_image')){
       		if(file_exists(public_path($client->image))) {
            unlink(public_path($client->image));
        }
        if(file_exists(public_path($client->compressed_image))) {
            unlink(public_path($client->compressed_image));
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
        Client::where('id',$request->id)->update($input);
        return redirect()->back()->with('message', 'Record Updated successfully!!!');
    }
    public function delete_client($id){
        $client=Client::find($id);
        if(file_exists(public_path($client->image))) {
        unlink(public_path($client->image));
        }
        if(file_exists(public_path($client->compressed_image))) {
            unlink(public_path($client->compressed_image));
        }
        $client->delete();
        return redirect()->back()->with('message', 'Record deleted successfully!!!');
        }
}
