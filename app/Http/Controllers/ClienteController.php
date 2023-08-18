<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all(); //Se consultan todos los clientes
        return view('clientes.index', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    
        Cliente::create($request->all());
        return to_route('clientes.index')->with ('info', 'Cliente y Servicio creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', ['cliente' => $cliente]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
    
 
    $cliente->update($request->all());
    return redirect()->route('clientes.index')->with('info', 'servicio actualizado con éxito');
 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
    // Aquí buscamos y eliminamos el servicio de la base de datos según el ID proporcionado en la URL.
    $cliente->delete();
    // Redirigimos al usuario de regreso al listado de servicios con un mensaje de éxito.
    return to_route ('clientes.index')->with('info', 'Solicitud eliminada con éxito');

    }
//Protegemos las rutas de este controlador con el middleware auth y admin (autenticado y rol de admin)
public function __construct()
{
   
}

}
