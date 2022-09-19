<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Listing;
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

        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Listing::create([
            'user_id' => $user->id,
            'title' => 'Senior Laravel Developer',
            'tags' => 'laravel, javascript',
            'company' => 'Excellence Solutions',
            'location' => 'Spintex, Ghana',
            'website' => 'excellence@gmail.com',
            'email' => 'https://www.facebook.com',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Qui eaque deserunt alias, eum nihil non ut aliquid, quod in explicabo, sunt
            ipsum dignissimos tenetur inventore sequi molestiae nemo voluptatum enim.'
        ]);

        Listing::create([
            'user_id' => $user->id,
            'title' => 'Backend Developer Intern',
            'tags' => 'laravel, backend, api',
            'company' => 'Excellence Solutions',
            'location' => 'Spintex, Ghana',
            'website' => 'excellence@gmail.com',
            'email' => 'https://www.facebook.com',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Qui eaque deserunt alias, eum nihil non ut aliquid, quod in explicabo, sunt
            ipsum dignissimos tenetur inventore sequi molestiae nemo voluptatum enim.'
        ]);
    }
}
