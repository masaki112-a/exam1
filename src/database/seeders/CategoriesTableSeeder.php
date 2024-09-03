<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $param = [
      'content' => '商品のお届けについて',
    ];
        $param = [
      'content' => '商品の交換について',
    ];
        $param = [
      'content' => '商品トラブル',
    ];
        $param = [
      'content' => 'ショップへのお問い合わせ',
    ];
        $param = [
      'content' => 'その他',
    ];
    DB::table('categories')->insert($param);
    }
}
