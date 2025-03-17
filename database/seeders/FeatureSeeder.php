<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tbl_features')->insert([
            ['name' => 'Feature 1', 'description' => 'Description for Feature 1'],
            ['name' => 'Feature 2', 'description' => 'Description for Feature 2'],
            ['name' => 'Feature 3', 'description' => 'Description for Feature 3'],
            ['name' => 'Feature 4', 'description' => 'Description for Feature 4'],
            ['name' => 'Feature 5', 'description' => 'Description for Feature 5'],
            ['name' => 'Feature 6', 'description' => 'Description for Feature 6'],
            ['name' => 'Feature 7', 'description' => 'Description for Feature 7'],
            ['name' => 'Feature 8', 'description' => 'Description for Feature 8'],
            ['name' => 'Feature 9', 'description' => 'Description for Feature 9'],
            ['name' => 'Feature 10', 'description' => 'Description for Feature 10'],
        ]);
    }
}
