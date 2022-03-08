<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks1 = ['100','200','300','400','500','600'];

        foreach ($tasks1 as $key => $task) {
            
            \App\Models\Task::create([
                'level'         => 'متوسط',
                'point'         => $task,
                'description'   => 'all tasks XSS',
                'challenges_id' => 1,
            ]);

        }//en dof each

        $tasks2 = ['100','200','300','400','500','600'];

        foreach ($tasks2 as $key => $task) {
            
            \App\Models\Task::create([
                'level'         => 'متوسط',
                'point'         => $task,
                'description'   => 'SQL injecthon',
                'challenges_id' => 2,
            ]);

        }//en dof each

        $tasks3 = ['100','200','300','400','500','600'];

        foreach ($tasks3 as $key => $task) {
            
            \App\Models\Task::create([
                'level'         => 'متوسط',
                'point'         => $task,
                'description'   => 'CSRF',
                'challenges_id' => 3,
            ]);

        }//en dof each

    }//end of run
    
}//end of class