<?php

use My\User\User;
use My\Article\Tag;
use My\User\Worker;
use My\User\Manager;
use My\Article\Article;
use My\Project\Material;
use My\Project\Decoration;
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

        Material::truncate();
        factory(Material::class, 11)->create();

        Decoration::truncate();
        $users = User::whereRole('customer')->take(11)->get();
        foreach ($users as $user) {
            factory(Decoration::class)->create(['customer_id' => $user->id]);
        }

        $decorations = Decoration::inRandomOrder()->take(4)->get();
        foreach ($decorations as  $decoration) {
            $ids = Material::inRandomOrder()->take(5, 7)->get()->pluck('id');
            $decoration->materials()->sync($ids);
        }

        Article::truncate();
        Tag::truncate();
        factory(Tag::class, 22)->create();
        factory(Article::class, 11)->create(['editor_id'=>1])->each( function ($a) {
            $ids = Tag::inRandomOrder()->take(mt_rand(1,4))->get()->pluck('id');
            $a->tags()->sync($ids);
        });

    }
}
