<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Client;


class ClientsController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');   
    }
    
    public function index(){
    	$client = Client::all(); 
    	return view('admin.clients',compact('client')); 	
    	
    }
    public function store(Request $request){
        $this->validate($request, [
            'photo' => 'required',
        ]); 
    	$client = New Client;
        if ($request->hasFile('photo')) {

            $name = time().".".$request->file("photo")->extension();
            $request->file("photo")->move(public_path().'/images',$name);  
        };
        $client->photo = $name;
        $client->save();
    	return back();
    }

    public function edit($id){

        $client = Client::find($id);
        return view('admin.clients-edit',compact('client'));

    }
    public function update($id, Request $request){
        $this->validate($request, [
            'photo' => 'required',
        ]);         
        $client = Client::find($id);
        if ($request->hasFile('photo')) {

            $name = time().".".$request->file("photo")->extension();
            $request->file("photo")->move(public_path().'/images',$name);  
            $client->photo = $name;
        };
        $client->update();
        return redirect('/clients');
    }
    public function destroy($id){
        $client = Client::find($id);
        $client->delete();
        return redirect('/clients');
    }    
}
