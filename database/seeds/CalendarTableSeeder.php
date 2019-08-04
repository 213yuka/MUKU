<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CalendarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 3) as $num) {
            DB::table('tasks')->insert([
                'evaluation' => $num,
                'date' => Carbon::now()->addDay($num),
            ]);
        }
    }
}
