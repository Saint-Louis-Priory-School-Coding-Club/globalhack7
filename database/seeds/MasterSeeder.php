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
            'name' => 'Language',
        ]);

        DB::table('experiences')->insert([
            'name' => 'Computer Science',
        ]);

        DB::table('experiences')->insert([
            'name' => 'Science',
        ]);

        DB::table('experiences')->insert([
            'name' => 'Food Industry',
        ]);

        DB::table('experiences')->insert([
            'name' => 'Engineering',
        ]);

        DB::table('experiences')->insert([
            'name' => 'Manufacturing',
        ]);

        DB::table('experiences')->insert([
            'name' => 'Service Industry',
        ]);

        DB::table('experiences')->insert([
            'name' => 'Food Industry',
        ]);

        DB::table('experiences')->insert([
            'name' => 'Health Care',
        ]);

        DB::table('experiences')->insert([
            'name' => 'Business',
        ]);

        DB::table('experience_user')->insert([
            'experience_id' => 1,
            'user_id' => 1
        ]);

        DB::table('jobs')->insert([
            'name' => 'St. Louis Post-Dispatch English to Spanish Translator',
            'desc' => 'The St. Louis Post-Dispatch needs an English to Spanish translator who is 
            fluent in both languages. The translations will be used on their website. Pay is to 
            be determined.',
            'experience_id' => 1,
            'employer_id' => 1,
            'location' => '900 N Tucker Blvd, Saint Louis, MO 63101'
        ]);

        DB::table('jobs')->insert([
            'name' => 'Marian Middle School French Teacher',
            'desc' => 'Marain Middle School needs a French teacher who is 
            fluent in French and English. Experience teaching is strongly encouraged. 
            Contact the school district to become an applicant.',
            'experience_id' => 1,
            'employer_id' => 2,
            'location' => '4130 Wyoming St, St. Louis, MO 63116'
        ]);

        DB::table('jobs')->insert([
            'name' => 'Monsanto Web Developer',
            'desc' => 'Monsanto needs a web developer to renovate their website. 
            The web developer will join Monsanto\'s current team and work backend in, primarily, php.',
            'experience_id' => 2,
            'employer_id' => 3,
            'location' => '700 Chesterfield Pkwy W, Chesterfield, MO 63017'
        ]);

        DB::table('jobs')->insert([
            'name' => 'Hatchbuck Web Developer',
            'desc' => 'The startup Hatchbuck needs a front end web developer to fill the place 
            of someone who recently left. Hatchbuck needs a very talented web developer. Pay will be 
            determined after interviews.',
            'experience_id' => 2,
            'employer_id' => 4,
            'location' => '911 Washington Ave #828, St. Louis, MO 63101'
        ]);
        
        DB::table('jobs')->insert([
            'name' => 'McDonald\'s Manager',
            'desc' => 'This job pays 15.00$ an hour. 
            The McDonald\'s on Lindell Blvd needs a skilled manager
            with experience. Contact the company to schedule an 
            interview.',
            'experience_id' => 4,
            'employer_id' => 5,
            'location' => '4006 Lindell Blvd, Saint Louis, MO 63108'
        ]);

        DB::table('employers')->insert([
            'name' => 'The Saint Louis Post-Dispatch',
            'email' => 'joboppurtunities@stltoday.com'
        ]);

        DB::table('employers')->insert([
            'name' => 'Marian Middle School',
            'email' => 'mfranklin@marianmiddleschool.org'
        ]);

        DB::table('employers')->insert([
            'name' => 'Monsanto',
            'email' => 'employment@monsanto.org'
        ]);

        DB::table('employers')->insert([
            'name' => 'Hatchbuck',
            'email' => 'joboppurtunities@hatchbuck.com'
        ]);

        DB::table('employers')->insert([
            'name' => 'McDonald\'s',
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
