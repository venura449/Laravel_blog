<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'Small Habits, Big Change: How Daily Routines Shape Your Future',
            'user_id' => 1,
            'description'=>'Explore how simple, consistent habits can transform your life.
            This post dives into the science of habit-building and offers practical
            tips to start strong and stay consistent.',
            'image'=>'1751712517',
        ]);

        Post::create([
            'title' => 'Tech Trends 2025: What’s Next in the Digital World?',
            'user_id' => 1,
            'description'=>'Stay ahead of the curve with the top technology trends that are
            reshaping industries—from AI and IoT to immersive virtual experiences. Discover
            what the future holds for innovation.',
            'image'=>'1751718000',
        ]);
    }
}
