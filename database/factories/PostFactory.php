<?php

namespace Database\Factories;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Author;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $kategori = Kategori::all()->random();
        $author = Author::all()->random();
        $tag = Tag::all()->random();

        return [
            'judul' => fake()->sentence(6),
            'slug' => fake()->slug(),
            'konten' => fake()->sentence(300),
            'kategori_id' => $kategori->id,
            'tags' => $tag->id,
            'status' => fake()->randomElement(['draft', 'publish']),
            'author_id' => $author->id,
            'tanggal' => fake()->date(),
        ];
    }
}
