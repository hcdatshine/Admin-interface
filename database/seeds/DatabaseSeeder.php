<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('MonanUpdate');
    }
}
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name'=>'datvu','email'=>'datvuquocbk@gmail.com','quyen'=>'1','password'=>bcrypt('12345678')], 
            ['name'=>'Dat Shine','email'=>'hc.datshine@gmail.com','quyen'=>'0','password'=>bcrypt('12345678')],
			['name'=>'laravel','email'=>str_random(3).'@gmail.com','quyen'=>'0','password'=>bcrypt('matkhau')],
			['name'=>'php','email'=>str_random(3).'@gmail.com','quyen'=>'0','password'=>bcrypt('matkhau')],

        ]);
    }
}
class UserUpdate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name'=>'datvu','email'=>str_random(3).'@gmail.com','password'=>bcrypt('12345678')], 
            ['name'=>'Dat Shine','email'=>'hc.datshine@gmail.com','password'=>bcrypt('12345678')],
        ]);

    }
}

/**
 * 
 */
class MonanUpdate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('monans')->insert([
            ['nameMonAn'=>'Tzatsiki','price'=>3.99,'reviewMonAn'=>'Refreshing traditional cucumber and garlic yoghurt dip.'], 
            ['nameMonAn'=>'Aubergine_Salad','price'=>5.50,'reviewMonAn'=>'Pureed eggplant, garlic, green pepper and tomato dip.'], 
            ['nameMonAn'=>'Haloumi','price'=>3.99,'reviewMonAn'=>'Refreshing traditional cucumber and garlic yoghurt dip.'], 
            ['nameMonAn'=>'Spinach_Pie','price'=>5.50,'reviewMonAn'=>'Pureed eggplant, garlic, green pepper and tomato dip.'],
        ]);
    }
}