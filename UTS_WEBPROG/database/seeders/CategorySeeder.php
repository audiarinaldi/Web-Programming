<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Romance', 'Science', 'Fiction', 'Legend','Fantasy'];
        for ($i=0; $i < count($categories ); $i++) {
            Category::create([
                'name' => $categories [$i],
            ]);
        }
    }
}
