<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\District;

class HomeController extends Controller
{
    public function index(){
    	return view('add-item');
    }

    public function viewDistrict(){
    	$districts=District::all();
    	return view('view-list',compact('districts'));
    }

    public function getAllDistrict(){
    	$districts=District::all();
    	return response()->json($districts);
    }
}
