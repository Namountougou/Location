<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Client;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string
     */
    protected $model=Client::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'sexe' => array_rand(['M', 'F']),
            'dateNaissance' => $this->faker->dateTimeBetween('1960-01-01', '2004-01-01'),
            'lieuNaissance' => $this->faker->city,
            'nationalite' => $this->faker->country,
            'pays' => $this->faker->country,
            'ville' => $this->faker->city,
            'adresse' => $this->faker->address,
            'telephone1' => $this->faker->phoneNumber,
            'telephone2' => $this->faker->phoneNumber,
            'pieceIdentite' => array_rand(['CNI', 'Passeport', 'Permis de conduire'], 1),
            'noPieceIdentite' => $this->faker->swiftBicNumber,
        
        ];
    }
}
