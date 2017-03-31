<?php

namespace Tests\Feature\backend;

use My\User\User;
use Tests\TestCase;
use My\User\Customer;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SetRoleTest extends TestCase
{
    use WithoutMiddleware, DatabaseTransactions;

    public function setUp()
    {
        parent::setUp();
        $customer = factory(Customer::class)->create();
        $customer->user()->save( factory(User::class)->make(['phone' => 15000000000]));
    }

    public function test_set_admin_role()
    {
        $customer = User::where('phone', 15000000000)->first()->role;
        $this->post('roles', [
                'phone' => 15000000000,
                'role' => 'admin'
            ])->assertStatus(302);
        $adminUser = User::where('phone', 15000000000)->first();
        $this->assertTrue($adminUser->role_type == 'My\User\Admin');
        $this->assertTrue(Customer::find($customer->id) == null);
    }
}
