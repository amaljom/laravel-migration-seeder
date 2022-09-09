<?php

use Illuminate\Database\Seeder;
use App\train;


class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains=[
            [
                "company"=>"Italo",
                "departure_station"=>"Termini",
                "arrival_station"=>"Bologna Centrale",
                "departure_time"=>"2010-02-06 19:30:13",
                "arrival_time"=>"2010-02-06 19:30:13",
                "train_code"=>"ARKMSA",
                "carriage_number"=>"12",
                "in_time"=>"1",
                "cancelled"=>"0",
            ],
            [
                "company"=>"Freccia Rossa",
                "departure_station"=>"Napoli Centrale",
                "arrival_station"=>"Termini",
                "departure_time"=>"2010-02-06 19:30:13",
                "arrival_time"=>"2010-02-06 19:30:13",
                "train_code"=>"ARKMVA",
                "carriage_number"=>"10",
                "in_time"=>"0",
                "cancelled"=>"0",
            ],
            [
                "company"=>"Italo",
                "departure_station"=>"Milano",
                "arrival_station"=>"Torino",
                "departure_time"=>"2010-02-06 19:30:13",
                "arrival_time"=>"2010-02-06 19:30:13",
                "train_code"=>"BBAKMSA",
                "carriage_number"=>"8",
                "in_time"=>"0",
                "cancelled"=>"1",
            ]
        ];

        foreach($trains as $train){
            $newTrain= new train();
            $newTrain->company = $train['company'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->carriage_number = $train['carriage_number'];
            $newTrain->in_time = $train['in_time'];
            $newTrain->cancelled = $train['cancelled'];
            $newTrain->save();
        }
    }
}
