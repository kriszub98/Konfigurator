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
        $component = \App\Models\Component::create([
        'name' => 'Procek 1',
        'photo_path' => '',
        'price' => '123',
        'is_produced' => 1,
        'type_id' => 1,
        ]);

        $property = \App\Models\Property::create([
            'name' => 'Socket',
            'value' => 'L1234'
        ]);

        $component->properties()->sync($property);


        $component = \App\Models\Component::create([
        'name' => 'Plyta 1',
        'photo_path' => '',
        'price' => '123',
        'is_produced' => 1,
        'type_id' => 2,
        ]);
        $property = \App\Models\Property::create([
            'name' => 'Maksymana Pamięć',
            'value' => '12'
        ]);
        $component->properties()->sync($property);

        $component = \App\Models\Component::create([
        'name' => 'RAM 1',
        'photo_path' => '',
        'price' => '123',
        'is_produced' => 1,
        'type_id' => 3,
        ]);
        $property = \App\Models\Property::create([
            'name' => 'Pamięć',
            'value' => '12'
        ]);
        $component->properties()->sync($property);

        $component = \App\Models\Component::create([
        'name' => 'Karta Graficzna 1',
        'photo_path' => '',
        'price' => '123',
        'is_produced' => 1,
        'type_id' => 4,
        ]);
        $property = \App\Models\Property::create([
            'name' => 'Pamięć',
            'value' => '4'
        ]);
        $component->properties()->sync($property);

        $component = \App\Models\Component::create([
        'name' => 'Dysk HDD 1',
        'photo_path' => '',
        'price' => '123',
        'is_produced' => 1,
        'type_id' => 5,
        ]);
        $property = \App\Models\Property::create([
            'name' => 'Pamięć',
            'value' => '1 TB'
        ]);
        $component->properties()->sync($property);

        $component = \App\Models\Component::create([
        'name' => 'Dysk SSD 1',
        'photo_path' => '',
        'price' => '123',
        'is_produced' => 1,
        'type_id' => 6,
        ]);
        $property = \App\Models\Property::create([
            'name' => 'Pamięć',
            'value' => '1 TB'
        ]);
        $component->properties()->sync($property);

        $component = \App\Models\Component::create([
            'name' => 'Chlodzenie 1',
            'photo_path' => '',
            'price' => '123',
            'is_produced' => 1,
            'type_id' => 7,
        ]);
        $property = \App\Models\Property::create([
            'name' => 'Zimno',
            'value' => 'Bardzo'
        ]);
        $component->properties()->sync($property);

        $component = \App\Models\Component::create([
            'name' => 'Zasilacz 1',
            'photo_path' => '',
            'price' => '123',
            'is_produced' => 1,
            'type_id' => 8,
        ]);
        $property = \App\Models\Property::create([
            'name' => 'Pobor mocy',
            'value' => '1'
        ]);
        $component->properties()->sync($property);

        $component = \App\Models\Component::create([
            'name' => 'Obudowa 1',
            'photo_path' => '',
            'price' => '123',
            'is_produced' => 1,
            'type_id' => 9,
        ]);
        $property = \App\Models\Property::create([
            'name' => 'Szerokosc',
            'value' => '125'
        ]);

        $component->properties()->sync($property);

    }
}
