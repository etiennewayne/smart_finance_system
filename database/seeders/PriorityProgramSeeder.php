<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PriorityProgramSeeder extends Seeder
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
                'priority_program' => 'Accreditation (ALCU/COA/ISO/CHED)',
                'priority_program_code' => '000-001',
            ],
            [
                'priority_program' => 'Faculty Incentives/ Student Scholarship Grants',
                'priority_program_code' => '000-002',
            ],
            [
                'priority_program' => 'Foundation Day',
                'priority_program_code' => '000-003',
            ],

            
        ];

        \App\Models\PriorityProgram::insertOrIgnore($data);

    }
}
