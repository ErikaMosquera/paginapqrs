<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Servicio::all(), 200); //200: OK

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //Validar los datos de entrada
    $datos = $request->validate([
        'nombre' => ['required', 'string', 'max:100'],
        'descripcion' => ['nullable', 'string', 'max:555'],
        'servicio_id' => ['required', 'integer', 'exists:servicios,id'] 

        //exists valida que el id exista en la tabla categorias
    ]);
    //Crear el Servicio
   $servicio = Servicio::create($datos);
    return response()->json(['success' => true, 'message' => 'Servicio creado'], 201); //201: Created
    }

    /**
     * Display the specified resource.
     */
    public function show(Servicio $servicio)
    {
        return response()->json($servicio, 200); //200: OK
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Servicio $servicio)
    {
        //Validar los datos de entrada
        $datos = $request->validate([
            'nombre' => ['required', 'string', 'max:100'],
            'descripcion' => ['nullable', 'string', 'max:555'],
            'servicio_id' => ['required', 'integer', 'exists:servicios,id'] 
        ]);

   //Actualizar el producto
   $servicio->update($datos);
   return response()->json(['success' => true, 'message' => 'Servicio actualizado'], 200); //200: OK

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servicio $servicio)
    {
        $servicio->delete();
    return response()->json(['success' => true, 'message' => 'Servicio eliminado'], 204); //204: No content
    }
    }
