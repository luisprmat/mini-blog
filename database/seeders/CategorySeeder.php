<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = collect([
            'Laravel',
            'Vue JS',
            'Educación',
            'Diseño',
            'Arquitectura',
        ]);

        $categories->map(function ($category) {
            Category::create([
                'name' => $category,
                'slug' => str($category)->slug(),
            ]);
        });
    }
}
