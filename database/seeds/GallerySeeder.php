<?php

use Gz\User\User;
use Gz\Gallery\Image;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run()
    {
        Image::truncate();

        $leaders = User::whereRole('leader')->get();
        $arr = [
                    '工地' => new , 
                    '工头', 
                    '设计', 
                    'banner'
                ];
        $leaders->map( function ($leader) use ($groups) {
        	$leader->images()->saveMany(factory(Image::class, 5)->make([
        			'group' => $groups[array_rand($groups)]
        		]));
        });
    }
}
