<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\Api\V1\ClienteController;

class CreacionSolicitudTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_ObtenerTodasLasSolicitudes(): void
    {
        $response = $this->get('/v1/clientes');
        $response->assertStatus(404); // Cambiar según el estado esperado
    }

    }

