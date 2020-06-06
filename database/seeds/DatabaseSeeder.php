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
            Event::create([
                'name' => "Evento $i",
                'description' => Str::random(50),
                'start_at' => Carbon::now()->startOfDay(),
                'end_at' => Carbon::now()->endOfDay()
            ]);
        }
    }
}
