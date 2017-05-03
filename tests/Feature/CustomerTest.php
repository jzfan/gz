<?php

namespace Tests\Feature;

use Gz\User\User;
use Tests\TestCase;
use Gz\Project\Apply;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CustomerTest extends TestCase
{
    use DatabaseTransactions;

    public function test_guest_can_make_apply()
    {
        $this->post('applies', [
                'name' => 'Jone Doe',
                'phone' => '13333333331',
                'plan' => '全装修',
                'block' => 'block A',
                'budget' => 12345
            ])->assertStatus(200);
        $this->assertNotNull(Apply::where(['phone' => '13333333331', 'budget' => 12345])->first());
    }

    public function test_costomer_can_update_profile()
    {
        $customer = factory(User::class)->create([
                'name' => 'xiao ming',
                'role'=>'customer'
            ]);
        $this->be($customer);
        $this->post('me', ['name' => 'xiao hong'])
            ->assertStatus(200);
        $this->assertTrue($customer->name == 'xiao hong');
    }
}
