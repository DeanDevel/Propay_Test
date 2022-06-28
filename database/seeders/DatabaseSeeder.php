<?php

use App\Models\User;
use App\Models\ContactUs;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('admin')
        ]);
        User::create([
            'name' => 'User',
            'email' => 'user@test.com',
            'password' => Hash::make('secret')
        ]);


        ContactUs::create([
            'name' => 'test1name',
            'surname' => 'test1surname',
            'idno' => 'test1idno',
            'phone' => '0123456789',
            'email' => 'test@one.com',
            'dob' => '11181980', 
            'language' => 'English', 
            'interests' => '["HTML","JQUERY","CSS"]',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        ContactUs::create([
            'name' => 'test2name',
            'surname' => 'test2surname',
            'idno' => 'test2idno',
            'phone' => '5678943210',
            'email' => 'test@two.com',
            'dob' => '21051965', 
            'language' => 'Afrikaans', 
            'interests' => '["CSS","HTML"]',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        


    }
}
