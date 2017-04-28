<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Gz\User\User::class, function (Faker\Generator $faker) {
    static $password;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'avatar' => '/images/avatar/no.svg',
        'phone' => (string) mt_rand(13000000000, 18999999999),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'role' => 'customer'
    ];
});

$factory->define(Gz\User\Leader::class, function (Faker\Generator $faker) {
    return [
        'WO' => mt_rand(0, 22),
        'rank' => mt_rand(1, 5),
        'points' => mt_rand(0, 1000),
        'quality' => mt_rand(60, 99),
        'working_age' => mt_rand(1, 20),
        'area' => $faker->randomElement(config('site.area')),
        'ex_company' => $faker->company,
        'from' => $faker->state,
        'fans' => mt_rand(0, 200),
        'deposit' => mt_rand(0, 500) * 100
    ];
});

$factory->define(Gz\User\Worker::class, function (Faker\Generator $faker) {
    return [
        'craft' => array_rand(array_flip(config('site.craft'))),
        'area' => array_rand(array_flip(config('site.area'))),
        'birthday' => $faker->datetime(),
        'daily_wage' => mt_rand(20, 100)*10,
        'evaluate' => $faker->paragraph
    ];
});

$factory->define(Gz\Project\Offer::class, function (Faker\Generator $faker) {
    return [
        'amount' => mt_rand(10000, 200000)
    ];
});

$factory->define(Gz\Item\Material::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'brand' => $faker->company,
        'unit' => 'm2',
        'price' => mt_rand(100, 10000)/100
    ];
});

$factory->define(Gz\Project\Apply::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'block' => $faker->area,
        'square' => mt_rand(30, 300),
        'phone' => $faker->phoneNumber,
        'plan' => array_rand(array_flip(['全装修', '半装修', '待定'])),
        'budget' => mt_rand(2, 20) * 10000
    ];
});

$factory->define(Gz\Article\Tag::class, function (Faker\Generator $faker) {
    return [
        'name' => join(' ', $faker->words)
    ];
});

$factory->define(Gz\Article\Flow::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'text' => $faker->sentences
    ];
});

$factory->define(Gz\Article\Article::class, function (Faker\Generator $faker) {
    $img = '<img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNWIwOTBmNDkxNiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1YjA5MGY0OTE2Ij48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy4xNzk2ODc1IiB5PSIzNi41NTYyNSI+NjR4NjQ8L3RleHQ+PC9nPjwvZz48L3N2Zz4="/>';
    return [
        'title' => $faker->sentence,
        'intro' => join(', ', $faker->sentences),
        'text' => $img . '<p>'.join('</p><p>', $faker->paragraphs).'</p>',
        // 'page_image' => '/images/'.mt_rand(1,5).'.jpg',
        'published_at' => \Carbon\Carbon::now()->subHours(mt_rand(1, 1000))
    ];
});

$factory->define(Gz\Article\Comment::class, function (Faker\Generator $faker) {
    return [
        'content' => join(PHP_EOL, $faker->paragraphs)
    ];
});

$factory->define(Gz\Article\Card::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'content' => $faker->paragraph
    ];
});

$factory->define(Gz\Gallery\Gallery::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence(2),
        'description' => $faker->paragraph
    ];
});

$factory->define(Gz\Gallery\Image::class, function (Faker\Generator $faker) {
    // $arr = ['工地', '工头', '设计', 'banner'];
    return [
        'name' => $faker->slug,
        'path' => '/images/'.mt_rand(1,5).'.jpg',
    ];
});

$factory->define(Gz\Item\ItemOption::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->sentences,
        'unit' => 'm2',
        'price' => mt_rand(100, 1000)/100
    ];
});

$factory->define(Gz\User\Designer::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'avatar' => '/picture/tes-' . mt_rand(1, 4) . '.jpg',
        'company' => $faker->company,
        'working_age' => mt_rand(1, 15),
        'feedback_rate' => mt_rand(66, 100),
        'precept' => $faker->catchPhrase,
        'honor' => $faker->words(mt_rand(1,3)),
        'good_at' => $faker->words(mt_rand(1,3)),
    ];
});
