<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Tommy Rafael Sánchez Feliz',
            'email' => 'tommy-s05@hotmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'description' => "Software developer",
            'facebook_url' => "#",
            'twitter_url' => "#",
            'dribbble_url' => "#",
            'linkedin_url' => "#",
            'phone' => "+1 (809) 852-2693",
            'address' => "República Dominicana",
            'birthdate' => "2001-03-05",
            'bio' => 'Soy un joven estudiante de termino de Ingenieria en Sistemas y Computación con un gran interés en Desarrollo de Software.
            Tengo gran capacidad para adaptarme a diferentes tipos de entornos y aportar siempre lo mejor de mí. Me caracterizo por mi facilidad para el trabajo en equipo y mi entusiasmo por aprender y desarrollar mis habilidades.
            En busca de una oportunidad laboral en la que aplicar mis conocimientos y adquirir más experiencia.'
        ]);
        
        $this->call([
            BlogSeeder::class,
            ClientSeeder::class,
            EducationSeeder::class,
            ExperienceSeeder::class,
            JobSeeder::class,
            KnowledgeSeeder::class,
            ServiceSeeder::class,
            WorkingSeeder::class,
        ]);
    }
}
