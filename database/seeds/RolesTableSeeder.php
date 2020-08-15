<?php

    use Illuminate\Database\Seeder;

    class RolesTableSeeder extends Seeder
    {
        public function run()
        {
            $data = [
                ['name' => 'admin',],
                ['name' => 'user',],
                ['name' => 'customer',],
                ['name' => 'student',],
                ['name' => 'teacher',],
            ];
            DB::table('roles')->insert($data);
        }
    }
