<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\City;
use App\Models\Country;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Country::create(['name' => 'India']);
        Country::create(['name' => 'UAE']);

        City::create([ 'country_id' => 1 , 'name' => 'calicut']);
        City::create([ 'country_id' => 1 , 'name' => 'kochi']);
        City::create([ 'country_id' => 1 , 'name' => 'Edappal']);

        City::create([ 'country_id' => 2 , 'name' => 'Dubai']);
        City::create([ 'country_id' => 2 , 'name' => 'Abudhabi']);
        City::create([ 'country_id' => 2 , 'name' => 'Sharja']);

        Tag::create(['name' => 'laravel' ,'slug' => 'laravel']);
        Tag::create(['name' => 'react' ,'slug' => 'react']);
        Tag::create(['name' => 'livewire' ,'slug' => 'livewire']);

    }
}
