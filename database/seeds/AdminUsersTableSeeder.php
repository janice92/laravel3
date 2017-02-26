<?php

use Illuminate\Database\Seeder;
use App\AdminUser;

class AdminUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
$user = new AdminUser();
$user->name = 'admin';
$user->email = 'admin@app.com';
$user->password = 'admin';
$user->save();


    }
}
