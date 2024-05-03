<?php
    namespace App\Models;

    use \Illuminate\Support\Arr;
class Jobs{
        public static function all():array{
            return [
                [
                    'id' => '1',
                    'title' => 'Director',
                    'salary' => '50.000',
                ],
                [
                    'id'=> '2',
                    'title' => 'Intern',
                    'salary' => '500',
                ],
                [
                    'id' => '3',
                    'title' => 'Heir',
                    'salary' => '10.000.000.000',
                ],
            
            ];
        }

        public static function find(int $id):array{
            $job = Arr::first( static::all(), fn($job) => $job['id'] == $id);

            if( !$job ) return abort(404);

            return $job;
        }
    }