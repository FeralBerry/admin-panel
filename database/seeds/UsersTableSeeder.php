<?php

    use Illuminate\Database\Seeder;
    use Illuminate\Support\Str;

    class UsersTableSeeder extends Seeder
    {
        public function run()
        {
            $data = [
                [
                    'id' => 1,
                    'name' => 'admin',
                    'email' => 'a@a.ru',
                    'password' => bcrypt(12345678),
                ],
                [
                    'id' => 2,
                    'name' => 'user',
                    'email' => 'u@u.ru',
                    'password' => bcrypt(12345678),
                ],
                [
                    'id' => 3,
                    'name' => 'sasha',
                    'email' => 's@s.ru',
                    'password' => bcrypt(12345678),
                ],
                [
                    'id' => 4,
                    'name' => 'masha',
                    'email' => 'm@m.ru',
                    'password' => bcrypt(12345678),
                ],
                [
                    'id' => 5,
                    'name' => 'pasha',
                    'email' => 'p@p.ru',
                    'password' => bcrypt(12345678),
                ],
            ];
            DB::table('users')->insert($data);
        }

    }
