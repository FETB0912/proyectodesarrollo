<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\categoriesRequest;
use App\Models\category;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class categoryController extends Controller
{
    public function show()
    {
        $categories = category::limit(3)->get();
        // dd($categories->service);
        return view('category', [
            'categories' => $categories
        ]);


    }

    public function showService(Request $request)
    {
        // dd($request);
        $service = Service::where('category_id', $request->category_id)->first();
        dd($service->category);
    }

    public function servicesByCategory(Request $request)
    {
        $services = DB::table('services as s')
            ->join('categories as c', function ($join) {
                $join->on('s.category_id', '=', 'c.category_id');
            })->join('collaborators as co', function ($join) {
                $join->on('s.collab_id', '=', 'co.collab_id');
            })
            ->where('s.category_id', $request->category_id)->orderBy('s.category_id', 'desc')
            ->select(
                's.service_id',
                's.name',
                's.price',
                DB::raw('concat(co.name,  " ", co.lastname) as full_name'),
                'co.phone',
                'co.email',
                'co.url_image',
                'c.name as category_name'
            )->get();

        $categorie = DB::table('categories as c')
            ->select('c.name')
            ->where('c.category_id', $request->category_id)
            ->get();

        $data = ['services' =>  $services, 'categorie' => $categorie];

        return view('service')->with('data', $data);
       
    }
}



            //$categor=DB::table('categories')
            // ->where('name','=','Hogar')
            //->get();
            //return view('category', array('categories'=>$categor));

            //categories->services; trae el servicio pero va eso debe estar bien las relaciones
            //cambio


 //$service = Service::where('category_id', $request->category_id)->first();