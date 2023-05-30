<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{
    
    use RefreshDatabase;   

    public function test_can_store_post(){        
        
        $this->withoutExceptionHandling();

        //$user = User::factory()->create();       

        $response = $this->post('/posts', [
            "title"             => fake()->sentence(10),
            "content"           => fake()->paragraph(),            
            "status"            => "published",            
            "scheduled_date"    => "",
            "categories"        => []
        ]);
        
        $response->assertOk();

    }

    //store post with categories

}
