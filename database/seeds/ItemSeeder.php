<?php

use Gz\Item\Item;
use Gz\Item\ItemOption;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::truncate();
        ItemOption::truncate();
        $arr = ['基础', '水电工程', '客厅及过道', '主卧', '次卧', '书房', '厨房', '卫生间', '阳台', '杂项', '其他'];
        $items = collect($arr)->map( function ($name) use ($arr) {
            return Item::create([
                    'name' => $name,
                    'single' => array_flip($arr)[$name] > 1 ? 0 : 1
                ]);
        });

        foreach ($items as $item) {
            $item->options()->saveMany(factory(ItemOption::class, mt_rand(2,5))->make());
        }
    }
}
