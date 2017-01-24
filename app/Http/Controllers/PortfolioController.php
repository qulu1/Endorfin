<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Portfolio;


class PortfolioController extends Controller
{	
    public function __construct(){
        return $this->middleware('auth');   
    }

    public function index(){
    	$portfolio = Portfolio::all();
    	return view('admin.portfolio',compact('portfolio'));

    }
    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required|unique:portfolios|max:255',
            'photo' => 'required',
        ]); 
    	$portfolio = New Portfolio;
        if ($request->hasFile('photo')) {

            $name = time().".".$request->file("photo")->extension();
            $request->file("photo")->move(public_path().'/images',$name);  
        };
        $portfolio->title = $request->title;
        $portfolio->photo = $name;
        $portfolio->save();
    	return back();
    }

    public function edit($id){

        $portfolio = Portfolio::find($id);
        return view('admin.portfolio-edit',compact('portfolio'));

    }
    public function update($id, Request $request){
        $this->validate($request, [
            'title' => 'required|max:255',
            // 'photo' => 'required',
        ]);         
        $portfolio = Portfolio::find($id);
        if ($request->hasFile('photo')) {

            $name = time().".".$request->file("photo")->extension();
            $request->file("photo")->move(public_path().'/images',$name);  
            $portfolio->photo = $name;
        };
        $portfolio->title = $request->title;
        $portfolio->update();
        return redirect('/portfolio');
    }
    public function destroy($id){
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
        return redirect('/portfolio');
    }
}
