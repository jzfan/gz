<?php

use Gz\User\User;
use Gz\Gallery\Image;
use Gz\Project\Apply;
use Gz\Project\Offer;
use Gz\User\Designer;
use Gz\Gallery\Gallery;
use Gz\Project\Inspection;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run()
    {
        Gallery::truncate();
        Image::truncate();
        Inspection::truncate();

        $applies = Apply::whereNotNull('leader_id')->get();
        $applies->map( function ($apply) {
                $this->createGallery($apply);
        });

        $leaders = User::whereRole('leader')->inRandomOrder()->take(2)->get();
        $leaders->map( function ($leader) {
                $this->createGallery($leader);
        });

        $disigners = Designer::inRandomOrder()->take(4)->get();
        $disigners->map( function ($d) {
           $g = $d->galleries()->saveMany( factory(Gallery::class, mt_rand(1, 3))->make() )
                ->each( function ($g) {
                    $g->images()->saveMany(factory(Image::class, rand(2, 4))->make());
                });
       });

       $offers = Offer::whereNotNull('accepted_at')->get();
       $offers->map(function($offer) {
            foreach (range(1, 3) as $i) {
                $inspection = $offer->inspections()->create([]);
                $this->createGallery($inspection);
            }
       });
    }

    protected function createGallery($item)
    {
        $g = $item->gallery()->save( factory(Gallery::class)->make() );
        $g->images()->saveMany(factory(Image::class, rand(2, 4))->make());
    }
}
