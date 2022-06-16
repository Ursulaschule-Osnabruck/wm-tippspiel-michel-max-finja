<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Teams;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('teams') ->insert(['heim_id' => '', 'gast_id' => '' , 'group' => 'A' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '' , 'spielort' => 'al-Thumama Stadium']);
        DB::table('teams') ->insert(['heim_id' => '', 'gast_id' => '' , 'group' => 'B' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '' , 'spielort' => 'Khalifa International Stadium']);
        DB::table('teams') ->insert(['heim_id' => '', 'gast_id' => '' , 'group' => 'A' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '' , 'spielort' => 'al-Bayt Stadium']);
        DB::table('teams') ->insert(['heim_id' => '', 'gast_id' => '' , 'group' => 'B' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '' , 'spielort' => 'Ahmed bin Ali Stadium']);
        DB::table('teams') ->insert(['heim_id' => '', 'gast_id' => '' , 'group' => 'C' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '' , 'spielort' => 'Lusail Stadium']);

    }
}
