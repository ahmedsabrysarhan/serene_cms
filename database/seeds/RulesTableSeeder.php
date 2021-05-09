<?php

use Illuminate\Database\Seeder;
use App\Rule;

class RulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['owner' , 'admin'];
        foreach($names as $name){
            $rule = new Rule;
            $rule->name = $name;
            $rule->save();
        };
    }
}
