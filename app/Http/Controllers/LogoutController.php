<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class LogoutController extends Controller
{    
    /**
     * logout 
     *
     * @return void
     */
    public function logout(){
     Session::flush(); //actualiza y libera el flujo de las seciones 
     Auth::logout();

     return redirect()->to('/');//retorne a otra ruta
    }
}