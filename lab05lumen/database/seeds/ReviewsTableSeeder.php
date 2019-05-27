<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
      DB::table('reviews')->insert([
        [
          'product_id' => 1,
          'rating' => 4,
          'comment' => "Very nice game",
        ],
        [
          'product_id' => 2,
          'rating' => 5,
          'comment' => "Very great game, much recommend!",
        ],
        [
          'product_id' => 3,
          'rating' => 1,
          'comment' => "Very bad game",
        ]
      ]);
    }
}
