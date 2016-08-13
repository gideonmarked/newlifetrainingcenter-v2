<?php namespace HeidiMarasigan\Nltc\Updates;

use Seeder;
use HeidiMarasigan\Nltc\Models\Day;

class SeedDaysTable extends Seeder
{
    public function run()
    {
        $day = Day::create([
            'title'                 => 'Sunday',
        ]);

        $day = Day::create([
            'title'                 => 'Monday',
        ]);

        $day = Day::create([
            'title'                 => 'Tuesday',
        ]);

        $day = Day::create([
            'title'                 => 'Wednesday',
        ]);

        $day = Day::create([
            'title'                 => 'Thursday',
        ]);

        $day = Day::create([
            'title'                 => 'Friday',
        ]);

        $day = Day::create([
            'title'                 => 'Saturday',
        ]);
    }
}