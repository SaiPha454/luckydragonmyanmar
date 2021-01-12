<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\HoroContent;
use App\Models\Price;
use Database\Factories\AdminFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        HoroContent::create([
            'content'=>'Content One',
            'section'=>'section-one'
        ]);
        HoroContent::create([
            'content'=>'Content Two',
            'section'=>'section-two'
        ]);

        Price::create([
            'cancelPrice'=>'80,000',
            'price'=>'40,000'
        ]);
        Admin::factory(1)->create();
    }
}
