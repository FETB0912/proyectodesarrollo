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
    /**
     * show muestra 3 registros de la BD
     *
     * @return void
     */
    public function show()
    {
        $categories = category::limit(3)->get();
        // dd($categories->service);
        return view('category', [
            'categories' => $categories
        ]);


    }
    
    /**
     * showService Muesrta servicios segun la categoria que pertenece(index)
     *
     * @param  mixed $request
     * @return void
     */
    public function showService(Request $request)
    {
        // dd($request);
        $service = Service::where('category_id', $request->category_id)->first();
        dd($service->category);
    }
    
    /**
     * servicesByCategory Complementa el mostrar servicios por categoria
     *
     * @param  mixed $request
     * @return void
     */
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

    //FERNANDO ENRIQUE TORRES y FERNANDA JIMENEZ CRUD
    
    /**
     * addCategory CRUD Agregar categorias
     *
     * @param  mixed $request
     * @return void
     */
    public function addCategory(Request $request)
    {
        return view ('add-category');
    }
    
    /**
     * storeCategory Almacena las categorias ingresadas en el Crud add-categories
     *
     * @param  mixed $request
     * @return void
     */
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

        //return back()->with('category_added','Category record has been inserted');//Message Alert
        return redirect('all-categories')->with('mensaje','Empleado agregado con exito');
    }
    
    /**
     * categories Muestra todas las categorias almacenadas
     *
     * @return void
     */
    public function categories()
    {
        $categories = Category::all();
        return view('all-categories',compact('categories'));
    }
    
    /**
     * editCategory Lleva al view de categorias
     *
     * @param  mixed $category_id
     * @return void
     */
    public function editCategory($category_id)
    {
       // dd($category_id);
        //$service = Service::where('category_id', $request->category_id)->first();
        $category = Category::where('category_id', $category_id)->first();
        //dd($category);
        return view('edit-category',compact('category'));
    }
    
    /**
     * updateCategory Edita las categorias
     *
     * @param  mixed $request
     * @return void
     */
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
        return redirect('all-categories')->with('mensaje','Empleado agregado con exito');
        //return back()->with('category_updated','Category record has been updated');//Message Alert
    }
    
    /**
     * deleteCategory Elimina las categorias
     *
     * @param  mixed $category_id
     * @return void
     */
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