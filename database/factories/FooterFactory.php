<?php

// database/factories/FooterFactory.php

namespace Database\Factories;

use App\Models\Footer;
use Illuminate\Database\Eloquent\Factories\Factory;

class FooterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Footer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'location' => $this->faker->address,
            'email' => $this->faker->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'facebook_url' => $this->faker->url,
            'instagram_url' => $this->faker->url,
            'youtube_url' => $this->faker->url,
            // Add more fields as needed
        ];
    }
}

