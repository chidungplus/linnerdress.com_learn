<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class ConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('configs')->truncate();
        DB::table('configs')->insert([
            [
                'name' => 'app_name',
                'value' => 'shopmrkid.com',
            ],
            [
                'name' => 'app_url',
                'value' => 'https://shopmrkid.com',
            ],
            [
                'name' => 'mail',
                'value' => 'https://shopmrkid.com',
            ],
            [
                'name' => 'phone',
                'value' => 'https://shopmrkid.com',
            ],
            [
                'name' => 'fb_page_id',
                'value' => 'https://shopmrkid.com',
            ],
            [
                'name' => 'boss_charge_card_url',
                'value' => 'https://card.chidungplus.com/api/thecao',
            ],
            [
                'name' => 'gg_analytic',
                'value' => '123',
            ],
            [
                'name' => 'gg_ads',
                'value' => '123',
            ],
            [
                'name' => 'gg_ads_card',
                'value' => '123',
            ],
        ]);
    }
}
