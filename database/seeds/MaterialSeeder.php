<?php

use Gz\Item\Material;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    public function run()
    {
        Material::truncate();
        $names = ['电线', '油漆', '地板', '墙纸'];
        foreach ($names as $name) {
        	factory(Material::class, mt_rand(1, 3))->create(['name' => $name]);
        }
    }
}
