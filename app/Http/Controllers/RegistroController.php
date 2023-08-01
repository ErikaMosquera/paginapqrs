<?php
namespace App\Http\Controllers;

use App\Models\Registro; // Asegúrate de importar el modelo adecuado
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegistroController extends Controller
{
    /**
     * Mostrar una lista del recurso..
     */
    public function index()
    {
        $registros = Registro::all(); //Se consultan todas las categorias
        return view('registros.index', ['registros' => $registros]);

    }

    /**
     * Muestra el formulario para crear un nuevo recurso.
     */
    public function create()
    {
        return view('registros.create');
    }
    
    /**
     * Almacene un recurso recién creado en el almacenamiento.
     */
    public function store(Request $request)
    {
        Registro::create($request->all());
        return to_route('registros.index')->with('info', 'Usuario creado con éxito');
    

        
    }
    public function mostrarUsuarios()
    {
        // Obtener todos los registros de usuarios
        $usuarios = Registro::all();
            // Pasar los datos a la vista usuarios.index
            return view('usuarios.index', ['usuarios' => $usuarios]);
        }
    /**
     * Muestra el recurso especificado.
     */
    public function show(Registro $Request)
    {
        
    }

    /**
     * Muestra el formulario para editar el recurso especificado.
     */
    public function edit(Registro $registro)
    {
        return view('registros.edit', ['registro' => $registro]);
    }

    /**
     * Actualice el recurso especificado en el almacenamiento
     */
    public function update(Request $request, Registro $registro)
    {
        $registro->update($request->all());
        return redirect()->route('registros.index')->with('info', 'servicio actualizado con éxito');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registro $registro)
    {
         // Aquí buscamos y eliminamos el servicio de la base de datos según el ID proporcionado en la URL.
         $registro->delete();
         // Redirigimos al usuario de regreso al listado de servicios con un mensaje de éxito.
         return redirect()->route('registros.index')->with('info', 'Servicio eliminado con éxito');
    }

    //Protegemos las rutas de este controlador con el middleware auth y admin (autenticado y rol de admin)
public function __construct()
{
//Sólo los usuarios autenticados y con rol de admin pueden acceder a todos los métodos de este controlador
$this->middleware('auth');
$this->middleware('admin');
}
}
