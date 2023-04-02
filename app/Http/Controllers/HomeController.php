<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class HomeController extends Controller
{    
    /**
     * index muestra categorias en el index
     *
     * @return void
     */
    public function index()
    {
        $categories = category::limit(3)->get();
        // dd($categories->service);
        return view('index', [
            'categories' => $categories
        ]);

     
    }
    
    /**
     * Muestra los servicios en la pagina de inicio
     *
     * @return void
     */
    public function tarjeta()
    {
        $services = service::limit(3)->get();
        // dd($categories->service);
        return view('index', [
            'services' => $services
        ]);

     
    }
}
