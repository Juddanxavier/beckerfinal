<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Str;

class BlogContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogContent = file_get_contents(base_path('temp_blog_content.txt'));
        $title = "6 Common Problems with Vacuum Pump Parts"; // Extracted from the provided content
        $author = User::first(); // Assuming at least one user exists

        if ($author) {
            Blog::create([
                'title' => $title,
                'content' => $blogContent,
                'author_id' => $author->id,
                'image' => null, // You can set an image path if you have one
            ]);

            $this->command->info('Blog post "' . $title . '" seeded successfully!');
        } else {
            $this->command->error('No user found to assign as author. Please create a user first.');
        }
    }
}
