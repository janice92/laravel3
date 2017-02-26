<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
$user = new User();
$user->name = 'mike';
$user->email = 'mike@app.com';
$user->password = 'secret';
$user->save();

    }
}
