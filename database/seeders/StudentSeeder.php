<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->faker->text(8);
        
        DB::table('result')->insert([
            'name'=>Str::random(5),
            'class'=>Str::random(6),
            'roll'=>Str::random(3)
        
        ]);
    }
}
