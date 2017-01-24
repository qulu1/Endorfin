<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Portfolio;

use App\Client;

use App\Staff;

use App\Category;

use App\Service;

use DB;


class HomeeController extends Controller
{
    public function home(){
    	$portfolio = Portfolio::all();
    	$staff = Staff::all();
    	$client = Client::all();
        $creative = DB::table('services')->where('category_id','=',1)->get();
        $digital = DB::table('services')->where('category_id','=',2)->get();
        $marketing = DB::table('services')->where('category_id','=',3)->get();
    	return view('home.index', compact('portfolio','staff','client','creative','digital','marketing'));
    }
}
