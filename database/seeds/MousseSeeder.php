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
        $mousse->name = 'Choco Strawberry Almond Mousse';
        $mousse->price = 30000;
        $mousse->stock = 50;
        $mousse->size_id = 3;
        $mousse->image = 'Choco Strawberry Almond Mousse.png';
        $mousse->description = 'Chocolate mousse with crunchy almonds and fresh strawberries';
        $mousse->save();

        $mousse = new Mousse();
        $mousse->name = 'Chocolate Almond Mousse';
        $mousse->price = 25000;
        $mousse->stock = 50;
        $mousse->size_id = 1;
        $mousse->image = 'Chocolate Almond Mousse.png';
        $mousse->description = 'Chocolate mousse with crunchy almonds';
        $mousse->save();

        $mousse = new Mousse();
        $mousse->name = 'Double Chocolate Mousse';
        $mousse->price = 25000;
        $mousse->stock = 50;
        $mousse->size_id = 3;
        $mousse->image = 'Double Chocolate Mousse.png';
        $mousse->description = 'Chocolate mousse with sweet chocolate balls';
        $mousse->save();

        $mousse = new Mousse();
        $mousse->name = 'Peanut Butter Mousse';
        $mousse->price = 25000;
        $mousse->stock = 50;
        $mousse->size_id = 2;
        $mousse->image = 'Peanut Butter Mousse.png';
        $mousse->description = 'Peanut butter mousse with sweet chocolate balls';
        $mousse->save();

        $mousse = new Mousse();
        $mousse->name = 'Strawberry Almond Mousse';
        $mousse->price = 25000;
        $mousse->stock = 50;
        $mousse->size_id = 2;
        $mousse->image = 'Strawberry Almond Mousse.png';
        $mousse->description = 'Strawberry mousse with crunchy almonds';
        $mousse->save();

        $mousse = new Mousse();
        $mousse->name = 'Strawberry Mousse';
        $mousse->price = 20000;
        $mousse->stock = 50;
        $mousse->size_id = 3;
        $mousse->image = 'Strawberry Mousse.png';
        $mousse->description = 'Strawberry mousse with fresh strawberry slices';
        $mousse->save();

        $mousse = new Mousse();
        $mousse->name = 'Strawberry Yoghurt Mousse';
        $mousse->price = 25000;
        $mousse->stock = 50;
        $mousse->size_id = 3;
        $mousse->image = 'Strawberry Yoghurt Mousse.png';
        $mousse->description = 'Strawberry mousse mixed with fresh yoghurt with sweet strawberries';
        $mousse->save();

        $mousse = new Mousse();
        $mousse->name = 'Tri-layered Almond Mousse';
        $mousse->price = 30000;
        $mousse->stock = 50;
        $mousse->size_id = 1;
        $mousse->image = 'Tri-layered Almond Mousse.png';
        $mousse->description = 'Tri-layered mousse with crunchy almonds';
        $mousse->save();

        $mousse = new Mousse();
        $mousse->name = 'Tri-layered Raspberry Mousse';
        $mousse->price = 30000;
        $mousse->stock = 50;
        $mousse->size_id = 1;
        $mousse->image = 'Tri-layered Raspberry Mousse.png';
        $mousse->description = 'Tri-layered mousse with fresh and sweet raspberries';
        $mousse->save();

        $mousse = new Mousse();
        $mousse->name = 'Tri-layered Strawberry Mousse';
        $mousse->price = 30000;
        $mousse->stock = 50;
        $mousse->size_id = 3;
        $mousse->image = 'Tri-layered Strawberry Mousse.png';
        $mousse->description = 'Tri-layered mousse with fresh and sweet strawberries';
        $mousse->save();
    }
}
