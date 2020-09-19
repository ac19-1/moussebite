<?php

use App\Mousse;
use Illuminate\Database\Seeder;

class MousseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mousse = new Mousse();
        $mousse->name = 'Cherry Almond Mousse Pie';
        $mousse->price = 60000;
        $mousse->stock = 50;
        $mousse->size_id = 3;
        $mousse->image = 'Cherry Almond Mousse Pie.jpg';
        $mousse->description = 'A Mousse Pie with crunchy almond and sweet cherry';
        $mousse->save();

        $mousse = new Mousse();
        $mousse->name = 'Creamy Nutella Mousse';
        $mousse->price = 35000;
        $mousse->stock = 50;
        $mousse->size_id = 1;
        $mousse->image = 'Creamy Nutella Mousse.jpg';
        $mousse->description = 'A Mousse made with Nutella and fresh strawberries';
        $mousse->save();

        $mousse = new Mousse();
        $mousse->name = 'Creamy Raspberry Roll';
        $mousse->price = 35000;
        $mousse->stock = 50;
        $mousse->size_id = 3;
        $mousse->image = 'Creamy Raspberry Roll.jpg';
        $mousse->description = 'Cream filled wafer roll and peanut squares garnished with fresh raspberries';
        $mousse->save();

        $mousse = new Mousse();
        $mousse->name = 'Double Layered Mix Berries Mousse';
        $mousse->price = 25000;
        $mousse->stock = 50;
        $mousse->size_id = 2;
        $mousse->image = 'Double Layered Mix Berries Mousse.jpg';
        $mousse->description = 'Two-layered mousse with fresh blackberry and raspberry';
        $mousse->save();

        $mousse = new Mousse();
        $mousse->name = 'Layered Fruit Mousse';
        $mousse->price = 30000;
        $mousse->stock = 50;
        $mousse->size_id = 2;
        $mousse->image = 'Layered Fruit Mousse.jpg';
        $mousse->description = 'Mix fruit layered mousse with fresh fruits and cream';
        $mousse->save();

        $mousse = new Mousse();
        $mousse->name = 'Lemon Cheesecake Mousse';
        $mousse->price = 25000;
        $mousse->stock = 50;
        $mousse->size_id = 3;
        $mousse->image = 'Lemon Cheesecake Mousse.jpg';
        $mousse->description = 'Cheesecake mousse with fresh lemon slice';
        $mousse->save();

        $mousse = new Mousse();
        $mousse->name = 'Light Raspberry Mousse';
        $mousse->price = 20000;
        $mousse->stock = 50;
        $mousse->size_id = 3;
        $mousse->image = 'Light Raspberry Mousse.jpg';
        $mousse->description = 'Raspberry mousse with fresh raspberry';
        $mousse->save();

        $mousse = new Mousse();
        $mousse->name = 'Strawberry White Choco Mousse';
        $mousse->price = 30000;
        $mousse->stock = 50;
        $mousse->size_id = 1;
        $mousse->image = 'Strawberry White Choco Mousse.jpg';
        $mousse->description = 'Three-layered mousse with sweet white chocolate and fresh strawberries';
        $mousse->save();

        $mousse = new Mousse();
        $mousse->name = 'Triple Chocolate Mousse';
        $mousse->price = 30000;
        $mousse->stock = 50;
        $mousse->size_id = 1;
        $mousse->image = 'Triple Chocolate Mousse.jpg';
        $mousse->description = 'Triple chocolate mousse with cream and cocoa powder';
        $mousse->save();

        $mousse = new Mousse();
        $mousse->name = 'Two Tone Chocolate Mousse';
        $mousse->price = 20000;
        $mousse->stock = 50;
        $mousse->size_id = 3;
        $mousse->image = 'Two Tone Chocolate Mousse.jpg';
        $mousse->description = 'Double chocolate mousse with white chocolate';
        $mousse->save();
    }
}
