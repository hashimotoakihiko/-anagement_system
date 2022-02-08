<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use  App\Models\Sale;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Sale::factory()->count(15)->create();
    }
}
