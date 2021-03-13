<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Suscription;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(\App\Models\Course::class, 50)->create()->each(function($course){
            $course->categories()->sync(collect(Category::inRandomOrder()->limit(5)->get())->map->id->toArray());
            $course->suscriptions()->sync(collect(Suscription::inRandomOrder()->limit(1)->get())->map->id->toArray());
        });
    }
}
