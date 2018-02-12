<?php

use App\Post;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ShowPostTest extends FeatureTestCase
{
    function test_user_see_post() {

        $user = $this->defaultUser([
            'name'=> 'Obelich'
        ]);

        $post = factory(\App\Post::class)->make([ //Tenemos que crear en database/factories/ModelFactory.php
            'title'=> 'Este es el titulo del post',
            'content'=> 'Este es el contenido del post',
        ]);

        $user->posts()->save($post);

        $this->visit(route('posts.show', $post))
            ->seeInElement('h1', $post->title)
            ->see($post->content)
            ->see($user->name);
    }
}
