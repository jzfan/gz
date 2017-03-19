<?php

use My\User\User;
use My\User\Worker;
use My\User\Manager;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::truncate();
        factory(User::class, 22)->create();
        User::first()->update(['phone'=>'13333333333', 'role'=>'admin']);
        User::whereRole('customer')->first()->update(['phone'=>'16666666666', 'role'=>'editor']);

        Manager::truncate();
        $user = User::where('role', 'customer')->inRandomOrder()->first();
        $user->update(['phone'=>'14444444444', 'role'=>'manager']);
        $user->manager()->save(factory(Manager::class)->make());

        Worker::truncate();
        $users = User::where('role', 'customer')->inRandomOrder()->take(5)->get();
        foreach ($users as $user) {
            $user->update(['role'=>'worker']);
            $user->worker()->save(factory(Worker::class)->make());
        }
        $users->first()->update(['phone'=>'15555555555']);

    }
}
