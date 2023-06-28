<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Database\Factories\PostFactory;
use Database\Factories\TagCloudFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin user
        User::create([
            'name' => 'Test User',
            'email' => 'admin@lyzzu.app',
            'password' => bcrypt('password'),
        ]);

        $this->call([
            CategorySeeder::class,
        ]);

        TagCloudFactory::new()->count(10)->create();
        PostFactory::new()->count(200)->create();
    }
}
