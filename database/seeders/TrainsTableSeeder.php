<?php

namespace Database\Seeders;

use App\Models\Trains;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $trainsArray=[
            // [
            //     'company'=>'trenitalia',
            //     'starting_station'=> 'rimini',
            //     'arrival_station' => 'cesenatico',
            //     'train_code_unique'=> 45645646,
            //     'carriage_number'=> 12,
            //     'in_time'=> 1,
            //     'deleted'=> 0
            // ],
            // [
            //     'company'=>'regionale lento e senza aria condizionata',
            //     'starting_station'=> 'genova',
            //     'arrival_station' => 'varazze',
            //     'train_code_unique'=> 4562,
            //     'carriage_number'=> 12,
            //     'in_time'=> 0,
            //     'deleted'=> 1
            // ]
        ];

        // foreach ($trainsArray as $train){
        //     $newTrain = new Trains();
        //     $newTrain-> company = $train['company'];
        //     $newTrain-> starting_station =  $train['starting_station'];
        //     $newTrain-> arrival_station =  $train['arrival_station'];
        //     $newTrain-> train_code_unique =  $train['train_code_unique'];
        //     $newTrain-> carriages_number =  $train['carriage_number'];
        //     $newTrain-> in_time =  $train['in_time'];
        //     $newTrain-> deleted = $train['deleted'];
        //     $newTrain->save();
        // }

        for($i=0; $i < 25; $i++){
            $newTrain = new Trains();
            $newTrain-> company = $faker->company();
            $newTrain-> starting_station =  $faker->city();
            $newTrain-> arrival_station = $faker->city();
            $newTrain-> train_code_unique =  $faker->randomNumber(5);
            $newTrain-> carriages_number =  $faker->randomNumber(2);
            $newTrain-> in_time = $faker->numberBetween(0, 1);
            if ($newTrain->in_time===0) {
                $newTrain-> deleted = $faker->numberBetween(0,0);
            }else {
                $newTrain-> deleted = $faker->numberBetween(0, 1);
            }
            $newTrain->save();
        }
    }
}