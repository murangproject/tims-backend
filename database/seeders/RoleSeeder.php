<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert(['name' => 'Dean', 'type'=>'admin']);
        DB::table('roles')->insert(['name' => 'Department Head','type'=> 'committee chair']);
        DB::table('roles')->insert(['name' => 'Faculty', 'type'=>'committee member']);
        DB::table('roles')->insert(['name' => 'Industry Partners', 'type' => 'Stakeholder']);
    }
}
