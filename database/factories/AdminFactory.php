<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    private $adminNumber = 0;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $this->adminNumber += 1;

        return [
            'first_name' => 'Abdulrhman',
            'middle_name' => 'Ahmed',
            'last_name' => 'Maher',
            'email' => "admin{$this->adminNumber}@example.com",
            'password' => Hash::make('password'),
        ];
    }
}
