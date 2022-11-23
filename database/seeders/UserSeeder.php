<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create(array(
            'id' => rand(100, 500),
                'name' => 'See Buy ',
                'level' => 'Super Admin',
                'email' => 'admin@seebuy.penaku.tech',
                'password' => Hash::make('zy_KR`C{91WAwo_B')
            ));
    }
}
