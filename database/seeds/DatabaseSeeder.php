<?php

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
        for ($i = 1; $i <= 15; $i++) {
            Event::updateOrCreate([
                'name' => "Evento $i"
            ], [
                'description' => Str::random(50),
                'start_at' => Carbon::now()->startOfDay(),
                'end_at' => Carbon::now()->endOfDay(),
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR_JFyvU2eGQdS6hx7TQOloUXX3EpC_947U-jWJwF-OdfB2EAQM&usqp=CAU'
            ]);
        }
    }
}
