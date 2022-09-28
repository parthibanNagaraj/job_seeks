<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobLocation;
class JobLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $Job_Location = [

            ['name' => 'Chennai'],
            ['name' => 'Coimbatore'],
            ['name' => 'Madurai'],
            ['name' => 'Palani'],

        ];
   foreach ($Job_Location as $key => $joblocation) {
            
            JobLocation::Create($joblocation);
        }
    }
}
