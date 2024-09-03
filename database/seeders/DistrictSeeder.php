<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            $districts = array(
                array('district_code' => 'DH', 'district_name' => 'Dhaka'),
                array('district_code' => 'FE', 'district_name' => 'Feni'),
                array('district_code' => 'CU', 'district_name' => 'Cumilla'),
                array('district_code' => 'RO', 'district_name' => 'Ronpur'),
                array('district_code' => 'BS', 'district_name' => 'Bahrain'),
                array('district_code' => 'BZ', 'district_name' => 'Belize'),
                
            );
    
            DB::table('districts')->insert($districts); 
        }
    }
}
