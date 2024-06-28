<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;
    function agregar_producto(){
       $producto=Product::factory()->create();
        $this->assertDatabaseHas('produts',[
            'status'=>'active'
        ]);

    }
    public function ver_lista_producto()
    {
        $response = $this->get('/products');

        $response->assertStatus(200);
    }
    public function puede_editar_test(){

        $response = $this->post('products/2/edit');

        $response->assertStatus(200);
    }
}
