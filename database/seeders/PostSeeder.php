<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $categories = Category::all()->pluck('id');
        for ($i=0; $i < 250; $i++) {
           $newPost = new Post();
           $newPost->category_id = $faker->randomElement($categories);
           $newPost->title = $faker->realText(40);
           $newPost->author = $faker->name();
           $newPost->content = $faker->realText(255);
           $newPost->date = $faker->dateTimeThisMonth();
           $newPost->image = $faker->imageUrl(400, 250, 'posts');
           $newPost->save();

        }
    }
}
