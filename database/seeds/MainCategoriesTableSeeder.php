<?php

use App\MainCategory;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MainCategoriesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $now = Carbon::now()->toDateTimeString();

        $lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!';

        MainCategory::insert([
            ['title' => 'Laptops', 'slug' => 'laptops', 'description' => $lorem, 'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Desktops', 'slug' => 'desktops', 'description' => $lorem, 'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Tablets', 'slug' => 'tablets', 'description' => $lorem, 'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Monitors', 'slug' => 'monitors', 'description' => $lorem, 'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Mobile Phones', 'slug' => 'mobile-phones', 'description' => $lorem, 'created_at' => $now, 'updated_at' => $now],
            ['title' => 'TVs', 'slug' => 'tvs', 'description' => $lorem, 'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Digital Cameras', 'slug' => 'digital-cameras', 'description' => $lorem, 'created_at' => $now, 'updated_at' => $now],

        ]);
    }
}
