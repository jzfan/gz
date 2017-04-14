<?php

use Gz\User\User;
use Gz\Project\Apply;
use Illuminate\Database\Seeder;

class ApplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Apply::truncate();
        $costomers = User::where('role', 'customer')->inRandomOrder()->take(55)->get();
        foreach ($costomers as $c) {
            $c->customerApplies()->save(factory(Apply::class)->make());
        }
    }
}
