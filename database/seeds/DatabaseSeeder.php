<?php

use My\User\User;
use My\File\Image;
use My\User\Admin;
use My\Article\Tag;
use My\User\Editor;
use My\User\Leader;
use My\User\Worker;
use My\User\Customer;
use My\Article\Article;
use My\Article\Comment;
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
        Customer::truncate();
        Admin::truncate();
        Editor::truncate();
        User::truncate();
        Leader::truncate();
        Worker::truncate();
        $admin = factory(Admin::class)->create();
        $admin->user()->save(factory(User::class)->make(['phone'=>'13333333333']));
        $editor = factory(Editor::class)->create();
        $editor->user()->save(factory(User::class)->make(['phone'=>'17777777777']));
        $customers = factory(Customer::class, 88)->create()->each( function ($c) {
            $c->user()->save(factory(User::class)->make());
        });
        $customers->first()->user()->update(['phone'=>'15555555555']);

        $leaders = factory(Leader::class, 11)->create()->each( function ($m) {
            $m->user()->save(factory(User::class)->make());
        });
        $leaders->first()->user()->update(['phone'=>'14444444444']);
        $workers = factory(Worker::class, 22)->create()->each( function ($w) {
            $w->user()->save(factory(User::class)->make());
        });
        $workers->first()->user()->update(['phone'=>'16666666666']);

        Material::truncate();
        factory(Material::class, 11)->create();

        Decoration::truncate();
        foreach ($customers as $c) {
            factory(Decoration::class)->create(['customer_id' => $c->id]);
        }

        $offered_decorations = Decoration::where('status', '<>', '预约')->get();
        foreach ($offered_decorations as  $offered) {
            $ids = Material::inRandomOrder()->take(5, 7)->get()->pluck('id');
            $offered->materials()->sync($ids);

            $offered->offers()->create([
                    'leader_id' => $leaders->random(1)->first()->id,
                    'amount' => mt_rand(10000, 88888)
                ]);
        }

        $working_decorations = Decoration::whereIn('status', ['施工', '完工'])->get();
        foreach ($working_decorations as $working) {
            $accepted_offer = $working->offers()->inRandomOrder()->first();
            $working->update([
                    'leader_id'=>$accepted_offer->leader->id,
                    'project_id' => $accepted_offer->id
                ]);
        }
        Article::truncate();
        Tag::truncate();
        Comment::truncate();
        factory(Tag::class, 22)->create();
        factory(Article::class, 11)->create(['editor_id'=>1])->each( function ($a) {
            $ids = Tag::inRandomOrder()->take(mt_rand(1,4))->get()->pluck('id');
            $a->tags()->sync($ids);
        });

        foreach ($offered_decorations as $decoration) {
            $customer = $customers->random(1)->first();

            factory(Comment::class, mt_rand(1,5))->create([
                'customer_id'=>$customer->id,
                'decoration_id'=>$decoration->id,
                ]);

            $decoration->images()->saveMany(factory(Image::class, mt_rand(1, 5))->make());
        }



    }
}
