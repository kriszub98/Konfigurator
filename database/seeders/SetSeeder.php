<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Component::create([
            'name' => 'MSI GamerZ', 
            'photo_path' => asset('/img/test'),
            'price' => 53190,
            'is_produced' => 1,
            'type_id' => 1,
        ]);
        \App\Models\Property::create(['name' => 'Socket', 'value' => '1150']);
        \App\Models\Predefined::create(['name' => 'Socket']);
        \App\Models\Requirement::create(['type_id' => '1', 'property_id' => '1']);
        \App\Models\Set::create(['name' => 'Tani szybki', 'user_id' => 1]);
        
        \App\Models\Type::findOrFail(1)->predefined()->attach(1);
        \App\Models\Component::findOrFail(1)->properties()->attach(1);
        \App\Models\Component::findOrFail(1)->requirements()->attach(1);
        \App\Models\Set::findOrFail(1)->components()->attach(1);
    }
}
    