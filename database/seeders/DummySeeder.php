<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $login = [
            [
                'name' => 'mono',
                'email' => 'mono@gmail.com',
                'password' => bcrypt('monoganteng'),
                'role' => 'admin',
                
            ]
        ];

        foreach ($login as $key => $mono) {
            User::create($mono);
        }
    }
}
