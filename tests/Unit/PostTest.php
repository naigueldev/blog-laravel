<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Post;


class PostTest extends TestCase
{
    private $post;
    use RefreshDatabase;


    public function testCreatePost()
    {
        $data = [
            'title' => 'title post 01',
            'body' => 'test body post'
        ];

        Post::create($data);

        $this->assertDatabaseHas('posts', $data);
    }

    public function testPostHasTitle()
    {
        $post = factory(Post::class)->create();

        $this->assertNotEmpty($post->title);
    }
}
