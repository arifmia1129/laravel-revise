<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    //    $this->call([
    //     FanSeeder::class
    //    ]);

    //    $this->call([
    //     StudentSeeder::class
    //    ]);

    Member::factory(10)->create();
    }


}
