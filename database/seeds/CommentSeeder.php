<?php

use Gz\User\User;
use Gz\Article\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::truncate();
        foreach (User::inRandomOrder()->whereRole('leader')->take(mt_rand(11, 22))->get() as $user) {
            $customer = User::inRandomOrder()->first();
            $user->comments()->saveMany(factory(Comment::class, mt_rand(5, 11))->make(['user_id' => $customer->id]));
        }
    }
}
