<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_blog_id_get_request()
    {
        $response = $this->get('/blog/1');
        $response->assertStatus(200);
    }
    
    public function test_get_uneexisted_blog()
    {
        $response = $this->get('/blog/10000');
        $response->assertStatus(404);
    }

    public function test_blog_response()
    {
        $response = $this->get('/blog/1');
        $response->assertViewGas('blog');
    }
}
