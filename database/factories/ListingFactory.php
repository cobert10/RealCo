<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = $this->faker->randomElement(['Villa', 'Townhouse', 'Penthouse', 'Apartment']);
        $image = '';
        if($type === 'Villa'){
            $image = $this->faker->randomElement([
                'pexels-asad-photo-maldives-1320686','pexels-donald-tong-189296'
            ]);
        }
        elseif($type === 'Apartment'){
            $image = $this->faker->randomElement([
                'pexels-alexander-isreb-1797393','pexels-binyamin-mellish-1396122'
            ]);
        }
        elseif($type === 'Townhouse'){
            $image = $this->faker->randomElement([
                'pexels-abdullah-al-mallah-8372031','pexels-julia-volk-5193255'
            ]);
        }
        elseif($type === 'Penthouse'){
            $image = $this->faker->randomElement([
                'alice-kang-Bc_uN5PeErA-unsplash','infinite-views-79NjpXDOJU8-unsplash'
            ]);
        }


        return [
            'type' => $type,
            'price' =>$this->faker->numberBetween(10000, 10000000),
            'location' =>$this->faker->address(),
            'beds' => $this->faker->numberBetween(1, 10),
            'baths' => $this->faker->numberBetween(1,5),
            'area' => $this->faker->numberBetween(100,2000),
            'description' => $this->faker->paragraph(5),
            'agent' => $this->faker->name(),
            'contact' => $this->faker->phoneNumber(),
            'image' => $image
        ];
    }
}
