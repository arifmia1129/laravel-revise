<?php

namespace Database\Seeders;

use App\Models\Fan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fan = new Fan();
        $fan->name = 'Nike';
        $fan->brand = 'Nike Air';
        $fan->color = 'Black';
        $fan->size = 'Large';
        $fan->price = 1200;

        $fan->save();
    }
}
