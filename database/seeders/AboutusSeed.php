<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AboutusSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('about-us')->insert([
            'name' => 'Who Are We',
            'description' => Str::random(200),
            'image' => 'about.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}