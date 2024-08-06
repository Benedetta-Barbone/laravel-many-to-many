<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $catgoriesName = [
            'Web Develpopment',
            'News',
            'IT',
            'gaming',
            'Devops',
            'Operating Systems',
            'Front-end',

        ];

        foreach ($catgoriesName as $categoryName){
            $category = new Category();
            $category->name= $categoryName;
            $category->color = $faker->unique()->safeHexColor;
            $category->save();
        }
    }
}
