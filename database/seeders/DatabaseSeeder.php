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

        DB::table('teams')->insert(['teamname'=>'Katar', 'kuerzel'=>'QAT', 'image'=>'ger.png', 'group'=>'A']);
        DB::table('teams')->insert(['teamname'=>'Ecuador', 'kuerzel'=>'ECU', 'image'=>'ger.png', 'group'=>'A']);
        DB::table('teams')->insert(['teamname'=>'Senegal', 'kuerzel'=>'SEN', 'image'=>'ger.png', 'group'=>'A']);
        DB::table('teams')->insert(['teamname'=>'Niederlande', 'kuerzel'=>'NED', 'image'=>'ger.png', 'group'=>'A']);

        DB::table('teams')->insert(['teamname'=>'England', 'kuerzel'=>'ENG', 'image'=>'ger.png', 'group'=>'B']);
        DB::table('teams')->insert(['teamname'=>'Iran', 'kuerzel'=>'IRN', 'image'=>'ger.png', 'group'=>'B']);
        DB::table('teams')->insert(['teamname'=>'USA', 'kuerzel'=>'USA', 'image'=>'ger.png', 'group'=>'B']);
        DB::table('teams')->insert(['teamname'=>'Wales', 'kuerzel'=>'WAL', 'image'=>'ger.png', 'group'=>'B']);

        DB::table('teams')->insert(['teamname'=>'Argentinien', 'kuerzel'=>'ARG', 'image'=>'ger.png', 'group'=>'C']);
        DB::table('teams')->insert(['teamname'=>'Saudi-Arabien', 'kuerzel'=>'KSA', 'image'=>'ger.png', 'group'=>'C']);
        DB::table('teams')->insert(['teamname'=>'Mexiko', 'kuerzel'=>'MEX', 'image'=>'ger.png', 'group'=>'C']);
        DB::table('teams')->insert(['teamname'=>'Polen', 'kuerzel'=>'POL', 'image'=>'ger.png', 'group'=>'C']);

        DB::table('teams')->insert(['teamname'=>'Frankreich', 'kuerzel'=>'FRA', 'image'=>'ger.png', 'group'=>'D']);
        DB::table('teams')->insert(['teamname'=>'Australien', 'kuerzel'=>'AUS', 'image'=>'ger.png', 'group'=>'D']);
        DB::table('teams')->insert(['teamname'=>'Dänemark', 'kuerzel'=>'DEN', 'image'=>'ger.png', 'group'=>'D']);
        DB::table('teams')->insert(['teamname'=>'Tunesien', 'kuerzel'=>'TUN', 'image'=>'ger.png', 'group'=>'D']);

        DB::table('teams')->insert(['teamname'=>'Spanien', 'kuerzel'=>'ESP', 'image'=>'ger.png', 'group'=>'E']);
        DB::table('teams')->insert(['teamname'=>'Costa Rica', 'kuerzel'=>'CRC', 'image'=>'ger.png', 'group'=>'E']);
        DB::table('teams')->insert(['teamname'=>'Deutschland', 'kuerzel'=>'GER', 'image'=>'ger.png', 'group'=>'E']);
        DB::table('teams')->insert(['teamname'=>'Japan', 'kuerzel'=>'JPN', 'image'=>'ger.png', 'group'=>'E']);

        DB::table('teams')->insert(['teamname'=>'Belgien', 'kuerzel'=>'BEL', 'image'=>'ger.png', 'group'=>'F']);
        DB::table('teams')->insert(['teamname'=>'Kanada', 'kuerzel'=>'CAN', 'image'=>'ger.png', 'group'=>'F']);
        DB::table('teams')->insert(['teamname'=>'Marokko', 'kuerzel'=>'MAR', 'image'=>'ger.png', 'group'=>'F']);
        DB::table('teams')->insert(['teamname'=>'Kroatien', 'kuerzel'=>'CRO', 'image'=>'ger.png', 'group'=>'F']);

        DB::table('teams')->insert(['teamname'=>'Brasilien', 'kuerzel'=>'BRA', 'image'=>'ger.png', 'group'=>'G']);
        DB::table('teams')->insert(['teamname'=>'Serbien', 'kuerzel'=>'SRB', 'image'=>'ger.png', 'group'=>'G']);
        DB::table('teams')->insert(['teamname'=>'Schweiz', 'kuerzel'=>'SUI', 'image'=>'ger.png', 'group'=>'G']);
        DB::table('teams')->insert(['teamname'=>'Kamerun', 'kuerzel'=>'CMR', 'image'=>'ger.png', 'group'=>'G']);

        DB::table('teams')->insert(['teamname'=>'Portugal', 'kuerzel'=>'POR', 'image'=>'ger.png', 'group'=>'H']);
        DB::table('teams')->insert(['teamname'=>'Ghana', 'kuerzel'=>'GHA', 'image'=>'ger.png', 'group'=>'H']);
        DB::table('teams')->insert(['teamname'=>'Uruguay', 'kuerzel'=>'URU', 'image'=>'ger.png', 'group'=>'H']);
        DB::table('teams')->insert(['teamname'=>'Südkorea', 'kuerzel'=>'KOR', 'image'=>'ger.png', 'group'=>'H']);




        DB::table('games') ->insert(['heim_id' => '3', 'gast_id' => '4' , 'group' => 'A' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-06-23 11:00:00' , 'spielort' => 'al-Thumama Stadium']);
        
        DB::table('games') ->insert(['heim_id' => '5', 'gast_id' => '6' , 'group' => 'B' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-06-23 14:00:00' , 'spielort' => 'Khalifa International Stadium']);
        /*DB::table('games') ->insert(['heim_id' => '1', 'gast_id' => '2' , 'group' => 'A' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '17:00:00' , 'spielort' => 'al-Bayt Stadium']);
        DB::table('games') ->insert(['heim_id' => '7', 'gast_id' => '8' , 'group' => 'B' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '20:00:00' , 'spielort' => 'Ahmed bin Ali Stadium']);
        DB::table('games') ->insert(['heim_id' => '9', 'gast_id' => '10' , 'group' => 'C' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '11:00:00' , 'spielort' => 'Lusail Stadium']);
        DB::table('games') ->insert(['heim_id' => '15', 'gast_id' => '16' , 'group' => 'D' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '14:00:00' , 'spielort' => 'Education City Stadium']);
        DB::table('games') ->insert(['heim_id' => '11', 'gast_id' => '12' , 'group' => 'C' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '17:00:00' , 'spielort' => 'Stadium 974']);
        DB::table('games') ->insert(['heim_id' => '13', 'gast_id' => '14' , 'group' => 'D' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '20:00:00' , 'spielort' => 'al-Janoub Stadium']);
*/
    }
}
