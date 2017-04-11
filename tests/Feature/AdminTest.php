<?php

namespace Tests\Feature;

use Gz\User\User;
use Gz\User\Leader;
use Tests\TestCase;
use Gz\Item\Material;
use Gz\Project\Apply;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AdminTest extends TestCase
{
    use DatabaseTransactions;

    public function setUp()
    {
        parent::setUp();
        $me = factory(User::class)->create(['role' => 'admin']);
        $this->be($me);
    }

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
        $apply = factory(Apply::class)->create(['phone' => $customer->phone]);

        $rsp = $this->post("applies/{$apply->id}/leaders",[
                'leader_id' => $leader->id
            ]);
        $rsp->assertStatus(302);
        $this->assertTrue( $leader->id == Apply::find($apply->id)->leader_id );
    }

    public function test_admin_can_add_material()
    {
        $this->post('materials', [
            'name' => '电线',
            'brand' => 'Brand A',
            'price' => '100',
            'unit' => 'm2'
            ]);
        $this->assertNotNull(Material::where(['name'=>'电线', 'brand'=>'Brand A'])->first());
    }
}
