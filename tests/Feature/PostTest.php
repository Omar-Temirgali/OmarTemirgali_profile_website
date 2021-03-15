<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Tests\Feature\Post;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_title_name_get_request() 
    {
        $response = $this->get('/post/JavaFX');

        $response->assertStatus(200);
    }

    public function test_title_does_not_exist() 
    {
        $response = $this->get('/post/Oracle');

        $response->assertStatus(404);
    }

    public function test_post_response()
    {
        $response = $this->get('/post/Swift');

        $response->assertViewHas('post');
    }
}
