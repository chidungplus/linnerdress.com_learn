<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Schema::disableForeignKeyConstraints();
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'name' => 'Váy dạ hội dài',
                'permalink' => 'vay-da-hoi-dai'
            ],
            [
                'name' => 'Váy dạ hội đuôi cá',
                'permalink' => 'vay-da-hoi-duoi-ca'
            ],
            [
                'name' => 'Váy dạ hội ngắn',
                'permalink' => 'vay-da-hoi-ngan'
            ],
            [
                'name' => 'Váy dạ hội mullet',
                'permalink' => 'vay-da-hoi-mullet'
            ],
        ]);
    }
}
