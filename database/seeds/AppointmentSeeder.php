<?php

use Gz\Project\Appointment;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Appointment::truncate();

        factory(Appointment::class, 15)->create();
    }
}
