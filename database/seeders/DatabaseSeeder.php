<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\PageDetail;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'TBI Admin',
            'email' => 'sksutbistepapp@gmail.com',
            'password' => 'stepapp@123'
        ]);

        PageDetail::create([
            'tag' => 'about',
            'contents' => [
                [
                    'title' => 'STEP APP',
                    'content' => fake()->paragraph(4)
                ],
                [
                    'title' => 'Mission',
                    'content' => fake()->paragraph(4)
                ],
                [
                    'title' => 'Vision',
                    'content' => fake()->paragraph(4)
                ],
                [
                    'title' => 'Goal',
                    'content' => fake()->paragraph(4)
                ],
            ]
        ]);

        PageDetail::create([
            'tag' => 'contact',
            'contents' => [
                [
                    'title' => 'Email',
                    'content' => 'tbistepapp@sksu.edu.ph'
                ],
                [
                    'title' => 'Contact Number',
                    'content' => '+639996800472'
                ],
                [
                    'title' => 'Facebook Page',
                    'content' => '@stepapp'
                ],
            ]
        ]);
    }
}
