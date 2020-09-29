<?php

use App\Models\Document;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::insertOrIgnore([
            'name' => 'Demo',
            'email' => 'demo@email.com',
            'password' => '$2y$10$OhcsrrmeaOmO4fGSvJkwBO2ACCD6OSUCtVZ9NpF296T9iEPoB9DBq'
        ]);
        for ($i = 1; $i <= 15; $i++) {
            Event::updateOrCreate([
                'name' => "Evento $i"
            ], [
                'description' => Str::random(50),
                'start_at' => Carbon::now()->startOfDay(),
                'end_at' => Carbon::now()->endOfDay(),
                'contact_button_url' => 'https://google.com',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR_JFyvU2eGQdS6hx7TQOloUXX3EpC_947U-jWJwF-OdfB2EAQM&usqp=CAU'
            ]);

            Document::updateOrCreate([
                'title' => "Documento $i",
                'url' => 'http://www.criciuma.sc.gov.br/pmc/webroot/upload/159923129704-09-2020.pdf'
            ]);
        }

        Slider::insertOrIgnore([
            [
                'caption' => 'Slider 1',
                'image' => 'https://www.w3schools.com/w3css/img_la.jpg',
                'action_url' => '#'
            ],
            [
                'caption' => 'Slider 2',
                'image' => 'https://www.w3schools.com/w3css/img_ny.jpg',
                'action_url' => '#'
            ],
            [
                'caption' => 'Slider 3',
                'image' => 'https://www.w3schools.com/w3css/img_chicago.jpg',
                'action_url' => '#'
            ],
        ]);
    }
}
