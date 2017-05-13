<?php

namespace Tests\Feature;

use Gz\User\User;
use Tests\TestCase;
use Gz\Item\ItemOption;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ApplyTest extends TestCase
{
	use DatabaseTransactions;
	public function test_post_personal_apply()
	{
		$user = User::where('role', 'leader')->first();
		$this->be($user);
		$option = ItemOption::has('item')->with('item')->first();
		$this->post('offers', [
				'items' => [
						[
							'id' => $option->item->id,
							'name' => $option->item->title,
							'options' => [
								[
									'id' => $option->id,
									'quantity' => 10
								]
							]
						]
					],
				'materials' => [
						[
							'name' => '电线',
							'brand' => 'xxx公司'
						]
					],
				'apply' => [
					'from' => '个人',
					'name' => '小明',
					'phone' => 15555555555,
					'block' => '春风小区',
					'square' => 100
					]
			])->assertStatus(200);
		$last = \Auth::user()->offers()->latest()->first();
		$this->assertEquals($last->apply->from, '个人');
		$this->assertEquals($last->apply->name, '小明');
	}
}