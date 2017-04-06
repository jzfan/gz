<?php

namespace Tests\Feature\backend;

use My\User\User;
use My\User\Leader;
use Tests\TestCase;
use My\Project\Apply;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AdminActionTest extends TestCase
{
    use WithoutMiddleware, DatabaseTransactions;

    public function test_set_admin_role()
    {
        $customer = factory(User::class)->create(['phone' => 15000000000]);
        $this->post('roles', [
                'phone' => 15000000000,
                'role' => 'admin'
            ])->assertStatus(302);

        $adminUser = User::where('phone', 15000000000)->first();
        $this->assertTrue($adminUser->role == 'admin');
    }

    public function test_give_leader_the_apply()
    {
        $customer = factory(User::class)->create(['phone' => 15000000000]);
        $leader = factory(User::class)->create(['role' => 'leader']);
        $leader->leader()->save( factory(Leader::class)->make());
        $apply = factory(Apply::class)->create(['customer_id' => $customer->id]);

        $rsp = $this->post("applies/{$apply->id}/leaders/{$leader->id}");
        $rsp->assertStatus(302);
        $this->assertTrue( $leader->id == Apply::find($apply->id)->leader_id );
    }
}
