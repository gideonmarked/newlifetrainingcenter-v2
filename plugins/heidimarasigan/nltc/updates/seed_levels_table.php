<?php namespace HeidiMarasigan\Nltc\Updates;

use Seeder;
use HeidiMarasigan\Nltc\Models\Level;

class SeedLevelsTable extends Seeder
{
    public function run()
    {
        $level = Level::create([
            'title'                 => 'First Year',
        ]);

        $level = Level::create([
            'title'                 => 'Second Year',
        ]);

        $level = Level::create([
            'title'                 => 'Pastoral Track',
        ]);
    }
}