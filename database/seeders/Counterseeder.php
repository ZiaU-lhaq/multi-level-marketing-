<?php


use Illuminate\Database\Seeder;
    use Maher\Counters\Facades\Counters;

    class CounterTableSeeder extends Seeder
    {
        public function run()
        {

            // create Counters
            //This will create a counter with inital value as 3, and every increment 5 will be added.
            Counter::create([
                'key' => 'number_of_visitors',
                'name' => 'Visitors',
                'initial_value' => 3,
                'step' => 5
            ]);
            //This counter will has 0 as inital_value and 1 as step
            Counter::create([
                'key' => 'number_of_visitors2',
                'name' => 'Visitors2'
            ]);

            $viewCounter = Counter::create([
                'key' => 'number_of_views',
                'name' => 'Views'
            ]);
            
            $post = Post::find(1);
            $post->addCounter('number_of_views');// to add the record to countrable table
            
            
        }
    }