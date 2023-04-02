<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Collaborator;
use App\Models\Category;


class ServiceController extends Controller
{
    //
    
    /**
     * index Muestra los servicios a nivel de administrador
     *
     * @return void
     */
    public function index()
    {
        $services = Service::with('category','collaborator')->get();
        return view('all-services',compact('services'));
    }

    
    
    /**
     * deleteService elimina el registro del servicio
     *
     * @param  mixed $service_id
     * @return void
     */
    public function deleteService($service_id)
    {
        $service = Service::find($service_id);
        $service->delete();
        return back()->with('service_deleted','Service deleted successfully!');

    }


}


