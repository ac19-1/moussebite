<?php

use App\Size;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $size = new Size();
        $size->name = 'regular';
        $size->save();

        $size = new Size();
        $size->name = 'large';
        $size->save();

        $size = new Size();
        $size->name = 'both';
        $size->save();
    }
}
