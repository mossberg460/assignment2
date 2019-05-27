<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoresTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('stores')->insert([
          [
            'name' => "Games Shop AB",
            'city' => "Lund",
          ],
          [
            'name' => "Games King",
            'city' => "Malmoe",
          ],
          [
            'name' => "Games Now",
            'city' => "Stockholm",
          ],
          [
            'name' => "Games Kiruna",
            'city' => "Kiruna",
          ]
        ]);
    }
}
