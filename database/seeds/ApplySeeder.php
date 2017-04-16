<?php

use Gz\User\User;
use Gz\Project\Apply;
use Illuminate\Database\Seeder;

class ApplySeeder extends Seeder
{
    public function run()
    {
        Apply::truncate();
        factory(Apply::class)->create();
    }
}
