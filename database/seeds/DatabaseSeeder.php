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
        $this->call(UserSeeder::class);
        $this->call(ApplySeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(OfferSeeder::class);



        Material::truncate();
        factory(Material::class, 11)->create();
        
    }

}
