<?php

use App\SubCategory;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $now = Carbon::now()->toDateTimeString();

        $lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!';

        SubCategory::insert([
            ['title' => 'PC laptops', 'slug' => 'pc-laptops', 'main_category_id' => '1',
                'description' => $lorem,
                'created_at' => $now, 'updated_at' => $now],
            ['title' => 'MacBooks', 'slug' => 'macbooks', 'main_category_id' => '1',
                'description' => $lorem,
                'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Chromebooks', 'slug' => 'chromebooks', 'main_category_id' => '1',
                'description' => $lorem,
                'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Gaming laptops', 'slug' => 'gaming-laptops', 'main_category_id' => '1',
                'description' => $lorem,
                'created_at' => $now, 'updated_at' => $now],

        ]);

        SubCategory::insert([
            ['title' => 'Everyday desktops', 'slug' => 'everyday-desktops', 'main_category_id' => '2',
                'description' => $lorem,
                'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Performance desktops', 'slug' => 'performance-desktops', 'main_category_id' => '2',
                'description' => $lorem,
                'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Gaming desktops', 'slug' => 'gaming-desktops', 'main_category_id' => '2',
                'description' => $lorem,
                'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Apple computers', 'slug' => 'apple-computers', 'main_category_id' => '2',
                'description' => $lorem,
                'created_at' => $now, 'updated_at' => $now],

        ]);

        SubCategory::insert([
            ['title' => 'Apple iPad', 'slug' => 'apple-ipad', 'main_category_id' => '3',
                'description' => $lorem,
                'image' => 'storage/s_categories/apple-ipad.jpg',
                'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Microsoft Surface', 'slug' => 'microsoft-surface', 'main_category_id' => '3',
                'description' => $lorem,
                'image' => 'storage/s_categories/microsoft-surface-table.jpg',
                'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Samsung Galaxy', 'slug' => 'samsung-galaxy', 'main_category_id' => '3',
                'description' => $lorem,
                'image' => 'storage/s_categories/samsung-galaxy-table.jpg',
                'created_at' => $now, 'updated_at' => $now],
        ]);


        SubCategory::insert([
            ['title' => 'LCD monitors', 'slug' => 'lcd-monitors', 'main_category_id' => '4',
                'description' => $lorem,
                'created_at' => $now, 'updated_at' => $now],
            ['title' => 'LED monitors', 'slug' => 'led-monitors', 'main_category_id' => '4',
                'description' => $lorem,
                'created_at' => $now, 'updated_at' => $now],
            ['title' => 'IPS monitors', 'slug' => 'ips-monitors', 'main_category_id' => '4',
                'description' => $lorem,
                'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Gaming monitors', 'slug' => 'gaming-monitors', 'main_category_id' => '4',
                'description' => $lorem,
                'created_at' => $now, 'updated_at' => $now],
        ]);

        SubCategory::insert([
            ['title' => 'iPhone', 'slug' => 'iphone', 'main_category_id' => '5',
                'description' => $lorem,
                'image' => 'storage/s_categories/iphone.png',
                'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Samsung Galaxy', 'slug' => 'samsung-galaxy', 'main_category_id' => '5',
                'description' => $lorem,
                'image' => 'storage/s_categories/samsung-galaxy-phone.jpg',
                'created_at' => $now, 'updated_at' => $now],
        ]);

        SubCategory::insert([
            ['title' => '4K Ultra HD TVs', 'slug' => '4k-ultra-hd-tvs', 'main_category_id' => '6',
                'description' => $lorem,
                'image' => 'storage/s_categories/4k-ultra-hd-tvs.jpg',
                'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Smart TVs', 'slug' => 'smart-tvs', 'main_category_id' => '6',
                'description' => $lorem,
                'image' => 'storage/s_categories/smart-tvs.jpg',
                'created_at' => $now, 'updated_at' => $now],
        ]);

        SubCategory::insert([
            ['title' => 'DSLR Cameras', 'slug' => 'dslr-cameras', 'main_category_id' => '7',
                'description' => $lorem,
                'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Mirrorless Cameras', 'slug' => 'mirrorless-cameras', 'main_category_id' => '7',
                'description' => $lorem,
                'created_at' => $now, 'updated_at' => $now],
        ]);

    }
}
