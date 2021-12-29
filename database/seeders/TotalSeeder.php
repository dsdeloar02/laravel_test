<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TotalSeeder;

class TotalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            StudentSeeder::class,
            Exam_markSeeder::class,
        ]);
    }
}
