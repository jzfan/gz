<?php

use Gz\User\User;
use Gz\Article\Tag;
use Gz\Article\Card;
use Gz\Article\Flow;
use Gz\Article\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();
        Tag::truncate();
        Card::truncate();
        Flow::truncate();
        \DB::table('article_tag')->truncate();
        $arr = ['家装攻略', '最新签约', '装修知识', '装修风格', '装修预算', '居家风水', '行业新闻'];
        $tags = collect($arr)->map( function ($tag) {
            return factory(Tag::class)->create(['name'=>$tag]);
        });
        $editors = User::whereIn('role', ['editor', 'admin'])->get();
        $editors->map( function ($editor) use ($tags) {
        	$articles = $editor->articles()->saveMany(factory(Article::class, mt_rand(2, 8))->make());
        	$articles->map(function ($article) use ($tags) {
        		$article->tags()->attach($tags->random(mt_rand(1, 4))->pluck('id')->toArray());
        	});
        });

        $icons = ['tools', 'gift', 'genius', 'adjustments', 'browser', 'hazardous'];
        foreach ($icons as $icon) {
            $cards = factory(Card::class)->create(['icon' => $icon]);
        }
        $cards->first()->update(['link' => '/freesize']);

        $titles = ['量房验房', '设计报价', '装修验收', '售后保障', '售后保障', '售后保障'];
        foreach ($titles as $title) {
            factory(Flow::class)->create(['title' => $title]);
        }
    }
}
