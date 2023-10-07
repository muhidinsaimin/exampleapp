<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'name' => 'Akhtar Maulana',
            'gender' => 'Laki-laki',
            'email' => 'akhtar@maulana.al',
            'phone' => '0897865323',
        ]);
        Customer::create([
            'name' => 'Maulana B',
            'gender' => 'Laki-laki',
            'email' => 'maulana.al@gmail.com',
            'phone' => '08567765545',
        ]);
    }
}
