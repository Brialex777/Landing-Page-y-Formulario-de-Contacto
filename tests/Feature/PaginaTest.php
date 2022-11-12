<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PaginaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_page()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_contacto_page()
    {
        $response = $this->get('/contacto');
        $response->assertStatus(200);
    }

    public function test_validar_formulario()
    {
        $response = $this->post('/contacto-recibe', [
            'nombre' => '',
            'correo' => 'correonovalido',
        ]);

        $response->assertSessionHasErrors([
            'nombre',
            'correo',
        ]);
    }
}
