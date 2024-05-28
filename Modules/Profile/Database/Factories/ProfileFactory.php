<?php
namespace Modules\Profile\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Profile\Models\Profile;

class ProfileFactory extends Factory
{
    protected $model = Profile::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name()
        ];
    }
}