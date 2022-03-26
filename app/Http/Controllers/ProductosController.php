<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Producto;



class ProductosController extends Controller
{
    public function index()
    {

        $producto = Producto::orderBy('created_at','DESC')->get();
        //$trabajador = DB::table('empleados')->get();
        return view('menuPrin', compact('producto'));
    }

    public function create()
    {
        return view('formProductos');
    }


    public function store(Request $request)
    {
      
    $registro=$request->all();
    if($archivo=$request->file('Imagen')){
        $nombre=$archivo->getClientOriginalName();
        $archivo->move('imagenes',$nombre);
        $registro['Imagen']=$nombre;
    }
    
        Producto::create($registro);
        return redirect()->route('productos.index');

    }

    public function show($id)
    {
        
        return view('perfilProductos',[
            'producto' => Producto::find($id)
        ]);
    }


}
