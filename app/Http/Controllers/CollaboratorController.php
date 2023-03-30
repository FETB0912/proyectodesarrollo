<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\collaborator;
use App\Http\Controllers\Controller;
use App\Models\Service;

class CollaboratorController extends Controller
{
    //
    public function addCollaborator(Request $request)
    {
        return view ('add-collaborator');
    }

    public function storeCollaborator(Request $request)
    {
    
        $name = $request->name;
        $lastname = $request->lastname;
        $phone = $request->phone;
        $email = $request->email;
        $url_image=$request->file('file');
        $imageName = time().'.'.$url_image->extension();
        $url_image->move(public_path('images'),$imageName);
        

        $collaborator = new collaborator();
        $collaborator->name=$name;
        $collaborator->lastname=$lastname;
        $collaborator->phone=$phone;
        $collaborator->email=$email;
        $collaborator->url_image=$imageName;
        $collaborator->save();
        

        //return back()->with('collaborator_added','collaborator record has been inserted');//Message Alert
        return redirect('all-collaborators')->with('mensaje','Empleado agregado con exito');
    }

    public function collaborators()
    {
        $collaborators = collaborator::all();
        return view('all-collaborators',compact('collaborators'));
    }


    public function editCollaborator($collab_id)
    {
        $collaborator = collaborator::where('collab_id',$collab_id)->first();
        return view('edit-collaborator',compact('collaborator'));
    }


    public function updateCollaborator(Request $request)
    {
        $name = $request->name;
        $lastname = $request->lastname;
        $phone = $request->phone;
        $email = $request->email;
        $url_image=$request->file('file');
        $imageName = time().'.'.$url_image->extension();
        $url_image->move(public_path('images'),$imageName);
        

        $collaborator = collaborator::find($request->collab_id);
        $collaborator->name=$name;
        $collaborator->lastname=$lastname;
        $collaborator->phone=$phone;
        $collaborator->email=$email;
        $collaborator->url_image=$imageName;
        $collaborator->save();

        return redirect('all-collaborators')->with('mensaje','Empleado agregado con exito');

    }

    public function deleteCollaborator($collab_id)
    {
        $collaborator = Collaborator::find($collab_id);
        unlink(public_path('images').'/'.$collaborator->url_image);
        $collaborator->delete();
        return back()->with('collaborator_deleted','Collaborator deleted successfully!');

    }
}
