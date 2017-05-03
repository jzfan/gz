<?php

use Gz\User\User;
use Gz\User\Leader;
use Gz\User\Worker;
use Gz\User\Certificate;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::truncate();
    	Leader::truncate();
        Worker::truncate();
    	Certificate::truncate();
        $users = factory(User::class, 44)->create();
        //admin
        $users->first()->update(['phone'=>'13333333333', 'role' => 'admin']);
        //editor
        foreach(range(1, 2) as $i) {
            $editor = $users->where('role', 'customer')->random(1)->first();
            // dd($editor);
            $editor->update(['role' => 'editor']);
        }
        $editor->update(['phone' => '14444444444']);
        
        $customer = $users->where('role', 'customer')->random(1)->first();
        $customer->update(['phone' => '15555555555']);

        $leaders = $users->where('role', 'customer')->random(5);
        foreach ($leaders as $leader) {
            $leader->update(['role'=>'leader']);
            $leader->leader()->save(factory(Leader::class)->make());
            $leader->certificates()->saveMany(factory(Certificate::class, mt_rand(1, 3))->make());
        }
        $leaders->first()->update(['phone'=>'17777777777']);
        
        $workers = $users->where('role', 'customer')->random(11);
        foreach ($workers as $worker) {
            $worker->update(['role'=>'worker']);
            $worker->worker()->save(factory(Worker::class)->make());
        }
        $workers->first()->update(['phone'=>'18888888888']);
    }
}
