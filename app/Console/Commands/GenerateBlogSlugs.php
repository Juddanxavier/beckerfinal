<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateBlogSlugs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-blog-slugs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate slugs for existing blog posts';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $blogs = \App\Models\Blog::all();

        foreach ($blogs as $blog) {
            if (empty($blog->slug)) {
                $blog->save(); // This will trigger slug generation
                $this->info('Generated slug for: ' . $blog->title);
            }
        }

        $this->info('Blog slugs generated successfully!');
    }
}
