<?php

namespace Database\Factories;
<<<<<<< HEAD
use App\Models\User;
=======

>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
<<<<<<< HEAD
    protected $model = User::class;

    public function definition()
    {
        return [
            // 'name' => substr($this->faker->name, 0, 10),
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->userName . '@students.undip.ac.id',
            'password' => Hash::make('root'), // Tidak di-hash
=======
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
<<<<<<< HEAD
}

=======
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
>>>>>>> 0823c85f1c0ad32424b3b9400ddf2d1ac3bf34f7
