<?php
namespace Modules\UserMedia\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\UserMedia\Models\UserMedia;

class UserMediaFactory extends Factory
{
    protected $model = UserMedia::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name()
        ];
    }
}