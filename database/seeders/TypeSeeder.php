<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Type::create(['name' => 'Procesor']);
        \App\Models\Type::create(['name' => 'Płyta główna']);
        \App\Models\Type::create(['name' => 'RAM']);
        \App\Models\Type::create(['name' => 'Karta graficzna']);
        \App\Models\Type::create(['name' => 'Dysk HDD']);
        \App\Models\Type::create(['name' => 'Dysk SSD']);
        \App\Models\Type::create(['name' => 'Chłodzenie CPU']);
        \App\Models\Type::create(['name' => 'Zasilacz']);
        \App\Models\Type::create(['name' => 'Obudowa']);
    }
}
