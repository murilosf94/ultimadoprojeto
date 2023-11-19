<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */


    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::factory()->create([
            'id'=>'4',
            'name'=> 'murilo',
            'email'=>'murilo@teste.com',
            'password'=> Hash::make('12345678'),
            'acesso'=>'a',
            'two_factor_secret'=> NULL,
            'two_factor_recovery_codes'=> NULL,
            'remember_token'=> '.',
            'email_verified_at'=>'.',
            'profile_photo_path'=>'.',
            'current_team_id'=>'.',
            'updated_at'=>'.',
            'created_at'=>'.'

        ]);
        User::factory()->create([
            'id'=>'10',
            'name'=> 'rapha',
            'email'=>'rapha@teste.com',
            'password'=> Hash::make('12345678'),
            'acesso'=>'b',
            'two_factor_secret'=> NULL,
            'two_factor_recovery_codes'=> NULL,
            'remember_token'=> '.',
            'email_verified_at'=>'.',
            'profile_photo_path'=>'.',
            'current_team_id'=>'.',
            'updated_at'=>'.',
            'created_at'=>'.'

        ]);
        User::factory()->create([
            'id'=>'11',
            'name'=> 'bia',
            'email'=>'bia@teste.com',
            'password'=> Hash::make('12345678'),
            'acesso'=>'c',
            'two_factor_secret'=> NULL,
            'two_factor_recovery_codes'=> NULL,
            'remember_token'=> '.',
            'email_verified_at'=>'.',
            'profile_photo_path'=>'.',
            'current_team_id'=>'.',
            'updated_at'=>'.',
            'created_at'=>'.'

        ]);

        User::factory()->create([
            'id'=>'2',
            'name'=> 'admin',
            'email'=>'admin@teste.com',
            'password'=> Hash::make('12345678'),
            'acesso'=>'d',
            'two_factor_secret'=> NULL,
            'two_factor_recovery_codes'=> NULL,
            'remember_token'=> '.',
            'email_verified_at'=>'.',
            'profile_photo_path'=>'.',
            'current_team_id'=>'.',
            'updated_at'=>'.',
            'created_at'=>'.'

        ]);
    }
}

