<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\User::factory()->create();

    DB::table('contacts')->insert([
        'name' => Str::random(5),
        'first_name' => Str::random(7),
        'firm' => Str::random(3),
        'mail' => Str::random(6).'@gmail.com',
        'phone' => '0'.rand(6, 7).'.'.rand(010, 99).'.'.rand(10, 99).'.'.rand(10, 99).'.'.rand(10, 99),
        'message' => Str::random(25),
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    }
}
