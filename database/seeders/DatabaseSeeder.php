<?php

namespace Database\Seeders;

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
        \App\Models\User::factory()->count(10)->create();
        \App\Models\clasec::factory()->count(10)->create();
        \App\Models\section::factory()->count(2)->create();
        \App\Models\student::factory()->count(2)->create();
        $this->call(userrolestable::class);
        $this->call(reg::class);
    }
}
