<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesTaTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('games')->insert([
          [
            'title' => "Portal 2",
            'price' => 9.99,
          ],
          [
            'title' => "The Witcher 3",
            'price' => 19.99,
          ],
          [
            'title' => "Call of Duty 2",
            'price' => 4.99,
          ],
          [
            'title' => "Myst 2",
            'price' => 0.99,
          ]
        ]);
    }
}
