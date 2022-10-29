<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Country;
use App\Models\Resolution;
use App\Models\Type;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
         ]);

        $types = [
            "Drama China",
            "Drama Korea",
            "Drama Thailand",
            "Anime",
            "Donghua",
        ];

        foreach ($types as $type) {
            Type::create(['name' => $type]);
        }

        $countries = [
            "China",
            "Korea Selatan",
            "Jepang",
            "Thailand"
        ];
        foreach ($countries as $country) {
            Country::create(['name' => $country]);
        }

        $resolutions = [
            "380p", "480p", "720p", "1080p"
        ];
        foreach ($resolutions as $resolution) {
            Resolution::create(['name' => $resolution]);
        }
    }
}
