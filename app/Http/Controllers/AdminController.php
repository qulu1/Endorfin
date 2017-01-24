<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;


class AdminController extends Controller
{
	public function __construct(){
		return $this->middleware('auth');	
	}
    public function index(){

    	return view('admin.admin');

    }

}
