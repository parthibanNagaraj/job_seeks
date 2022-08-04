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
        JobLocation::create([
            'name' => 'Chennai',
        ]);
		 JobLocation::create([
            'name' => 'Coimbatore',
        ]);
		 JobLocation::create([
            'name' => 'Trichy',
        ]);
		 JobLocation::create([
            'name' => 'selam',
        ]);
		 JobLocation::create([
            'name' => 'Erode',
        ]);
    }
}
