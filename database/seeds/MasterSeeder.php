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
            'name' => 'Experience 1',
        ]);

        DB::table('experience_user')->insert([
            'experience_id' => 1,
            'user_id' => 1
        ]);

        DB::table('jobs')->insert([
            'name' => 'job name',
            'desc' => 'job desc',
            'experience_id' => 1,
            'employer_id' => 1,
            'location' => '350 E. Glen Creek St. Natick, MA 01760'
        ]);

        DB::table('jobs')->insert([
            'name' => 'job name2',
            'desc' => 'job desc2',
            'experience_id' => 1,
            'employer_id' => 1,
            'location' => '350 E. Glen Creek St. Natick, MA 01760'
        ]);

        DB::table('employers')->insert([
            'name' => 'Employer 1',
            'email' => 'emp@test.c'
        ]);

        DB::table('job_user')->insert([
            'job_id' => 1,
            'user_id' => 1
        ]);

        DB::table('job_user')->insert([
            'job_id' => 2,
            'user_id' => 1
        ]);

        //DB::table('experience_user')->insert([
            //'experience_id' => 1,
            //'user_id' => 1
        //]);
    }
}
