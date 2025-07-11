<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin1234'),
            'is_admin' => true,
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Seed products for each category (expanded)
        DB::table('products')->insert([
            // Chien products
            [
                'name' => 'PREMIUM MEATY FEAST',
                'description' => 'Repas savoureux et équilibré pour chiens adultes.',
                'price' => 19.89,
                'image' => 'img/dogp.webp',
                'category' => 'chien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'STANDARD RANGE CHICKEN',
                'description' => 'Poulet de qualité pour chiens actifs.',
                'price' => 13.47,
                'image' => 'img/dogp.webp',
                'category' => 'chien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'COMPLETE ADULT TURKEY',
                'description' => 'Dinde complète pour chiens adultes.',
                'price' => 21.62,
                'image' => 'img/dogp.webp',
                'category' => 'chien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'STANDARD RANGE TRIPE',
                'description' => 'Tripe standard pour chiens.',
                'price' => 19.00,
                'image' => 'img/dogp.webp',
                'category' => 'chien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'RABBIT EARS WITH HAIR',
                'description' => 'Oreilles de lapin naturelles pour chiens.',
                'price' => 15.50,
                'image' => 'img/dogp.webp',
                'category' => 'chien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PREMIUM PUPPY FOOD',
                'description' => 'Alimentation premium pour chiots.',
                'price' => 24.99,
                'image' => 'img/dogp.webp',
                'category' => 'chien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'SENIOR DOG FORMULA',
                'description' => 'Formule spéciale pour chiens seniors.',
                'price' => 22.50,
                'image' => 'img/dogp.webp',
                'category' => 'chien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'GRAIN FREE SPECIAL',
                'description' => 'Recette sans céréales pour chiens sensibles.',
                'price' => 26.99,
                'image' => 'img/dogp.webp',
                'category' => 'chien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Chat products
            [
                'name' => 'GOURMET CAT DELIGHT',
                'description' => 'Recette gourmande pour chats exigeants.',
                'price' => 14.99,
                'image' => 'img/catp.webp',
                'category' => 'chat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'FINEST FISH FEAST',
                'description' => 'Poisson frais pour chats gourmets.',
                'price' => 16.50,
                'image' => 'img/catp.webp',
                'category' => 'chat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CHICKEN & RICE BLEND',
                'description' => 'Mélange poulet et riz pour chats.',
                'price' => 13.20,
                'image' => 'img/catp.webp',
                'category' => 'chat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'SENIOR CAT FORMULA',
                'description' => 'Formule spéciale pour chats âgés.',
                'price' => 18.00,
                'image' => 'img/catp.webp',
                'category' => 'chat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'KITTEN STARTER PACK',
                'description' => 'Pack de démarrage pour chatons.',
                'price' => 20.00,
                'image' => 'img/catp.webp',
                'category' => 'chat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HAIRBALL CONTROL',
                'description' => 'Aliment pour le contrôle des boules de poils.',
                'price' => 17.50,
                'image' => 'img/catp.webp',
                'category' => 'chat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'LIGHT & FIT',
                'description' => 'Recette légère pour chats stérilisés.',
                'price' => 15.80,
                'image' => 'img/catp.webp',
                'category' => 'chat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'INDOOR CAT SPECIAL',
                'description' => 'Formule spéciale pour chats d’intérieur.',
                'price' => 16.90,
                'image' => 'img/catp.webp',
                'category' => 'chat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Oiseau products
            [
                'name' => 'EXOTIC BIRD MIX',
                'description' => 'Mélange nutritif pour oiseaux exotiques.',
                'price' => 9.99,
                'image' => 'img/birdp.webp',
                'category' => 'oiseau',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'VITAMIN SEED BLEND',
                'description' => 'Graines enrichies en vitamines.',
                'price' => 12.00,
                'image' => 'img/birdp.webp',
                'category' => 'oiseau',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'TROPICAL FRUIT MIX',
                'description' => 'Mélange de fruits tropicaux pour oiseaux.',
                'price' => 11.50,
                'image' => 'img/birdp.webp',
                'category' => 'oiseau',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PARROT ENERGY FOOD',
                'description' => 'Aliment énergétique pour perroquets.',
                'price' => 14.30,
                'image' => 'img/birdp.webp',
                'category' => 'oiseau',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CANARY SEED MIX',
                'description' => 'Mélange de graines pour canaris.',
                'price' => 10.20,
                'image' => 'img/birdp.webp',
                'category' => 'oiseau',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BIRD SNACKS',
                'description' => 'Snacks variés pour oiseaux.',
                'price' => 8.90,
                'image' => 'img/birdp.webp',
                'category' => 'oiseau',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'NUTRI-BALLS',
                'description' => 'Boules nutritives pour oiseaux.',
                'price' => 13.40,
                'image' => 'img/birdp.webp',
                'category' => 'oiseau',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'WILD BIRD FEED',
                'description' => 'Aliment pour oiseaux sauvages.',
                'price' => 12.80,
                'image' => 'img/birdp.webp',
                'category' => 'oiseau',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
