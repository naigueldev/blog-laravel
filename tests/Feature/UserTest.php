<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    public function testCreateUser()
    {
        \App\User::create([
            'name'=>'Admin User',
            'email'=>'admin@admin.com',
            'password'=> bcrypt(123456)
        ]);

        $this->assertDatabaseHas('users' , ['name'=> 'Admin User']);
    }
}
