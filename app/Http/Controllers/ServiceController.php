<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

use App\Service;



class ServiceController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');   
    }
		
    public function index(){
    	$category = Category::all();
    	$service = Service::all();
    	return view('admin.services', compact('category','service'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'text' => 'required|max:255',
            'category' => 'required',
        ]); 
    	$service = new Service;
    	$service->text = $request->text;
    	$service->category_id = $request->category;
    	$service->save();
    	return back();
    }

    public function edit($id){

        $service = Service::find($id);
    	$category = Category::all();
        return view('admin.service-edit',compact('service','category'));

    }
    public function update($id, Request $request){
        $this->validate($request, [
            'text' => 'required|max:255',
        ]);         
        $service = Service::find($id);
        $service->text = $request->text;
    	$service->category_id = $request->category;
        $service->update();
        return redirect('/services');
    }
    public function destroy($id){
        $service = Service::find($id);
        $service->delete();
        return redirect('/services');
    }

}
