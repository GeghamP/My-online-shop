<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProducrTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product1 = new Product([
			'img_path' => 'https://upload.wikimedia.org/wikipedia/commons/2/24/Blue_Tshirt.jpg',
			'title' => 'T-shirt',
			'desc' => 'A very comfortable t-shirt',
			'price' => 50
		]);
		$product1->save();
		$product2 = new Product([
			'img_path' => 'https://upload.wikimedia.org/wikipedia/commons/3/34/Stainless_Steel_Laboratory_Pneumatic_Chair_with_wheels.jpg',
			'title' => 'Chair',
			'desc' => 'A very comfortable chair',
			'price' => 103
		]);
		$product2->save();
		$product3 = new Product([
			'img_path' => 'https://upload.wikimedia.org/wikipedia/commons/d/d5/Digital_television_camera.jpg',
			'title' => 'Camera',
			'desc' => 'A very comfortable camera',
			'price' => 550
		]);
		$product3->save();
	}
}
