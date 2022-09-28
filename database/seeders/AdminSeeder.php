<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create(['name' => 'Admin' , 'email' => 'admin@gmail.com','user_type' => '1','password' => 'P@rthi@laravel']);
    }
}
