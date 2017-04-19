<?php

use Gz\Gallery\Image;
use Gz\Project\Offer;
use Gz\Gallery\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run()
    {
        Gallery::truncate();
        Image::truncate();

        $offers = Offer::whereNotNull('accepted_at')->get();

        $offers->map( function ($offer) {
            $g = $offer->gallery()->save( factory(Gallery::class)->make() );
        	$g->images()->saveMany(factory(Image::class, rand(2, 4))->make());
        });
    }
}
