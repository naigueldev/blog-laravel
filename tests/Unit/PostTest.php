<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Post;


class PostTest extends TestCase
{
    use RefreshDatabase;

    public function testCreatePost()
    {
        $data = [
            'title' => 'title post 01',
            'body' => 'test body post'
        ];

        \App\Post::create($data);

        $this->assertDatabaseHas('posts' , $data);
    }


}
