<?php

namespace Tests\Feature;

use My\User\User;
use Tests\TestCase;
use My\Project\Apply;
use App\My\Project\Appointment;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LeaderTest extends TestCase
{
    use DatabaseTransactions;

    public function test_leader_can_register_customer()
    {
        $this->post('customers', [
                'name' => 'Jone Doe',
                'phone' => '13333333331',
                'password' => 'secret',
                'password_confirmation' => 'secret'
            ])->assertStatus(200)
                ->assertJsonFragment(['code'=>201]);
    }
}
