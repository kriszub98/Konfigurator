<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $component = Component::create([
        'name' => 'Procek 1',
        'photo_path' => '',
        'price' => '123',
        'is_produced' => 1,
        'type_id' => 1,
        ]);

        
    }
}
