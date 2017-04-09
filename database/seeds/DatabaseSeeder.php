<?php

use Gz\User\User;
use Gz\File\Image;
use Gz\Article\Tag;
use Gz\User\Leader;
use Gz\User\Worker;
use Gz\Article\Article;
use Gz\Article\Comment;
use Gz\Item\Material;
use Gz\Project\Apply;
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
        $this->call(AppointmentSeeder::class);
        $this->call(ItemSeeder::class);
        User::truncate();
        Leader::truncate();
        Worker::truncate();
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
        }
        $leaders->first()->update(['phone'=>'17777777777']);
        
        $workers = $users->where('role', 'customer')->random(11);
        foreach ($workers as $worker) {
            $worker->update(['role'=>'worker']);
            $worker->worker()->save(factory(Worker::class)->make());
        }
        $workers->first()->update(['phone'=>'18888888888']);

        Material::truncate();
        factory(Material::class, 11)->create();
        Apply::truncate();
        foreach ($users as $c) {
            factory(Apply::class)->create(['customer_id' => $c->id]);
        }

        $offered_applys = Apply::where('status', '<>', '申请')->get();
        foreach ($offered_applys as  $offered) {
            $ids = Material::inRandomOrder()->take(5, 7)->get()->pluck('id');

            $offered->offers()->create([
                    'user_id' => $leaders->random(1)->first()->id,
                    'amount' => mt_rand(10000, 88888),
                    'data' => json_encode(['materials' => $ids])
                ]);
        }

        $this->createWorkingOffers();

        $this->createArticles();

        $this->createComments($users, $offered_applys);

    }

    protected function createWorkingOffers()
    {
        $working_applys = Apply::whereIn('status', ['施工', '完工'])->get();
        foreach ($working_applys as $working) {
            $accepted_offer = $working->offers()->inRandomOrder()->first();
            $working->update([
                    'leader_id'=>$accepted_offer->user_id,
                    'offer_id' => $accepted_offer->id
                ]);
        }
    }

    protected function createArticles()
    {
        Article::truncate();
        Tag::truncate();
        factory(Tag::class, 22)->create();
        factory(Article::class, 11)->create(['user_id'=>User::where('role', 'editor')->inRandomOrder()->first()->id])->each( function ($a) {
            $ids = Tag::inRandomOrder()->take(mt_rand(1,4))->get()->pluck('id');
            $a->tags()->sync($ids);
        });
    }

    protected function createComments($users, $offered_applys)
    {
        Comment::truncate();
        foreach ($offered_applys as $apply) {
            $customer = $users->random(1)->first();

            factory(Comment::class, mt_rand(1,2))->create([
                'user_id'=>$customer->id,
                ]);

            $apply->images()->saveMany(factory(Image::class, mt_rand(1, 5))->make());
        }
    }
}
