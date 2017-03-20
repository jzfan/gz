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
$factory->define(My\User\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => (string) mt_rand(13000000000, 18999999999),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(My\User\Manager::class, function (Faker\Generator $faker) {
    return [
        'WO' => mt_rand(0, 22),
        'rank' => mt_rand(1, 5),
        'points' => mt_rand(0, 1000),
        'quality' => mt_rand(60, 99),
        'working_age' => mt_rand(1, 20),
        'work_area' => $faker->city,
        'ex_company' => $faker->company,
        'from' => $faker->state,
        'fans' => mt_rand(0, 200),
        'deposit' => mt_rand(100, 500) * 100
    ];
});

$factory->define(My\User\Worker::class, function (Faker\Generator $faker) {
    return [
        'craft' => mt_rand(1, 5),
        'area' => mt_rand(1, 3),
        'birthday' => $faker->datetime(),
        'daily_wage' => mt_rand(20, 100)*10,
        'evaluate' => $faker->paragraph
    ];
});

$factory->define(My\Project\Decoration::class, function (Faker\Generator $faker) {
    return [
        'block' => $faker->streetName,
        'square' => mt_rand(50, 200),
        'plan' => mt_rand(1, 3),
        'budget' => mt_rand(2, 20),
        'status' => mt_rand(1, 4)
    ];
});

$factory->define(My\Project\Material::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'brand' => $faker->company
    ];
});

$factory->define(My\Project\Project::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'type' => $faker->sentence
    ];
});

$factory->define(My\Article\Tag::class, function (Faker\Generator $faker) {
    return [
        'tag' => $faker->word . str_random(mt_rand(0,4))
    ];
});

$factory->define(My\Article\Article::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'content' => join(PHP_EOL, $faker->paragraphs),
        'page_image' => '/images/'.mt_rand(1,5).'.jpg',
        'published_at' => \Carbon\Carbon::now()
    ];
});
