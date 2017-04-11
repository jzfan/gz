<?php

namespace Tests\Feature;

use Gz\User\User;
use Tests\TestCase;
use Gz\Article\Article;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EditorTest extends TestCase
{
    use DatabaseTransactions;

    public function setUp()
    {
        parent::setUp();
        $editor = factory(User::class)->create(['role' => 'editor']);
        $this->be($editor);
    }

    public function test_editor_can_create_articles()
    {
        $title = str_random(20);
        $this->post('backend/articles', [
                'title' => $title,
                'text' => 'some content',
                'published_at' => date('Y-m-d'),
                'intro' => 'some description',
                'tags' => ''
            ])->assertStatus(302);
        $this->assertNotNull(Article::where(['title'=>$title])->first());
    }
}
