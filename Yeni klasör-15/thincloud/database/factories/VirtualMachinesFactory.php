<?php

namespace Database\Factories;

use App\Models\VirtualMachines;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VirtualMachinesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $model = VirtualMachines::class;

        return [
            'user_id' => 1,
            'thincloudname' => 'VM-'.$this->faker->unique()->numberBetween($min = 1, $max = 20),
            'thincloudid' => 'T'.rand(1000, 9999),
            'name' => $this->faker->name,
            'surname' => $this->faker->lastname,
            'username' => $this->faker->userName,
            'auto_shutdown' => 1,
            'location' => $this->faker->city,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'email' => $this->faker->unique()->email,
            'status' => 3,
            'billing' => 'Auto-Debit',
            'my_plans_id' => rand(1, 4),
            'operating_system_id' => rand(1, 3),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ];
    }
}
