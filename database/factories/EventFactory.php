<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'organiser' => $this->faker->name(),
            'title' => $this->faker->words(3, true),
            'date_event' => $this->faker->dateTime(),
            'location' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'limit_visitors' => $this->faker->numberBetween(5, 100),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
