<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses_type')->insert([
            'course_type' => 'Diploma'
        ]);
        DB::table('courses_type')->insert([
            'course_type' => 'Advanse Diploma'
        ]);
        DB::table('courses_type')->insert([
            'course_type' => 'Certificate III'
        ]);
        DB::table('courses_type')->insert([
            'course_type' => 'Certificate IV'
        ]);

        //Diploma
        DB::table('courses')->insert([
            'course_type_id' => '1',
            'course_code' => 'BSB50215',
            'course_name' => 'Diploma of Business'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '1',
            'course_code' => 'BSB51918',
            'course_name' => 'Diploma of Leadership and Management'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '1',
            'course_code' => 'BSB50415',
            'course_name' => 'Diploma of Business Administration'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '1',
            'course_code' => 'BSB50815',
            'course_name' => 'Diploma of International Business'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '1',
            'course_code' => 'BSB5131',
            'course_name' => 'Diploma of Work Health and Safety'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '1',
            'course_code' => 'CHC50113',
            'course_name' => 'Diploma of Early Childhood Education and Care'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '1',
            'course_code' => 'ICT50915',
            'course_name' => 'Diploma of Digital Media Technologies'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '1',
            'course_code' => 'BSB50615',
            'course_name' => 'Diploma of Human Resources Management'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '1',
            'course_code' => 'BSB52415',
            'course_name' => 'Diploma of Marketing and Communication'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '1',
            'course_code' => 'BSB61315',
            'course_name' => 'Advanced Diploma of Marketing and Communication'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '1',
            'course_code' => 'CHC52015',
            'course_name' => 'Diploma of Community Services'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '1',
            'course_code' => 'ICT50115',
            'course_name' => 'Diploma of Information Technology'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '1',
            'course_code' => 'SHB50115',
            'course_name' => 'Diploma of Beauty Therapy'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '1',
            'course_code' => 'SIT50416',
            'course_name' => 'Diploma of Hospitality Management'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '1',
            'course_code' => 'HLT52015',
            'course_name' => 'Diploma of Remedial Massage'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '1',
            'course_code' => 'BSB51415',
            'course_name' => 'Diploma of Project Management'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '1',
            'course_code' => 'BSB61015',
            'course_name' => 'Advanced Diploma of Leadership and Management'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '1',
            'course_code' => 'CHC62015',
            'course_name' => 'Advanced Diploma of Community Sector Management'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '1',
            'course_code' => 'SIT60316',
            'course_name' => 'Advanced Diploma of Hospitality Management'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '1',
            'course_code' => 'HLTAID006',
            'course_name' => 'Provide Advanced First Aid'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '1',
            'course_code' => 'HLTAID003',
            'course_name' => 'First Aid'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '1',
            'course_code' => 'HLTAID004',
            'course_name' => 'First Aid'
        ]);


        //Certificate III
        DB::table('courses')->insert([
            'course_type_id' => '3',
            'course_code' => 'CHC30113',
            'course_name' => 'Certificate III in Early Childhood Education and Care'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '3',
            'course_code' => 'CHC30213',
            'course_name' => 'Certificate III in Education Support'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '3',
            'course_code' => 'CHC33015',
            'course_name' => 'Certificate III in Individual Support'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '3',
            'course_code' => 'CUA30715',
            'course_name' => 'Certificate III in Design Fundamentals'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '3',
            'course_code' => 'CUA31115',
            'course_name' => 'Certificate III in Visual Arts'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '3',
            'course_code' => 'CPC30111',
            'course_name' => 'Certificate III in Bricklaying- Block laying'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '3',
            'course_code' => 'SIT30116',
            'course_name' => 'Certificate III in Tourism'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '3',
            'course_code' => 'CPC30211',
            'course_name' => 'Certificate III in Carpentry'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '3',
            'course_code' => 'SIT30816',
            'course_name' => 'Certificate III in Commercial Cookery'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '3',
            'course_code' => 'SHB30416',
            'course_name' => 'Certificate III in Hairdressing '
        ]);


        //Certificate IV
        DB::table('courses')->insert([
            'course_type_id' => '4',
            'course_code' => 'CHC43015',
            'course_name' => 'Certificate IV in Ageing Support'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '4',
            'course_code' => 'BSB40215',
            'course_name' => 'Certificate IV in Business'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '4',
            'course_code' => 'BSB42415',
            'course_name' => 'Certificate IV in Marketing and Communication'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '4',
            'course_code' => 'BSB40407',
            'course_name' => 'Certificate IV in Small Business'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '4',
            'course_code' => 'SIT40116',
            'course_name' => 'Certificate IV in Travel and Tourism'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '4',
            'course_code' => 'CHC43315',
            'course_name' => 'Certificate IV in Mental Health'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '4',
            'course_code' => 'CUA40715',
            'course_name' => 'Certificate IV in Design'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '4',
            'course_code' => 'ICT40815',
            'course_name' => 'Certificate IV in Digital Media Technologies'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '4',
            'course_code' => 'CHC40313',
            'course_name' => 'Certificate IV in Child, Youth and Family Intervention'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '4',
            'course_code' => 'TAE40116',
            'course_name' => 'Certificate IV in Training and Assessment'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '4',
            'course_code' => 'BSB41015',
            'course_name' => 'Certificate IV in Human Resources'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '4',
            'course_code' => 'CPC40110',
            'course_name' => 'Certificate IV in Building and Construction (Building)'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '4',
            'course_code' => 'CHC43115',
            'course_name' => 'Certificate IV in Disability'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '4',
            'course_code' => 'SIT40516',
            'course_name' => 'Certificate IV in Commercial Cookery'
        ]);
        DB::table('courses')->insert([
            'course_type_id' => '4',
            'course_code' => 'SHB40115',
            'course_name' => 'Certificate IV in Beauty Therapy'
        ]);
    }
}
