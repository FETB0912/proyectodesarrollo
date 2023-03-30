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

    //FERNANDO ENRIQUE TORRES CRUD

    public function addCategory(Request $request)
    {
        return view ('add-category');
    }

    public function storeCategory(Request $request)
    {
        $name = $request->name;
        $description = $request->description;
        $image=$request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        $category = new Category();
        $category->name=$name;
        $category->description=$description;
        $category->image=$imageName;
        $category->save();

        return back()->with('category_added','Category record has been inserted');//Message Alert
    }

    public function categories()
    {
        $categories = Category::all();
        return view('all-categories',compact('categories'));
    }

    public function editCategory($category_id)
    {
       // dd($category_id);
        //$service = Service::where('category_id', $request->category_id)->first();
        $category = Category::where('category_id', $category_id)->first();
        //dd($category);
        return view('edit-category',compact('category'));
    }

    public function updateCategory(Request $request)
    {
        $name = $request->name;
        $description = $request->description;
        $image=$request->file('file');
        //ojo aqui
        $imageName = time().'.'.$image->extension();//error en esta linea- para que funcione tiene que subir otra imagen para funcionar o poner la misma
        $image->move(public_path('images'),$imageName);
        //dd($request);
        //$category = Category::where('category_id', $request->category_id)->first();
    
       
        //dd($category);
        $category = Category::find($request->category_id);
        $category->name=$name;
        $category->description=$description;
        $category->image= $imageName;
        $category->save();

        return back()->with('category_updated','Category record has been updated');//Message Alert
    }

    public function deleteCategory($category_id)
    {
        $category = Category::find($category_id);
        unlink(public_path('images').'/'.$category->image);
        $category->delete();
        return back()->with('category_deleted','Category deleted successfully!');
    }

}



            //$categor=DB::table('categories')
            // ->where('name','=','Hogar')
            //->get();
            //return view('category', array('categories'=>$categor));

            //categories->services; trae el servicio pero va eso debe estar bien las relaciones
            //cambio


 //$service = Service::where('category_id', $request->category_id)->first();