<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * //Mostrar una lista del recurso.
     */
    public function index()
    {
        $servicios = Servicio::all(); //Se consultan todas las categorias
        return view('servicios.index', ['servicios' => $servicios]);
    }

    /**
     * Mostrar el formulario para crear un nuevo recurso
     */
    public function create()
    {
        return view('servicios.create');
    }

    /**
     * Almacene un recurso recién creado en el almacenamiento.
     */
    public function store(Request $request)
    {
        Servicio::create($request->all());
        return redirect()->route('servicios.index')->with('info', 'Servicio creado con éxito');
    }
    

    /**
     * Muestra el recurso especificado.
     */
    public function show(Servicio $servicio)
    {
        //
    }

    /**
     * Editar el recurso especificado.
     */
    public function edit(Servicio $servicio)
    {
        return view('servicios.edit', ['servicio' => $servicio]);
    }

    /**
     * Actualice el recurso especificado en el almacenamiento.
     */
    public function update(Request $request, Servicio $servicio)
    {
        $servicio->update($request->all());
        return to_route('servicios.index')->with('info', 'servicio actualizado con éxito');
        return redirect()->route('servicios.index')->with('info', 'servicio actualizado con éxito');
    
    }

    /**
     * Elimina el recurso especificado del almacenamiento.
     */
    public function destroy(Servicio $servicio)
    {
         // Aquí buscamos y eliminamos el servicio de la base de datos según el ID proporcionado en la URL.
         $servicio->delete();
         // Redirigimos al usuario de regreso al listado de servicios con un mensaje de éxito.
         return redirect()->route('servicios.index')->with('info', 'Servicio eliminado con éxito');
    }
}


