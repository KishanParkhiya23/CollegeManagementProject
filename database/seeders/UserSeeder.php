<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('registrations')->insert([
            [
                'StudentId' => "ST1001",
                'Fname' => "Parkhiya",
                'Mname' => "Kishan",
                'Lname' => "Maheshbhai",
                'Address' => "12 , husr jkkays losdj , jisdg jdd ",
                'Mobile' => "9658741254",
                'Gender' => "Male",
                'DOB' => "2003-06-08",
                'Religion' => "Hindu",
                'Year' => "2001",
                'Class' => "Class A"
            ],
            [
                'StudentId' => "ST1002",
                'Fname' => "Mangukiya",
                'Mname' => "Jay",
                'Lname' => "Dhirubhai",
                'Address' => "12 , husr jkkays losdj , jisdg jdd ",
                'Mobile' => "8547965874",
                'Gender' => "Male",
                'DOB' => "2003-12-10",
                'Religion' => "Hindu",
                'Year' => "2001",
                'Class' => "Class A"
            ]
        ]);
        DB::table('user_regs')->insert([
            'Fname' => "Admin",
            'Lname' => "Admin",
            'DOB' => "2022-06-20",
            'Gender' => "Other",
            'Email' => "admin@gmail.com",
            'Password' => Hash::make("admin@123"),
            'Stream' => "BCA",
            'Phone' => "1234567890"
        ]);
        DB::table('years')->insert([
            ['Year' => "2001"],
            ['Year' => "2002"],
            ['Year' => "2003"],
            ['Year' => "2004"],
            ['Year' => "2005"],
            ['Year' => "2006"],
            ['Year' => "2007"],
            ['Year' => "2008"],
            ['Year' => "2009"],
            ['Year' => "2010"]
        ]);
        DB::table('class_m_s')->insert([
            ['Class' => "Class A"],
            ['Class' => "Class B"],
            ['Class' => "Class C"],
            ['Class' => "Class D"],
            ['Class' => "Class E"],
            ['Class' => "Class F"]
        ]);
        DB::table('subjects')->insert([
            ['Subject' => "IOT"],
            ['Subject' => "Web Designing"],
            ['Subject' => "ASP .net"],
            ['Subject' => "React JS"],
            ['Subject' => "PHP"],
            ['Subject' => "JAVA"]
        ]);
        DB::table('marks_grades')->insert([
            [
                'Grade' => "A ++",
                'StartMarks' => "90",
                'EndMarks' => "99",
                'Remarks' => "Excellent"
            ],
            [
                'Grade' => "A ",
                'StartMarks' => "80",
                'EndMarks' => "90",
                'Remarks' => "Very Good"
            ],
            [
                'Grade' => "B +",
                'StartMarks' => "70",
                'EndMarks' => "80",
                'Remarks' => "Good"
            ],
            [
                'Grade' => "B",
                'StartMarks' => "60",
                'EndMarks' => "50",
                'Remarks' => "Nice"
            ],

        ]);
        DB::table('marks_entries')->insert([
            [
                'StudentId' => "ST1001",
                'Class' => "Class A",
                'Year' => "2001",
                'Grade' => "A",
                'Subject' => "IOT",
                'TotalMarks' => "100",
                'ObtainMarks' => "86"
            ],
            [
                'StudentId' => "ST1001",
                'Class' => "Class A",
                'Year' => "2001",
                'Grade' => "A +",
                'Subject' => "Web Designing",
                'TotalMarks' => "100",
                'ObtainMarks' => "91"
            ],
            [
                'StudentId' => "ST1001",
                'Class' => "Class A",
                'Year' => "2001",
                'Grade' => "A +",
                'Subject' => "ASP .net",
                'TotalMarks' => "100",
                'ObtainMarks' => "92"
            ],
            [
                'StudentId' => "ST1001",
                'Class' => "Class A",
                'Year' => "2001",
                'Grade' => "A +",
                'Subject' => "PHP",
                'TotalMarks' => "100",
                'ObtainMarks' => "90"
            ],
            [
                'StudentId' => "ST1001",
                'Class' => "Class A",
                'Year' => "2001",
                'Grade' => "B",
                'Subject' => "JAVA",
                'TotalMarks' => "100",
                'ObtainMarks' => "79"
            ],
            [
                'StudentId' => "ST1002",
                'Class' => "Class A",
                'Year' => "2001",
                'Grade' => "A",
                'Subject' => "IOT",
                'TotalMarks' => "100",
                'ObtainMarks' => "91"
            ],
            [
                'StudentId' => "ST1002",
                'Class' => "Class A",
                'Year' => "2001",
                'Grade' => "A",
                'Subject' => "JAVA",
                'TotalMarks' => "100",
                'ObtainMarks' => "86"
            ],
            [
                'StudentId' => "ST1002",
                'Class' => "Class A",
                'Year' => "2001",
                'Grade' => "A",
                'Subject' => "Web Designing",
                'TotalMarks' => "100",
                'ObtainMarks' => "80"
            ],
            [
                'StudentId' => "ST1002",
                'Class' => "Class A",
                'Year' => "2001",
                'Grade' => "A +",
                'Subject' => "PHP",
                'TotalMarks' => "100",
                'ObtainMarks' => "90"
            ],
            [
                'StudentId' => "ST1002",
                'Class' => "Class A",
                'Year' => "2001",
                'Grade' => "B",
                'Subject' => "React JS",
                'TotalMarks' => "100",
                'ObtainMarks' => "79"
            ]

        ]);
    }
}
