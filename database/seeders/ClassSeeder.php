<?php

namespace Database\Seeders;

use App\Models\classroom;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        classroom::insert([
            'name' => 'aiu',
            'created_at'=> Carbon::now(),
            'updated_at' => carbon::now()
        ]);
    }
}
