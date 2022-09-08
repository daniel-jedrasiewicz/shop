<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Łukasz',
            'surname' => 'Muszyński',
            'phone_number' => '712732123',
            'email_verified_at' => now(),
            'email' => 'lukasz.muszynski@eurocall.pl',
            'password' => '$2y$10$BlWiNCH/V3bEz8dBRVKN/.n3fkC0HIyerAAYLUR4whsgRATtcedYi'
        ])->assignRole('Admin');

        User::create([
            'name' => 'Daniel',
            'surname' => 'Jędrasiewicz',
            'phone_number' => '542123492',
            'email_verified_at' => now(),
            'email' => 'daniel.jedrasiewicz@eurocall.pl',
            'password' => '$2y$10$BlWiNCH/V3bEz8dBRVKN/.n3fkC0HIyerAAYLUR4whsgRATtcedYi',
        ])->assignRole('Admin');

        User::create([
            'name' => 'Kamil',
            'surname' => 'Oracz',
            'phone_number' => '886128213',
            'email_verified_at' => now(),
            'email' => 'kamil.oracz@eurocall.pl',
            'password' => '$2y$10$BlWiNCH/V3bEz8dBRVKN/.n3fkC0HIyerAAYLUR4whsgRATtcedYi',
        ])->assignRole('Admin');

        User::create([
            'name' => 'Mateusz',
            'surname' => 'Zybura',
            'phone_number' => '873234723',
            'email_verified_at' => now(),
            'email' => 'mateusz.zybura@eurocall.pl',
            'password' => '$2y$10$BlWiNCH/V3bEz8dBRVKN/.n3fkC0HIyerAAYLUR4whsgRATtcedYi',
        ])->assignRole('Admin');

        User::create([
            'name' => 'Kacper',
            'surname' => 'Stolarek',
            'phone_number' => '673923732',
            'email_verified_at' => now(),
            'email' => 'kacper.stolarek@eurocall.pl',
            'password' => '$2y$10$BlWiNCH/V3bEz8dBRVKN/.n3fkC0HIyerAAYLUR4whsgRATtcedYi',
        ])->assignRole('Admin');

    }
}
