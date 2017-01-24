<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Staff;


class StaffController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');   
    }
        
    public function index(){
    	$staff = Staff::all();
    	return view('admin.staff',compact('staff'));
    	
    }
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|unique:staff|max:255',
            'surname' => 'required',
            'position' => 'required',
            'photo' => 'required',
        ]); 
    	$staff = New Staff;
        if ($request->hasFile('photo')) {

            $name = time().".".$request->file("photo")->extension();
            $request->file("photo")->move(public_path().'/images',$name);  
            $staff->photo = $name;
        };
        $staff->name = $request->name;
        $staff->surname = $request->surname;
        $staff->position = $request->position;
        $staff->save();
    	return back();
    }

    public function edit($id){

        $staff = Staff::find($id);
        return view('admin.staff-edit',compact('staff'));

    }
    public function update($id, Request $request){
        // $this->validate($request, [
        //     'name' => 'required|max:255',
        //     'surname' => 'required|max:255',
        //     'position' => 'required|max:255',
        //     'photo' => 'required',
        // ]);         
        $staff = Staff::find($id);
        if ($request->hasFile('photo')) {

            $name = time().".".$request->file("photo")->extension();
            $request->file("photo")->move(public_path().'/images',$name); 
        	$staff->photo = $name;
        };
        $staff->name = $request->name;
        $staff->surname = $request->surname;
        $staff->position = $request->position;
        $staff->update();
        return redirect('/staff');
    }
    public function destroy($id){
        $staff = Staff::find($id);
        $staff->delete();
        return redirect('/staff');
    }    
}
