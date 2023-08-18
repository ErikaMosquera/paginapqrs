<?php
namespace Tests\Unit;
//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
class ConsultarServiciosTest extends TestCase
{
 
 //Test para obtener todos los productos
 public function test_obtener_todos_los_servicios(): void
 {
 $response = $this->get('/api/v1/servicios');
 $response->assertStatus(200);
 }
}
