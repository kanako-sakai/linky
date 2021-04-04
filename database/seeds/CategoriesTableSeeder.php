<?php

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
        DB::table('categories')->insert([
            'name'=>'質問'
        ]);
        DB::table('categories')->insert([
            'name'=>'オフィスアワー'
        ]);
        DB::table('categories')->insert([
            'name'=>'キャリア構築'
        ]);
        DB::table('categories')->insert([
            'name'=>'転職'
        ]);
        DB::table('categories')->insert([
            'name'=>'家族・結婚・育児'
        ]);
        DB::table('categories')->insert([
            'name'=>'留学'
        ]);
        DB::table('categories')->insert([
            'name'=>'海外駐在・トレーニー'
        ]);
        DB::table('categories')->insert([
            'name'=>'若手のキャリア'
        ]);
        DB::table('categories')->insert([
            'name'=>'新卒就活'
        ]);
        DB::table('categories')->insert([
            'name'=>'給与'
        ]);
        DB::table('categories')->insert([
            'name'=>'ダイバーシティー&インクルージョン'
        ]);
        DB::table('categories')->insert([
            'name'=>'イベント'
        ]);
        
        DB::table('categories')->insert([
            'name'=>'起業'
        ]);
        DB::table('categories')->insert([
            'name'=>'ライフスタイル'
        ]);
        
        DB::table('categories')->insert([
            'name'=>'インタビュー'
        ]);
        
        DB::table('categories')->insert([
            'name'=>'その他'
        ]);
        
    }
}
