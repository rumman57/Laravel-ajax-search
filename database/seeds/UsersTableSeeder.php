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
        User::create(array('name'=>'Rumman'));
        User::create(array('name'=>'Nishi'));
        User::create(array('name'=>'Rupa'));
        User::create(array('name'=>'Shanta'));
        User::create(array('name'=>'Puja'));
        User::create(array('name'=>'Mim'));
        User::create(array('name'=>'Sumi'));
        User::create(array('name'=>'Shan'));
        User::create(array('name'=>'Rafiz'));
    }
}
