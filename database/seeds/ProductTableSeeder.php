<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imgPath'=>'https://img.webmd.com/dtmcms/live/webmd/consumer_assets/site_images/article_thumbnails/quizzes/fast_food_smarts_rmq/650x350_fast_food_smarts_rmq.jpg',
            'title' => 'dangvancuong',
            'description' => 'dang van cuong',
            'price' =>10
        ]);
        $product->save();
        $product = new \App\Product([
            'imgPath'=>'https://img.webmd.com/dtmcms/live/webmd/consumer_assets/site_images/article_thumbnails/quizzes/fast_food_smarts_rmq/650x350_fast_food_smarts_rmq.jpg',
            'title' => 'dangvancuong',
            'description' => 'dang van cuong',
            'price' =>10
        ]);
        $product->save();
        $product = new \App\Product([
            'imgPath'=>'https://img.webmd.com/dtmcms/live/webmd/consumer_assets/site_images/article_thumbnails/quizzes/fast_food_smarts_rmq/650x350_fast_food_smarts_rmq.jpg',
            'title' => 'dangvancuong',
            'description' => 'dang van cuong',
            'price' =>10
        ]);
        $product->save();
        $product = new \App\Product([
            'imgPath'=>'https://img.webmd.com/dtmcms/live/webmd/consumer_assets/site_images/article_thumbnails/quizzes/fast_food_smarts_rmq/650x350_fast_food_smarts_rmq.jpg',
            'title' => 'dangvancuong',
            'description' => 'dang van cuong',
            'price' =>10
        ]);
        $product->save();
        $product = new \App\Product([
            'imgPath'=>'https://img.webmd.com/dtmcms/live/webmd/consumer_assets/site_images/article_thumbnails/quizzes/fast_food_smarts_rmq/650x350_fast_food_smarts_rmq.jpg',
            'title' => 'dangvancuong',
            'description' => 'dang van cuong',
            'price' =>10
        ]);
        $product->save();
    }
}
