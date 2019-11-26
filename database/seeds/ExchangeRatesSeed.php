<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExchangeRatesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exchange_rates')->insert([
            'to' => 'BR',
            'from' => 'USD',
            'value' => '0.24',
            'user_id' => 1,
            'created_at' => \Illuminate\Support\Facades\Date::now(),
            'updated_at' => \Illuminate\Support\Facades\Date::now()
        ]);
        DB::table('exchange_rates')->insert([
            'to' => 'USD',
            'from' => 'BR',
            'value' => '4.24',
            'user_id' => 1,
            'created_at' => \Illuminate\Support\Facades\Date::now(),
            'updated_at' => \Illuminate\Support\Facades\Date::now()
        ]);
        DB::table('exchange_rates')->insert([
            'to' => 'EUR',
            'from' => 'USD',
            'value' => '1.10',
            'user_id' => 1,
            'created_at' => \Illuminate\Support\Facades\Date::now(),
            'updated_at' => \Illuminate\Support\Facades\Date::now()
        ]);
        DB::table('exchange_rates')->insert([
            'to' => 'USD',
            'from' => 'EUR',
            'value' => '0.94',
            'user_id' => 1,
            'created_at' => \Illuminate\Support\Facades\Date::now(),
            'updated_at' => \Illuminate\Support\Facades\Date::now()
        ]);
        DB::table('exchange_rates')->insert([
            'to' => 'BTC',
            'from' => 'BRL',
            'value' => '29969.47',
            'user_id' => 1,
            'created_at' => \Illuminate\Support\Facades\Date::now(),
            'updated_at' => \Illuminate\Support\Facades\Date::now()
        ]);
            DB::table('exchange_rates')->insert([
                'to' => 'BR',
                'from' => 'BTC',
                'value' => '0.000033',
                'user_id' => 1,
            'created_at' => \Illuminate\Support\Facades\Date::now(),
            'updated_at' => \Illuminate\Support\Facades\Date::now()
        ]);
        DB::table('exchange_rates')->insert([
            'to' => 'ETH',
            'from' => 'USD',
            'value' => '144.78',
            'user_id' => 1,
            'created_at' => \Illuminate\Support\Facades\Date::now(),
            'updated_at' => \Illuminate\Support\Facades\Date::now()
        ]);
        DB::table('exchange_rates')->insert([
            'to' => 'USD',
            'from' => 'ETH',
            'value' => '0.0069',
            'user_id' => 1,
            'created_at' => \Illuminate\Support\Facades\Date::now(),
            'updated_at' => \Illuminate\Support\Facades\Date::now()
        ]);
    }
}
