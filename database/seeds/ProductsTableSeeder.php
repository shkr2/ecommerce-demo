<?php

use App\Product;
use App\ProductImage;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $now = Carbon::now()->toDateTimeString();


        for ($i = 1; $i <= 24; $i++) {

            $product = Product::create([
                'title' => 'HP SPECTRE X360 ' . $i,
                'slug' => 'hp-spectre-x360-' . $i,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'price' => rand(500, 1500),
                'rating' => rand(5, 1000),
                'available_quantity' => rand(5, 25),
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $image1 = new ProductImage;
            $image1->image = 'storage/products/hp-pavilion-1.jpg';
            $image2 = new ProductImage;
            $image2->image = 'storage/products/hp-pavilion-2.jpg';
            $image3 = new ProductImage;
            $image3->image = 'storage/products/hp-pavilion-3.jpg';
            $image4 = new ProductImage;
            $image4->image = 'storage/products/hp-pavilion-4.jpg';
            $image5 = new ProductImage;
            $image5->image = 'storage/products/hp-pavilion-5.jpg';

            $product->images()->save($image1);
            $product->images()->save($image2);
            $product->images()->save($image3);
            $product->images()->save($image4);
            $product->images()->save($image5);

            $product->categories()->attach(1);
        }

        for ($i = 1; $i <= 24; $i++) {

            $product = Product::create([
                'title' => 'Apple MacBook Pro 15 ' . $i,
                'slug' => 'apple-macbook-pro-15-' . $i,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'price' => rand(500, 1500),
                'rating' => rand(5, 1000),
                'available_quantity' => rand(5, 25),
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $image1 = new ProductImage;
            $image1->image = 'storage/products/apple-macbook-pro-1.jpg';
            $image2 = new ProductImage;
            $image2->image = 'storage/products/apple-macbook-pro-2.jpg';
            $image3 = new ProductImage;
            $image3->image = 'storage/products/apple-macbook-pro-3.jpg';
            $image4 = new ProductImage;
            $image4->image = 'storage/products/apple-macbook-pro-4.jpg';

            $product->images()->save($image1);
            $product->images()->save($image2);
            $product->images()->save($image3);
            $product->images()->save($image4);

            $product->categories()->attach(2);
        }

        for ($i = 1; $i <= 24; $i++) {

            $product = Product::create([
                'title' => 'Lenovo Yoga C630 ' . $i,
                'slug' => 'lenovo-yoga-c630-' . $i,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'price' => rand(500, 1500),
                'rating' => rand(5, 1000),
                'available_quantity' => rand(5, 25),
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $image1 = new ProductImage;
            $image1->image = 'storage/products/lenovo-yoga-c630-1.jpg';
            $image2 = new ProductImage;
            $image2->image = 'storage/products/lenovo-yoga-c630-2.jpg';
            $image3 = new ProductImage;
            $image3->image = 'storage/products/lenovo-yoga-c630-3.jpg';
            $image4 = new ProductImage;
            $image4->image = 'storage/products/lenovo-yoga-c630-4.jpg';

            $product->images()->save($image1);
            $product->images()->save($image2);
            $product->images()->save($image3);
            $product->images()->save($image4);

            $product->categories()->attach(3);
        }

        for ($i = 1; $i <= 24; $i++) {

            $product = Product::create([
                'title' => 'Acer Nitro 5 15.6 ' . $i,
                'slug' => 'acer-nitro-5-' . $i,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'price' => rand(500, 1500),
                'rating' => rand(5, 1000),
                'available_quantity' => rand(5, 25),
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $image1 = new ProductImage;
            $image1->image = 'storage/products/acer-nitro-1.jpg';
            $image2 = new ProductImage;
            $image2->image = 'storage/products/acer-nitro-2.jpg';
            $image3 = new ProductImage;
            $image3->image = 'storage/products/acer-nitro-3.jpg';
            $image4 = new ProductImage;
            $image4->image = 'storage/products/acer-nitro-4.jpg';

            $product->images()->save($image1);
            $product->images()->save($image2);
            $product->images()->save($image3);
            $product->images()->save($image4);

            $product->categories()->attach(4);
        }

        for ($i = 1; $i <= 24; $i++) {

            $product = Product::create([
                'title' => 'Alienware Aurora R7 Desktop ' . $i,
                'slug' => 'alienware-aurora-r7-' . $i,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'price' => rand(500, 1500),
                'rating' => rand(5, 1000),
                'available_quantity' => rand(5, 25),
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $image1 = new ProductImage;
            $image1->image = 'storage/products/alienware-aurora-r7-1.jpg';
            $image2 = new ProductImage;
            $image2->image = 'storage/products/alienware-aurora-r7-2.jpg';
            $image3 = new ProductImage;
            $image3->image = 'storage/products/alienware-aurora-r7-3.jpg';
            $image4 = new ProductImage;
            $image4->image = 'storage/products/alienware-aurora-r7-4.jpg';

            $product->images()->save($image1);
            $product->images()->save($image2);
            $product->images()->save($image3);
            $product->images()->save($image4);

            $product->categories()->attach(5);
        }

        for ($i = 1; $i <= 24; $i++) {

            $product = Product::create([
                'title' => 'CyberPowerPC Gamer Master' . $i,
                'slug' => 'cyberpowerpc-gamer-master-' . $i,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'price' => rand(500, 1500),
                'rating' => rand(5, 1000),
                'available_quantity' => rand(5, 25),
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $image1 = new ProductImage;
            $image1->image = 'storage/products/cyberpowerpc-gamer-master-1.jpg';
            $image2 = new ProductImage;
            $image2->image = 'storage/products/cyberpowerpc-gamer-master-2.jpg';

            $product->images()->save($image1);
            $product->images()->save($image2);

            $product->categories()->attach(6);
        }

        for ($i = 1; $i <= 24; $i++) {

            $product = Product::create([
                'title' => 'CyberPowerPC Gamer Master R1 ' . $i,
                'slug' => 'cyberpowerpc-gamer-master-r1-' . $i,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'price' => rand(500, 1500),
                'rating' => rand(5, 1000),
                'available_quantity' => rand(5, 25),
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $image1 = new ProductImage;
            $image1->image = 'storage/products/cyberpowerpc-gamer-master-r1-1.jpg';
            $image2 = new ProductImage;
            $image2->image = 'storage/products/cyberpowerpc-gamer-master-r1-2.jpg';
            $image3 = new ProductImage;
            $image3->image = 'storage/products/cyberpowerpc-gamer-master-r1-3.jpg';
            $image4 = new ProductImage;
            $image4->image = 'storage/products/cyberpowerpc-gamer-master-r1-4.jpg';

            $product->images()->save($image1);
            $product->images()->save($image2);
            $product->images()->save($image3);
            $product->images()->save($image4);

            $product->categories()->attach(7);
        }

        for ($i = 1; $i <= 24; $i++) {

            $product = Product::create([
                'title' => 'Apple 27 iMac ' . $i,
                'slug' => 'apple-27-imac-' . $i,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'price' => rand(500, 1500),
                'rating' => rand(5, 1000),
                'available_quantity' => rand(5, 25),
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $image1 = new ProductImage;
            $image1->image = 'storage/products/apple-27-imac-1.jpg';
            $image2 = new ProductImage;
            $image2->image = 'storage/products/apple-27-imac-2.jpg';
            $image3 = new ProductImage;
            $image3->image = 'storage/products/apple-27-imac-3.jpg';

            $product->images()->save($image1);
            $product->images()->save($image2);
            $product->images()->save($image3);

            $product->categories()->attach(8);
        }

        for ($i = 1; $i <= 24; $i++) {

            $product = Product::create([
                'title' => 'Apple 12.9-Inch iPad Pro ' . $i,
                'slug' => 'apple-12.9-inch-ipad-pro-' . $i,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'price' => rand(500, 1500),
                'rating' => rand(5, 1000),
                'available_quantity' => rand(5, 25),
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $image1 = new ProductImage;
            $image1->image = 'storage/products/apple-12.9-inch-ipad-pro-1.jpg';
            $image2 = new ProductImage;
            $image2->image = 'storage/products/apple-12.9-inch-ipad-pro-2.jpg';
            $image3 = new ProductImage;
            $image3->image = 'storage/products/apple-12.9-inch-ipad-pro-3.jpg';
            $image4 = new ProductImage;
            $image4->image = 'storage/products/apple-12.9-inch-ipad-pro-4.jpg';

            $product->images()->save($image1);
            $product->images()->save($image2);
            $product->images()->save($image3);
            $product->images()->save($image4);

            $product->categories()->attach(9);
        }

        for ($i = 1; $i <= 24; $i++) {

            $product = Product::create([
                'title' => 'Microsoft Surface Pro 6 ' . $i,
                'slug' => 'microsoft-surface-pro-6-' . $i,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'price' => rand(500, 1500),
                'rating' => rand(5, 1000),
                'available_quantity' => rand(5, 25),
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $image1 = new ProductImage;
            $image1->image = 'storage/products/microsoft-surface-pro-1.jpg';
            $image2 = new ProductImage;
            $image2->image = 'storage/products/microsoft-surface-pro-2.jpg';
            $image3 = new ProductImage;
            $image3->image = 'storage/products/microsoft-surface-pro-3.jpg';
            $image4 = new ProductImage;
            $image4->image = 'storage/products/microsoft-surface-pro-4.jpg';

            $product->images()->save($image1);
            $product->images()->save($image2);
            $product->images()->save($image3);
            $product->images()->save($image4);

            $product->categories()->attach(10);
        }

        for ($i = 1; $i <= 24; $i++) {

            $product = Product::create([
                'title' => 'Samsung Galaxy Tab S4 ' . $i,
                'slug' => 'samsung-galaxy-tab-s4-' . $i,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'price' => rand(500, 1500),
                'rating' => rand(5, 1000),
                'available_quantity' => rand(5, 25),
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $image1 = new ProductImage;
            $image1->image = 'storage/products/samsung-galaxy-tab-s4-1.jpg';
            $image2 = new ProductImage;
            $image2->image = 'storage/products/samsung-galaxy-tab-s4-2.jpg';
            $image3 = new ProductImage;
            $image3->image = 'storage/products/samsung-galaxy-tab-s4-3.jpg';
            $image4 = new ProductImage;
            $image4->image = 'storage/products/samsung-galaxy-tab-s4-4.jpg';

            $product->images()->save($image1);
            $product->images()->save($image2);
            $product->images()->save($image3);
            $product->images()->save($image4);

            $product->categories()->attach(11);
        }

        for ($i = 1; $i <= 24; $i++) {

            $product = Product::create([
                'title' => 'Acer Predator XB1 24 ' . $i,
                'slug' => 'acer-predator-xb1-' . $i,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'price' => rand(500, 1500),
                'rating' => rand(5, 1000),
                'available_quantity' => rand(5, 25),
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $image1 = new ProductImage;
            $image1->image = 'storage/products/acer-predator-xb1-1.jpg';
            $image2 = new ProductImage;
            $image2->image = 'storage/products/acer-predator-xb1-2.jpg';
            $image3 = new ProductImage;
            $image3->image = 'storage/products/acer-predator-xb1-3.jpg';
            $image4 = new ProductImage;
            $image4->image = 'storage/products/acer-predator-xb1-4.jpg';

            $product->images()->save($image1);
            $product->images()->save($image2);
            $product->images()->save($image3);
            $product->images()->save($image4);

            $product->categories()->attach(12);
        }

        for ($i = 1; $i <= 24; $i++) {

            $product = Product::create([
                'title' => 'ASUS ROG Swift 34 ' . $i,
                'slug' => 'asus-rog-swift-34-' . $i,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'price' => rand(500, 1500),
                'rating' => rand(5, 1000),
                'available_quantity' => rand(5, 25),
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $image1 = new ProductImage;
            $image1->image = 'storage/products/asus-rog-swift-34-1.jpg';
            $image2 = new ProductImage;
            $image2->image = 'storage/products/asus-rog-swift-34-2.jpg';
            $image3 = new ProductImage;
            $image3->image = 'storage/products/asus-rog-swift-34-3.jpg';
            $image4 = new ProductImage;
            $image4->image = 'storage/products/asus-rog-swift-34-4.jpg';

            $product->images()->save($image1);
            $product->images()->save($image2);
            $product->images()->save($image3);
            $product->images()->save($image4);

            $product->categories()->attach(13);
        }

        for ($i = 1; $i <= 24; $i++) {

            $product = Product::create([
                'title' => 'Dell 27 HDR IPS LED ' . $i,
                'slug' => 'dell-27-hdr-ips-' . $i,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'price' => rand(500, 1500),
                'rating' => rand(5, 1000),
                'available_quantity' => rand(5, 25),
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $image1 = new ProductImage;
            $image1->image = 'storage/products/dell-27-hdr-ips-1.jpg';
            $image2 = new ProductImage;
            $image2->image = 'storage/products/dell-27-hdr-ips-2.jpg';
            $image3 = new ProductImage;
            $image3->image = 'storage/products/dell-27-hdr-ips-3.jpg';

            $product->images()->save($image1);
            $product->images()->save($image2);
            $product->images()->save($image3);

            $product->categories()->attach(14);
        }

        for ($i = 1; $i <= 24; $i++) {

            $product = Product::create([
                'title' => 'Dell 24 LED QHD G-SYNC ' . $i,
                'slug' => 'dell-24-led-qhd-' . $i,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'price' => rand(500, 1500),
                'rating' => rand(5, 1000),
                'available_quantity' => rand(5, 25),
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $image1 = new ProductImage;
            $image1->image = 'storage/products/dell-24-led-qhd-1.jpg';
            $image2 = new ProductImage;
            $image2->image = 'storage/products/dell-24-led-qhd-2.jpg';
            $image3 = new ProductImage;
            $image3->image = 'storage/products/dell-24-led-qhd-3.jpg';

            $product->images()->save($image1);
            $product->images()->save($image2);
            $product->images()->save($image3);

            $product->categories()->attach(15);
        }

        for ($i = 1; $i <= 24; $i++) {

            $product = Product::create([
                'title' => 'Apple iPhone XR ' . $i,
                'slug' => 'apple-iphone-xr-' . $i,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'price' => rand(500, 1500),
                'rating' => rand(5, 1000),
                'available_quantity' => rand(5, 25),
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $image1 = new ProductImage;
            $image1->image = 'storage/products/apple-iphone-xr-1.jpg';
            $image2 = new ProductImage;
            $image2->image = 'storage/products/apple-iphone-xr-2.jpg';
            $image3 = new ProductImage;
            $image3->image = 'storage/products/apple-iphone-xr-3.jpg';

            $product->images()->save($image1);
            $product->images()->save($image2);
            $product->images()->save($image3);

            $product->categories()->attach(16);
        }

        for ($i = 1; $i <= 24; $i++) {

            $product = Product::create([
                'title' => 'Samsung Galaxy S10 ' . $i,
                'slug' => 'samsung-galaxy-s10-' . $i,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'price' => rand(500, 1500),
                'rating' => rand(5, 1000),
                'available_quantity' => rand(5, 25),
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $image1 = new ProductImage;
            $image1->image = 'storage/products/samsung-galaxy-s10-1.jpg';
            $image2 = new ProductImage;
            $image2->image = 'storage/products/samsung-galaxy-s10-2.jpg';
            $image3 = new ProductImage;
            $image3->image = 'storage/products/samsung-galaxy-s10-3.jpg';

            $product->images()->save($image1);
            $product->images()->save($image2);
            $product->images()->save($image3);

            $product->categories()->attach(17);
        }

        for ($i = 1; $i <= 24; $i++) {

            $product = Product::create([
                'title' => 'Samsung 65 Q6F Series ' . $i,
                'slug' => 'samsung-65-q6f-' . $i,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'price' => rand(500, 1500),
                'rating' => rand(5, 1000),
                'available_quantity' => rand(5, 25),
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $image1 = new ProductImage;
            $image1->image = 'storage/products/samsung-65-q6f-1.jpg';
            $image2 = new ProductImage;
            $image2->image = 'storage/products/samsung-65-q6f-2.jpg';

            $product->images()->save($image1);
            $product->images()->save($image2);

            $product->categories()->attach(18);
        }

        for ($i = 1; $i <= 24; $i++) {

            $product = Product::create([
                'title' => 'VIZIO 24 D-Series Smart ' . $i,
                'slug' => 'vizio-24-smart-' . $i,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'price' => rand(500, 1500),
                'rating' => rand(5, 1000),
                'available_quantity' => rand(5, 25),
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $image1 = new ProductImage;
            $image1->image = 'storage/products/vizio-24-smart-1.jpg';
            $image2 = new ProductImage;
            $image2->image = 'storage/products/vizio-24-smart-2.jpg';

            $product->images()->save($image1);
            $product->images()->save($image2);

            $product->categories()->attach(19);
        }

        for ($i = 1; $i <= 24; $i++) {

            $product = Product::create([
                'title' => 'Canon EOS Rebel SL2 ' . $i,
                'slug' => 'canon-eos-rebel-' . $i,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'price' => rand(500, 1500),
                'rating' => rand(5, 1000),
                'available_quantity' => rand(5, 25),
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $image1 = new ProductImage;
            $image1->image = 'storage/products/canon-eos-rebel-1.jpg';
            $image2 = new ProductImage;
            $image2->image = 'storage/products/canon-eos-rebel-2.jpg';

            $product->images()->save($image1);
            $product->images()->save($image2);

            $product->categories()->attach(20);
        }

        for ($i = 1; $i <= 24; $i++) {

            $product = Product::create([
                'title' => 'Panasonic G7 ' . $i,
                'slug' => 'panasonic-g7-' . $i,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'price' => rand(500, 1500),
                'rating' => rand(5, 1000),
                'available_quantity' => rand(5, 25),
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $image1 = new ProductImage;
            $image1->image = 'storage/products/panasonic-g7-1.jpg';
            $image2 = new ProductImage;
            $image2->image = 'storage/products/panasonic-g7-2.jpg';

            $product->images()->save($image1);
            $product->images()->save($image2);

            $product->categories()->attach(21);
        }

    }
}
