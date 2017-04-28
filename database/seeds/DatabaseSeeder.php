<?php

use Gz\Item\Material;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MaterialSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ApplySeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(OfferSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(DesignerSeeder::class);
    }

}
