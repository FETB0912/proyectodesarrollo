<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;

class TarjetaController extends Controller
{    
    /**
     * tarjeta muestra las tarjetas de servicios 
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
