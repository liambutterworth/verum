<?php

namespace Database\Seeders;

Use App\Models\Campaign;
Use App\Models\Character;
Use App\Models\Session;
Use App\Models\User;
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
        User::factory()->count(36)->create()->each(function($user) {
            $characters = Character::factory()->count(rand(1, 3))->make();
            $user->characters()->saveMany($characters);
        });

        Campaign::factory()->count(10)->create()->each(function($campaign) {
            $sessions = Session::factory()->count(rand(8, 12))->make();
            $characters = Character::inRandomOrder()->limit(rand(5, 6))->get();
            $campaign->sessions()->saveMany($sessions);
            $campaign->characters()->attach($characters);
        });
    }
}
