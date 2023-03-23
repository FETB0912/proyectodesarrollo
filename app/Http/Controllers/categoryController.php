<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\categoriesRequest;
use App\Models\category;


use Illuminate\Support\Facades\Auth;
use DB;

class categoryController extends Controller
{
    public function show()
    {
      $categories=category::get();
      //dd($categories->name);
      return view('category', [
	  	'categories' => $categories
	  	]);



      //$categor=DB::table('categories')
                  //->where('name','=','Hogar')
                  //->get();
      //return view('category', array('categories'=>$categor));


    } 
    
}



