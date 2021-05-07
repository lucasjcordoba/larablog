<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Se almacenan los datos que se consultan en la paginación y se renderizan en la vista
        $datos['blogs']=Blog::paginate(5);
        return view('blog.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Ésta variable es para que todos los datos que se envían se almacenen en el método store
        //$datosBLog=request()->all();
        // Excepción del TOKEN
        $datosBLog=request()->except('_token');

        //Almacena la imagen cargada en el form en la ruta uploads/public del proyecto
        if($request->hasFile('image')) {
            $datosBLog['image']=$request->file('image')->store('uploads', 'public');
        }

        Blog::insert($datosBLog);

        return response()->json($datosBLog);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //El método findOrFail devuelve toda la información correspondiente al parámetro indicado($id)
        $blog= Blog::findOrFail($id);

        return view('blog.edit', compact('blog'));//junto con la vista entrega la información de la variable blog creada en la línea anterior)
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Excepción del TOKEN y METHOD
        $datosBLog=request()->except(['_token', '_method']);

        if($request->hasFile('image')) {

            //Se consulta primero para obtener la información antigua
            $blog= Blog::findOrFail($id);

            //Se utiliza Storage para borrar la imagen antigua
            Storage::delete('public/'.$blog->image);
            //Se inserta una nueva imagen
            $datosBLog['image']=$request->file('image')->store('uploads', 'public');
        }


        // Se comparan que los datos sean los corrspondientes al id que se solicita
        Blog::where('id', '=', $id) -> update($datosBLog);

        //Se vuelve a consultar para recuperar la información si hubo cambio en la imagen
        $blog= Blog::findOrFail($id);

        return view('blog.edit', compact('blog'));//junto con la vista entrega la información de la variable blog creada en la línea anterior)
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Blog::destroy($id);
        return redirect('blog');
    }
}
