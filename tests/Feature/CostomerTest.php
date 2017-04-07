<?php

namespace Tests\Feature;

use My\User\User;
use Tests\TestCase;
use My\Project\Apply;
use App\My\Project\Appointment;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CostomerTest extends TestCase
{
    use DatabaseTransactions;

    public function test_guest_can_make_appointment()
    {
        $this->post('appointments', [
                'name' => 'Jone Doe',
                'phone' => '13333333331',
                'plan' => '全装修',
                'block' => 'block A'
            ])->assertStatus(200)
                ->assertJsonFragment(['code'=>201]);
    }
}
