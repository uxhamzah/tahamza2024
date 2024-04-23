<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Admin123'),
            'remember_token' => Str::random(10)
        ]);
        $admin->assignRole('admin');
        $admin->admin()->create([
            'user_id' => $admin->id
        ]);

        $expert = User::create([
            'name' => 'Herdini Primasari, S.Psi, M.Psi., Psikolog,',
            'email' => 'dini@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Psikolog123'),
            'remember_token' => Str::random(10)
        ]);
        $expert->assignRole('expert');
        $expert->expert()->create([
            'position' => 'Psikolog',
            'company' => 'Personal Growth',
            'user_id' => $expert->idq
        ]);

        $user = User::create([
            'name' => "uxhamzah",
            'email' => "uxhamzah@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt('User123'),
            'remember_token' => Str::random(10),
        ]);
        $user->assignRole('user');
        $user->userProfile()->create([
            'gender' => 'male',
            'age' => 20,
            'user_id' => $user->id
        ]);
    }
}
