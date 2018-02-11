<?php
/**
 * Created by IntelliJ IDEA.
 * User: obelich
 * Date: 2/10/18
 * Time: 9:10 PM
 */

class CreatePostsTest extends FeatureTestCase
{
    function test_user_create_post() {
        //Generación de la prueba


        $this->actingAs($user = $this->defaultUser());

            $this->visit(route('posts.create'))
            ->type('Esta es una pregunta', 'title') //Aquí escribimos en un input con nombre title
            ->type('Este es el contenido', 'content') //Aquí escribimos en un input con nombre content
            ->press('Guardar'); //Aquí simplemente precionamos un boton submit


        //Resultado de la prueba
        $this->seeInDatabase('posts', [
            'title' => 'Esta es una pregunta',
            'content' => 'Este es el contenido',
            'pending' => true,
            'user_id' => $user->id
        ]); //Con esto comprobamos si existe la información en la base de datos

//        $this->seeInElement('h1', 'Esta es una pregunta');
        $this->see('Esta es una pregunta');

    }

    function test_creating_post_requiere_user() {

        $this->visit(route('posts.create'));

        $this->seePageIs(route('login'));

    }
}