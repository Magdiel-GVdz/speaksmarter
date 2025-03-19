<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::updateOrCreate(
            ["email" => "admin@speaksmarter.net"],
            [
                "name" => "admin",
                "password" => Hash::make("admin"),
            ]
        );
        $admin->assignRole("admin");

        $editor = User::updateOrCreate(
            ["email" => "editor@speaksmarter.net"],
            [
                "name" => "editor",
                "password" => Hash::make("editor"),
            ]
        );

        $editor->assignRole("editor");
    }
}
