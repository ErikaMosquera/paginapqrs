<?php
namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use App\Http\Controllers\Api\V1\AutenticaController;

class CreacionUsuarioTest extends TestCase
{
    use RefreshDatabase;

    public function test_RegistroUsuario(): void
    {
        $response = $this->post('/registro', [
            'email' => 'correo@example.com',
            'password' => 'contraseña',
            // ... otros campos necesarios para el registro ...
        ]);

        $response->assertStatus(302); // Cambiar al estado de redirección esperado
        // ... Asegurar que el usuario fue creado correctamente ...
        
    }
    public function testInicioSesionUsuario(): void
    {
        $response = $this->post('/login', [
            'email' => 'correo@example.com',
            'password' => 'contraseña',
        ]);

        $response->assertStatus(302); // Cambiar al estado de redirección esperado
        // ... Asegurar que el inicio de sesión fue exitoso ...
    }

    public function testCierreSesionUsuario(): void
    {
        $response = $this->post('/logout');

        $response->assertStatus(302); // Cambiar al estado de redirección esperado
        // ... Asegurar que el cierre de sesión fue exitoso ...
    }
}


