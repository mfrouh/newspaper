<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\article;
use App\articleview;
use App\category;
use App\tag;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
$factory->define(category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('12345678'), // password
        'remember_token' => Str::random(10),
        'category_id'=>json_encode([category::all()->random()->id]),
        'role'=>'writer'
    ];
});


$factory->define(article::class, function (Faker $faker) {
    return [
        'user_id'=>User::all()->random()->id,
        'title'=>$faker->realText(75,2),
        'content'=>$faker->realText(700,5),
        'slug_title'=>str_replace(' ','_',$faker->realText(100,2)),
        'image'=>'f'.rand(1,23).'.jpg',
        'category_id'=>category::all()->random()->id,
        'social'=>'https://www.facebook.com/manchesterunited/photos/a.411767862745/10157391473257746/?type=3&theater',
        'publish'=>'yes',
    ];

});
$factory->define(tag::class, function (Faker $faker) {
    return [
        'article_id' => article::all()->random()->id,
        'name' => $faker->name,
    ];
});
$factory->define(articleview::class, function (Faker $faker) {
    return [
        'article_id' => article::all()->random()->id,
        'ip' => $faker->ipv4,
    ];
});
