<?php

use Illuminate\Database\Seeder;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test@test.c',
            'password' => bcrypt('test'),
            'lang' => 'en'
        ]);

        DB::table('experiences')->insert([
            'name' => 'Food Industry',
        ]);

        DB::table('experience_user')->insert([
            'experience_id' => 1,
            'user_id' => 1
        ]);

        DB::table('jobs')->insert([
            'name' => 'McDonald\'s Sales Associate',
            'desc' => 'This job pays 9.00$ an hour. You will recieve orders from 
            customers and fulfill transactions. Contact the manager to schedule an 
            interview.',
            'experience_id' => 1,
            'employer_id' => 1,
            'location' => '4006 Lindell Blvd, Saint Louis, MO 63108'
        ]);

        DB::table('jobs')->insert([
            'name' => 'Steak \'n Shake Cook',
            'desc' => 'This job pay 11.00$ an hour. You will prepare and package the 
            customers\' orders. Contact the manager to schedule an interview.',
            'experience_id' => 1,
            'employer_id' => 2,
            'location' => '1253 Hampton Ave, Saint Louis, MO 63139'
        ]);

        DB::table('employers')->insert([
            'name' => 'McDonald\'s',
            'email' => 'joboppurtunities@mcdonaldslindell.com'
        ]);

        DB::table('employers')->insert([
            'name' => 'Steak \'n Shake',
            'email' => 'joboppurtunities@mcdonaldslindell.com'
        ]);

        DB::table('job_user')->insert([
            'job_id' => 1,
            'user_id' => 1
        ]);


        //DB::table('experience_user')->insert([
            //'experience_id' => 1,
            //'user_id' => 1
        //]);
    }
}
