<?php

    use Illuminate\Database\Seeder;

    class AttributeGroupsSeeder extends Seeder
    {
        public function run()
        {
            $data = [
                [
                    'id' => '1',
                    'title' => 'Механизм',
                ],
                [
                    'id' => '2',
                    'title' => 'Стекло',
                ],
                [
                    'id' => '3',
                    'title' => 'Ремешок',
                ],
                [
                    'id' => '4',
                    'title' => 'Корпус',
                ],
                [
                    'id' => '5',
                    'title' => 'Индикация',
                ],
            ];
            DB::table('attribute_groups')->insert($data);
        }
    }
