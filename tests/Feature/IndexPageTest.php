<?php

namespace Tests\Feature;

use Gz\User\User;
use Gz\File\Image;
use Gz\User\Leader;
use Tests\TestCase;
use Gz\Project\Offer;
use Gz\Article\Comment;
use Gz\Project\Apply;
use Gz\User\Repo\LeaderRepo;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class IndexPageTest extends TestCase
{
    use DatabaseTransactions;

    public function test_view_offers()
    {
        $customer = factory(User::class)->create(['role' => 'customer']);

        $leaderUser = factory(User::class)->create(['name'=>'Leader A', 'role' => 'leader']);
        $leaderUser->leader()->save(factory(Leader::class)->make(['rank' => 100]));

        $apply = factory(Apply::class)->create(['block'=>'block 101', 'customer_id'=>$customer->id]);
        (new LeaderRepo(new Leader, $leaderUser))->offerFor($apply->id, 99999);

        $comments = factory(Comment::class)->create([
                'content'=>'hello world',
                'user_id' => $customer->id
                ]);

        $apply->images()->save(factory(Image::class)->make([
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

    public function test_leader_can_access_console()
    {
        $leader = factory(User::class)->create(['role' => 'leader', 'name' => 'Leader A']);
        $this->be($leader);
        $this->get('/')->assertSee('控制台');
    }
}
