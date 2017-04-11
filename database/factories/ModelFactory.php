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
        'area' => array_rand(array_flip(config('site.area'))),
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

$factory->define(Gz\Project\Project::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'type' => $faker->sentence
    ];
});

$factory->define(Gz\Project\Apply::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'block' => $faker->streetName,
        'plan' => array_rand(array_flip(['全装修', '半装修', '待定'])),
        'budget' => mt_rand(2, 20)
    ];
});

$factory->define(Gz\Article\Tag::class, function (Faker\Generator $faker) {
    return [
        'name' => join(' ', $faker->words)
    ];
});

$factory->define(Gz\Article\Article::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'intro' => join(', ', $faker->sentences),
        'text' => '<p>'.join('</p><p>', $faker->paragraphs).'</p>',
        // 'page_image' => '/images/'.mt_rand(1,5).'.jpg',
        'published_at' => \Carbon\Carbon::now()->subHours(mt_rand(1, 1000))
    ];
});

$factory->define(Gz\Article\Comment::class, function (Faker\Generator $faker) {
    return [
        'content' => join(PHP_EOL, $faker->paragraphs)
    ];
});

$factory->define(Gz\File\Image::class, function (Faker\Generator $faker) {
    $arr = ['工地', '工头', '工人'];
    return [
        'title' => $faker->sentence,
        'path' => '/images/'.mt_rand(1,5).'.jpg',
        'group' => $arr[array_rand($arr)],
        'description' => $faker->paragraph
    ];
});

$factory->define(Gz\Item\Item::class, function (Faker\Generator $faker) {
    return [
        'name' => join(' ', $faker->words),
        'single' => mt_rand(0, 1)
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
