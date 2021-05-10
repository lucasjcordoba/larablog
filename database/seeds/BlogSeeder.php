<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use APP\User

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(User::class, 5)-create();
}
