<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'activated' => true,
        'created_at' => $faker->dateTime,
        'deleted_at' => null,
        'email' => $faker->email,
        'first_name' => $faker->firstName,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'last_login_at' => $faker->dateTime,
        'last_name' => $faker->lastName,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'updated_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\User::class, static function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime,
        'email' => $faker->email,
        'email_verified_at' => $faker->dateTime,
        'name' => $faker->firstName,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Category::class, static function (Faker\Generator $faker) {
    return [
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Course::class, static function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime,
        'description' => $faker->text(),
        'name' => $faker->firstName,
        'total_duration' => $faker->sentence,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Episode::class, static function (Faker\Generator $faker) {
    return [
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Suscription::class, static function (Faker\Generator $faker) {
    return [
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Episode::class, static function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime,
        'description' => $faker->text(),
        'duration' => $faker->sentence,
        'title' => $faker->sentence,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Episode::class, static function (Faker\Generator $faker) {
    return [
        'course_id' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'description' => $faker->text(),
        'duration' => $faker->sentence,
        'title' => $faker->sentence,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Category::class, static function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime,
        'name' => $faker->firstName,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Suscription::class, static function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime,
        'features' => $faker->text(),
        'name' => $faker->firstName,
        'price' => $faker->randomFloat,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Suscription::class, static function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime,
        'features' => $faker->text(),
        'name' => $faker->firstName,
        'price' => $faker->randomFloat,
        'type' => $faker->sentence,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Founder::class, static function (Faker\Generator $faker) {
    return [
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Founder::class, static function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime,
        'description' => $faker->text(),
        'email' => $faker->email,
        'full_name' => $faker->sentence,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\User::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'email' => $faker->email,
        'email_verified_at' => $faker->dateTime,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'suscription_id' => $faker->sentence,
        'trail_ends_at' => $faker->dateTime,
        'ends_at' => $faker->dateTime,
        'started_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Suscription::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'features' => $faker->text(),
        'price' => $faker->randomFloat,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'type' => $faker->sentence,
        'stripe_id' => $faker->sentence,
        
        
    ];
});
