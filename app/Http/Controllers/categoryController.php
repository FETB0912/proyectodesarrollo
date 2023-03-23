<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\categoriesRequest;
use App\Models\category;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\DB;


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
                 // ->where('name','=','Hogar')
                  //->get();
      //return view('category', array('categories'=>$categor));

      //categories->services; trae el servicio pero va eso debe estar bien las relaciones
      //cambio

    } 

    public function showService(Request $request)
    {
     // dd($request);
      $service = Service::where('category_id', $request->category_id)->first();
      dd($service);
      
    }

    
    
}





