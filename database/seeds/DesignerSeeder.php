<?php

use Gz\Gallery\Image;
use Gz\User\Designer;
use Gz\Gallery\Gallery;
use Illuminate\Database\Seeder;

class DesignerSeeder extends Seeder
{
    public function run()
    {
    	Designer::truncate();
    	$designers = factory(Designer::class, 11)->create();
    	$designers->map( function ($d) {
    		$d->galleries()->saveMany( factory(Gallery::class, mt_rand(1, 3))->make())->each( function ($g) {
    			$g->images()->saveMany(factory(Image::class), mt_rand(2, 4));
    		});
    	});
    }
}
