<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function users(){
        $users=User::orderBy('created_at','desc')->get();
        return view('admin.user',compact('users'));
    }
    public function add_user(Request $request){
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
    	 $input=$request->all();
        User::create($input);
        return redirect()->back()->with('message', 'Record Added successfully!!!');
    }
    public function edit_user(Request $request)
    {
    	 $user= User::find($request->id);
        $validated = $request->validate([
            'name' => 'required|unique:users,name,'.$user->id,
            'email' => 'required|unique:users,email,'.$user->id,
            'password' => $request->password != null ? 'required|sometimes|min:8' : '',
            
        ]);
    	$input=$request->except(['_token']);
        if($request->password){
       $input['password']= Hash::make($input['password']);
        }
        else{
       unset($input['password']);
        }
        $input['name']=$request->name;
        User::where('id',$request->id)->update($input);
        return redirect()->back()->with('message', 'Record Updated successfully!!!');
    }
    public function delete_user($id){
        $user=User::find($id);
        $user->delete();
        return redirect()->back()->with('message', 'Record deleted successfully!!!');
        }
}
