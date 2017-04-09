<?php

namespace Tests\Feature;

use Gz\User\User;
use Tests\TestCase;
use Gz\Project\Material;
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

    public function test_editor_can_add_material()
    {
        $this->post('materials', [
            'name' => '电线',
            'brand' => 'Brand A',
            'price' => '100',
            'unit' => 'm2'
            ]);
        $this->assertNotNull(Material::where(['name'=>'电线', 'brand'=>'Brand A'])->first());
    }
}
