<?php

namespace Tests\Feature;

use My\User\User;
use My\File\Image;
use My\User\Leader;
use Tests\TestCase;
use My\Project\Offer;
use My\User\Customer;
use My\Article\Comment;
use My\Project\Decoration;
use My\User\Repo\LeaderRepo;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class IndexPageTest extends TestCase
{
    use DatabaseTransactions;

    public function test_view_offers()
    {
        $customer = factory(Customer::class)->create();
        $customer->user()->save(factory(User::class)->make(['name'=>'batman']));

        $leader = factory(Leader::class)->create(['rank'=>100]);
        $leader->user()->save(factory(User::class)->make(['name'=>'Leader A']));

        $decoration = factory(Decoration::class)->create(['block'=>'block 101', 'customer_id'=>$customer->id]);
        (new LeaderRepo($leader))->offerFor($decoration->id, 99999);

        $comments = factory(Comment::class)->create([
                'content'=>'hello world',
                'decoration_id' => $decoration->id,
                'customer_id' => $customer->id
                ]);

        $decoration->images()->save(factory(Image::class)->make([
                'title' => 'working on it',
                'group' => '工地'
                ]));

        $rsp = $this->json('get', '/');
        $rsp->assertStatus(200);
        $content = $rsp->content();
        $this->assertTrue(stripos($content, 'block 101') !== false);
        $this->assertTrue(stripos($content, 'Leader A') !== false);
        $this->assertTrue(stripos($content, 'hello world') !== false);
        $this->assertTrue(stripos($content, 'working on it') !== false);


    }
}
