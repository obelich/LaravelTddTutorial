<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */

//    use DatabaseMigrations; //Con esto se reiniciara la base de datos al iniciar y terminar cada prueba
      use DatabaseTransactions; // Con esto solo reinicia la base de datos no elimina las migraciones

    public function testBasicExample()
    {
        $username = 'Miguel Amezcua';
        $user = factory(\App\User::class)->create([
            'name'=> $username,
            'email'=>'admin@jelp.io'
        ]); //Con el Factory se crea el usuario /database/factories

        $this->actingAs($user, 'api'); //Con esto autentico con el usuario que recien se creo
        $this->visit('api/user')
             ->see($username) //Con esto se espera encontrar el nombre del usuario
             ->see('admin@jelp.io');
    }
}
