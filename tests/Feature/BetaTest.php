<?php

namespace Tests\Feature;

use App\Models\Customer;
use App\Models\Student;
use App\Models\User;
use http\Env\Request;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BetaTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/beta');

        $response->assertStatus(200);

        $response->assertSee('Beta');
        $response->assertDontSee('Alpha');
    }
    use RefreshDatabase;
    public function test_good(){

    $response = User::factory()->create();


        $this->assertEquals(1,$response::count());

    }

        public function test_burger_create()
    {
        $attribute =[
            'name' => 'mario',
            'age' => '40',
        ];


        $mite = $this->post('api/burger', $attribute);

       $mite->assertOk();

       $data = $mite->decodeResponseJson();

//       dd($data);

      $this->assertEquals(1, $data['burger']['id']);









//        $this->assertEquals(3,$mite::count());

    }
    public function test_burger_view()
    {


        $mite =   $this->get('api/burger/view');

        dd($mite);


//       $this->assertEquals(1,$mite::count());

        $mite->assertOk();
        $data = $mite->decodeResponseJson();
        dd($data);
    }




}
