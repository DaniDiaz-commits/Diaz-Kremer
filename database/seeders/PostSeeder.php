<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->postier('Post 1', 'Body del post 1');
        $this->postier('Post 2', 'Body del post 2');
        $this->postier('Post 3', 'Body del post 3');
        $this->postier('Post 4', 'Body del post 4');
        $this->postier('Post 5', 'Body del post 5');
        $this->postier('Post 6', 'Body del post 6');
        $this->postier('Post 7', 'Body del post 7');
        $this->postier('Post 8', 'Body del post 8');
        $this->postier('Post 9', 'Body del post 9');
        $this->postier('Post 10', 'Body del post 10');
        $this->postier('Post 11', 'Body del post 11');
        $this->postier('Post 12', 'Body del post 12');

    }

    private function postier(string $nombre,string $descripcion) 
    {
        Post::create([
            'title' => $nombre,
            'body' => $descripcion
        ]);
    }
}
