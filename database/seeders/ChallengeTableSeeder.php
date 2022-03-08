<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChallengeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $challenges = ['ssh','sql injection','csrf','DDOS','COOKIES','XXE'];

        foreach ($challenges as $key => $challenge) {
            
            \App\Models\Challenge::create([
                'name'        => $challenge,
                'description' => 'Lorem ipsum dolor sittem ametamngcing elit, per sed do eiusmoad teimpor sittem elit inuning ut sed',
            ]);

        }//en dof each

    }//end of run
    
}//end of class