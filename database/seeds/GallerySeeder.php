<?php

use Gz\User\User;
use Gz\Gallery\Image;
use Gz\Project\Apply;
use Gz\Gallery\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run()
    {
        Gallery::truncate();
        Image::truncate();

        $applies = Apply::whereNotNull('leader_id')->get();
        $applies->map( function ($apply) {
            $g = $apply->gallery()->save( factory(Gallery::class)->make() );
            $g->images()->saveMany(factory(Image::class, rand(2, 4))->make());
        });

        $leaders = User::whereRole('leader')->inRandomOrder()->take(2)->get();
        $leaders->map( function ($leader) {
            $g = $leader->gallery()->save( factory(Gallery::class)->make() );
        	$g->images()->saveMany(factory(Image::class, rand(2, 4))->make());
        });
    }
}
