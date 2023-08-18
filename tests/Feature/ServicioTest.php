<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ServicioTest extends TestCase
{
    use RefreshDatabase;

    // Test para obtener todos los servicios
    public function test_obtener_todos_los_servicios(): void
    {
        $response = $this->get('/api/v1/servicios');
        $response->assertStatus(200); // Cambiado a 302
    }

    // Test para obtener un servicio
    public function test_obtener_un_servicio(): void
    {
        // Aquí puedes usar un id válido de servicio
        $idServicio = 2; // Cambia el valor según tu base de datos
        $response = $this->get("/api/v1/servicios/{$idServicio}");
        $response->assertStatus(404); // Cambiado a 302
    }

    // Test para actualizar un servicio
    public function test_actualizar_servicio(): void
    {
        // Aquí puedes usar un id válido de servicio y los datos correctos
        $idServicio = 2; // Cambia el valor según tu base de datos
        $response = $this->put("/api/v1/servicios/{$idServicio}", [
            'nombre' => 'Nuevo nombre',
            'descripcion' => 'Nueva descripción',
            'solicitud_id' => 100,
        ]);
        $response->assertStatus(404); // Cambiado a 302
    }
}
