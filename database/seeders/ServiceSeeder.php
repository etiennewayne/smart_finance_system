<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $data = [
            [
                'financial_year_id' => 1,
                'service' => 'ACCOUNTING',
                'budget' => 50000000,
                'balance' => 50000000,
            ],
            [
                'financial_year_id' => 1,
                'service' => 'BUDGETING',
                'budget' => 50000000,
                'balance' => 50000000,
            ],
            [
                'financial_year_id' => 1,
                'service' => 'PROCUREMENT',
                'budget' => 50000000,
                'balance' => 50000000,
            ]
            
        ];

        \App\Models\Service::insertOrIgnore($data);
    }
}
