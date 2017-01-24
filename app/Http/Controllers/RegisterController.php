<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

use App\Http\Requests;

use App\User;

use Auth;


class RegisterController extends Controller
{
	public function __construct(){
		return $this->middleware('auth');	
	}

	public function index(){
        if (Auth::user()->type_id == 1) {
            $users = User::all();
            return view('admin.admins',compact('users'));            
        }else {
            return redirect()->back();
        }        
	}
    public function register(){
        if (Auth::user()->type_id == 1) {
            return view('auth.register');
        }else {
            return redirect('/admin');
        }        
        }


    public function create(Request $request){
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]); 
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('/admin');
    }

    public function edit($id){
		$users = User::find($id);
		return view('admin.admins-edit',compact('users'));

    }
    public function update($id,Request $request){
        $this->validate($request, [
            'newpass' => 'required|min:6|',
        ]); 
    	$users = User::find($id);
     		$users->name = $request->name;
    		$users->email = $request->email;	    	
		if (password_verify($request->password,$users->password)) {		
		    $users->password = bcrypt($request->newpass);
            return back()->withMessage("Your Changes have been saved!");

		}else{
            return back()->withMessage("Your Password is not Right!");
		}   	
		$users->save();
    }
    public function destroy($id){

    	$users = User::find($id);
    	$users->delete();
    	return back();
    }
}
