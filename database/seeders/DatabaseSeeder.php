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
        \App\Models\User::factory(10)->create();
        $this->command->info('Таблица пользователей создана.');

        \App\Models\Post::factory(10)->create();
        $this->command->info('Таблица постов создана.');

        \App\Models\Comment::factory(20)->create();
        $this->command->info('Таблица комментариев создана.');
    }
}
