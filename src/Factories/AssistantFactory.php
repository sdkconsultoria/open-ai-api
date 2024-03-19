<?php

namespace Sdkconsultoria\OpenAiApi\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Sdkconsultoria\OpenAiApi\OpenAiApi;

class AssistantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OpenAiApi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'instructions' => $this->faker->text(),
            'name' => $this->faker->word(),
            'tools' => $this->faker->word(),
            'model' => $this->faker->word(),
        ];
    }
}
