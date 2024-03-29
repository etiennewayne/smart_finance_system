<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AllotmentClassSeeder extends Seeder
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
                'allotment_class' => 'PERSONAL SERVICES',
                'allotment_class_budget' => 500,
                'allotment_class_balance' => 500
            ],
            [
                'financial_year_id' => 1,
                'allotment_class' => 'MAINTENANCE AND OTHER OPERATING',
                'allotment_class_budget' => 500,
                'allotment_class_balance' => 500
            ],
            [
                'financial_year_id' => 1,
                'allotment_class' => 'CAPITAL OUTLAY',
                'allotment_class_budget' => 500,
                'allotment_class_balance' => 500
            ],

            [
                'financial_year_id' => 1,
                'allotment_class' => 'OTHERS',
                'allotment_class_budget' => 500,
                'allotment_class_balance' => 500
            ],
          
        ];

        \App\Models\AllotmentClass::insertOrIgnore($data);

    }
}
