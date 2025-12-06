<?php

namespace Database\Seeders;

use App\Models\Academic;
use Illuminate\Database\Seeder;

class AcademicSeeder extends Seeder
{
    public function run(): void
    {
        Academic::create([
            'degree'        => 'BSc in Computer Science & Engineering',
            'institution'   => 'Daffodil International University',
            'location'      => 'Dhaka, Bangladesh',
            'start_year'    => '2022',
            'end_year'      => '2026',
            'result'        => null, // e.g. "CGPA: 3.7/4.0"
            'description'   => 'Relevant coursework: Data Structures, Algorithms, Database Systems, Web Development, Machine Learning, Operating Systems.',
            'display_order' => 1,
        ]);

        Academic::create([
            'degree'        => 'Higher Secondary Certificate (HSC)',
            'institution'   => 'Residential Model College',
            'location'      => 'Cumilla',
            'start_year'    => '2019',
            'end_year'      => '2021',
            'result'        => null, // e.g. "GPA: 5.00"
            'description'   => 'Science group with focus on Mathematics, Physics and ICT.',
            'display_order' => 2,
        ]);

        Academic::create([
            'degree'        => 'Secondary School Certificate (SSC)',
            'institution'   => 'Ibn Taimiya School & College',
            'location'      => 'Cumilla',
            'start_year'    => '2018',
            'end_year'      => '2019',
            'result'        => null,
            'description'   => 'Built strong foundation in general science and mathematics.',
            'display_order' => 3,
        ]);
    }
}
