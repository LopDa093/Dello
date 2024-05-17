<?php

namespace Database\Seeders;

use App\Models\Board;
use App\Models\Comment;
use App\Models\Lists;
use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Board::factory(10)->create();
        Lists::factory(10)->create();
        Task::factory(10)->create();
        Comment::factory(10)->create();
    }
}
