<?php

namespace Database\Factories;

use App\Models\Categories;
use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostCategoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $table = 'post_jn_categories';
    public function definition(): array
    {

        return [
            'post_id'=> Posts::all()->random()->id,
            'category_id'=> Categories::all()->random()->id,
        ];
    }
}
