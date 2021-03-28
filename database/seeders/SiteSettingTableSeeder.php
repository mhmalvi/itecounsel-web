<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteSettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_settings')->insert([
            'dbsiteName' => 'ITEC',
            'dbemail' => 'info@itec.edu.au',
            'dbcontact' => '+0125878965',
            'dbaddress' => 'new jersy',
            'dbfavicon' => '',
            'dblogo' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
