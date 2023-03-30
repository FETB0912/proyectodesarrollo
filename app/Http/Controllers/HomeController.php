<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = category::limit(3)->get();
        // dd($categories->service);
        return view('index', [
            'categories' => $categories
        ]);

     
    }

    public function tarjeta()
    {
        $services = service::limit(3)->get();
        // dd($categories->service);
        return view('index', [
            'services' => $services
        ]);

     
    }
}
