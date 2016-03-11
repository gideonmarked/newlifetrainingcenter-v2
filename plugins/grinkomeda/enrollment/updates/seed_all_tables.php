<?php namespace Acme\Crm\Updates;
use Seeder;
use Grinkomeda\Enrollment\Models\Level;
class SeedAllTables extends Seeder
{
    public function run()
    {
        Level::create(['name' => 'First Year']);
        Level::create(['name' => 'Second Year']);
        Level::create(['name' => 'Part Time']);
    }
}