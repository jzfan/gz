<?php

use Gz\User\User;
use Gz\Article\Tag;
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
        \DB::table('article_tag')->truncate();
        $tags = factory(Tag::class, 5)->create();
        $editors = User::whereIn('role', ['editor', 'admin'])->get();
        $editors->map( function ($editor) use ($tags) {
        	$articles = $editor->articles()->saveMany(factory(Article::class, mt_rand(2, 8))->make());
        	$articles->map(function ($article) use ($tags) {
        		$article->tags()->attach($tags->random(mt_rand(1, 4))->pluck('id')->toArray());
        	});
        });
    }
}
