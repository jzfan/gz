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

        $items = factory(Item::class, 11)->create();

        foreach ($items as $item) {
            $item->options()->saveMany(factory(ItemOption::class, mt_rand(2,5))->make());
        }
    }
}
