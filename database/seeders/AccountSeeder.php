<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        'role' => 'admin',
        'name'=>'admin',
        'email'=>'admin@gmail.com',
        'password'=>bcrypt('admin12345'),
        ]);
    }
}