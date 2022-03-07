<?php

declare(strict_types=1);
namespace Database\Seeders;

use App\Models\Players;
use Illuminate\Database\Seeder;
use Iluminate\Support\Facades\DB;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->truncate();

        $players = [
            [
                'clubs_id'      => 1,
                'photo'         => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p165153.png',
                'name'          => 'Timo Werner',
                'height'        => '180',
                'position'      => 'Forward',
                'created_at'    => '2022-03-01 00:00:00',
                'updated_at'    => '2022-03-01 00:00:00',
            ],
        ];
    }
}
