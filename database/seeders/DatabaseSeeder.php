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




        DB::table('games') ->insert(['heim_id' => '3', 'gast_id' => '4' , 'group' => 'A' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-21 11:00:00' , 'spielort' => 'al-Thumama Stadium']);
        DB::table('games') ->insert(['heim_id' => '5', 'gast_id' => '6' , 'group' => 'B' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-21 14:00:00' , 'spielort' => 'Khalifa International Stadium']);
        DB::table('games') ->insert(['heim_id' => '1', 'gast_id' => '2' , 'group' => 'A' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-21 17:00:00' , 'spielort' => 'al-Bayt Stadium']);
        DB::table('games') ->insert(['heim_id' => '7', 'gast_id' => '8' , 'group' => 'B' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-21 20:00:00' , 'spielort' => 'Ahmed bin Ali Stadium']);
        DB::table('games') ->insert(['heim_id' => '9', 'gast_id' => '10' , 'group' => 'C' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-22 11:00:00' , 'spielort' => 'Lusail Stadium']);
        DB::table('games') ->insert(['heim_id' => '15', 'gast_id' => '16' , 'group' => 'D' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-22 14:00:00' , 'spielort' => 'Education City Stadium']);
        DB::table('games') ->insert(['heim_id' => '11', 'gast_id' => '12' , 'group' => 'C' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-22 17:00:00' , 'spielort' => 'Stadium 974']);
        DB::table('games') ->insert(['heim_id' => '13', 'gast_id' => '14' , 'group' => 'D' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-22 20:00:00' , 'spielort' => 'al-Janoub Stadium']);
        DB::table('games') ->insert(['heim_id' => '23', 'gast_id' => '24' , 'group' => 'F' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-23 11:00:00' , 'spielort' => 'al-Bayt Stadium']);
        DB::table('games') ->insert(['heim_id' => '19', 'gast_id' => '20' , 'group' => 'E' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-23 14:00:00' , 'spielort' => 'Khalifa International Stadium']);
        DB::table('games') ->insert(['heim_id' => '17', 'gast_id' => '18' , 'group' => 'E' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-23 17:00:00' , 'spielort' => 'al-Thumama Stadium']);
        DB::table('games') ->insert(['heim_id' => '21', 'gast_id' => '22' , 'group' => 'F' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-23 20:00:00' , 'spielort' => 'Ahmed bin Ali Stadium']);
        DB::table('games') ->insert(['heim_id' => '27', 'gast_id' => '28' , 'group' => 'G' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-24 11:00:00' , 'spielort' => 'al-Janoub Stadium']);
        DB::table('games') ->insert(['heim_id' => '31', 'gast_id' => '31' , 'group' => 'H' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-24 14:00:00' , 'spielort' => 'Education City Stadium']);
        DB::table('games') ->insert(['heim_id' => '28', 'gast_id' => '29' , 'group' => 'H' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-24 17:00:00' , 'spielort' => 'Stadium 974']);
        DB::table('games') ->insert(['heim_id' => '25', 'gast_id' => '26' , 'group' => 'G' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-24 20:00:00' , 'spielort' => 'Lusail Stadium']);
        DB::table('games') ->insert(['heim_id' => '8', 'gast_id' => '6' , 'group' => 'B' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-25 11:00:00' , 'spielort' => 'Ahmed bin Ali Stadium']);
        DB::table('games') ->insert(['heim_id' => '1', 'gast_id' => '3' , 'group' => 'A' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-25 14:00:00' , 'spielort' => 'al-Thumama-Stadium']);
        DB::table('games') ->insert(['heim_id' => '4', 'gast_id' => '2' , 'group' => 'A' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-25 17:00:00' , 'spielort' => 'Khalifa International Stadium']);
        DB::table('games') ->insert(['heim_id' => '5', 'gast_id' => '7' , 'group' => 'B' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-25 20:00:00' , 'spielort' => 'al-Bayt Stadium']);
        DB::table('games') ->insert(['heim_id' => '16', 'gast_id' => '14' , 'group' => 'D' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-26 11:00:00' , 'spielort' => 'al-Janoub Stadium']);
        DB::table('games') ->insert(['heim_id' => '12', 'gast_id' => '10' , 'group' => 'C' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-26 14:00:00' , 'spielort' => 'Education City Stadium']);
        DB::table('games') ->insert(['heim_id' => '13', 'gast_id' => '15' , 'group' => 'D' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-26 17:00:00' , 'spielort' => 'Stadium 974']);
        DB::table('games') ->insert(['heim_id' => '9', 'gast_id' => '11' , 'group' => 'C' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-26 20:00:00' , 'spielort' => 'Lusail Stadium']);
        DB::table('games') ->insert(['heim_id' => '18', 'gast_id' => '20' , 'group' => 'E' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-27 11:00:00' , 'spielort' => 'Ahmed bin Ali Stadium']);
        DB::table('games') ->insert(['heim_id' => '23', 'gast_id' => '21' , 'group' => 'F' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-27 14:00:00' , 'spielort' => 'al-Thumama Stadium']);
        DB::table('games') ->insert(['heim_id' => '24', 'gast_id' => '22' , 'group' => 'F' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-27 17:00:00' , 'spielort' => 'Khalifa International Stadium']);
        DB::table('games') ->insert(['heim_id' => '17', 'gast_id' => '19' , 'group' => 'E' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-27 20:00:00' , 'spielort' => 'al-Bayt Stadium']);
        DB::table('games') ->insert(['heim_id' => '28', 'gast_id' => '26' , 'group' => 'G' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-28 11:00:00' , 'spielort' => 'al-Janoub Stadium']);
        DB::table('games') ->insert(['heim_id' => '32', 'gast_id' => '30' , 'group' => 'H' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-28 14:00:00' , 'spielort' => 'Education City Stadium']);
        DB::table('games') ->insert(['heim_id' => '25', 'gast_id' => '27' , 'group' => 'G' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-28 17:00:00' , 'spielort' => 'Stadium 974']);
        DB::table('games') ->insert(['heim_id' => '29', 'gast_id' => '31' , 'group' => 'H' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-28 20:00:00' , 'spielort' => 'Lusail Stadium']);
        DB::table('games') ->insert(['heim_id' => '4', 'gast_id' => '1' , 'group' => 'A' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-29 16:00:00' , 'spielort' => 'al-Bayt Stadium']);
        DB::table('games') ->insert(['heim_id' => '2', 'gast_id' => '3' , 'group' => 'A' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-29 16:00:00' , 'spielort' => 'Khalifa International Stadium']);
        DB::table('games') ->insert(['heim_id' => '6', 'gast_id' => '7' , 'group' => 'B' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-29 20:00:00' , 'spielort' => 'al-Thumama Stadium']);
        DB::table('games') ->insert(['heim_id' => '8', 'gast_id' => '5' , 'group' => 'B' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-29 20:00:00' , 'spielort' => 'Ahmed bin Ali Stadium']);
        DB::table('games') ->insert(['heim_id' => '16', 'gast_id' => '13' , 'group' => 'D' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-30 16:00:00' , 'spielort' => 'Education City Stadium']);
        DB::table('games') ->insert(['heim_id' => '14', 'gast_id' => '15' , 'group' => 'D' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-30 16:00:00' , 'spielort' => 'al-Janoub Stadium']);
        DB::table('games') ->insert(['heim_id' => '10', 'gast_id' => '11' , 'group' => 'C' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-30 20:00:00' , 'spielort' => 'Lusail Stadium']);
        DB::table('games') ->insert(['heim_id' => '9', 'gast_id' => '12' , 'group' => 'C' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-30 20:00:00' , 'spielort' => 'Stadium 974']);
        DB::table('games') ->insert(['heim_id' => '22', 'gast_id' => '23' , 'group' => 'F' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-12-01 16:00:00' , 'spielort' => 'al-Thumama Stadium']);
        DB::table('games') ->insert(['heim_id' => '24', 'gast_id' => '21' , 'group' => 'F' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-12-01 16:00:00' , 'spielort' => 'Ahmed bin Ali Stadium']);
        DB::table('games') ->insert(['heim_id' => '18', 'gast_id' => '19' , 'group' => 'E' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-12-01 20:00:00' , 'spielort' => 'al-Bayt Stadium']);
        DB::table('games') ->insert(['heim_id' => '20', 'gast_id' => '17' , 'group' => 'E' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-12-01 20:00:00' , 'spielort' => 'Khalifa International Stadium']);
        DB::table('games') ->insert(['heim_id' => '30', 'gast_id' => '31' , 'group' => 'H' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-12-02 16:00:00' , 'spielort' => 'al-Janoub Stadium']);
        DB::table('games') ->insert(['heim_id' => '32', 'gast_id' => '29' , 'group' => 'H' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-12-02 16:00:00' , 'spielort' => 'Education City Stadium']);
        DB::table('games') ->insert(['heim_id' => '26', 'gast_id' => '27' , 'group' => 'G' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-12-02 20:00:00' , 'spielort' => 'Stadium 974']);
        DB::table('games') ->insert(['heim_id' => '28', 'gast_id' => '25' , 'group' => 'G' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-12-02 20:00:00' , 'spielort' => 'Lusail Stadium']);

    }
}
