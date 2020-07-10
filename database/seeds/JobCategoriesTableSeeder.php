<?php

use Illuminate\Database\Seeder;

class JobCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_categories')->insert([
            'name'=>'営業'
        ]);
        DB::table('job_categories')->insert([
            'name'=>'経営企画・事業統括・新規事業開発'
        ]);
        DB::table('job_categories')->insert([
            'name'=>'マーケティング・商品企画・営業企画'
        ]);
        DB::table('job_categories')->insert([
            'name'=>'人事'
        ]);
        DB::table('job_categories')->insert([
            'name'=>'宣伝・広報'
        ]);
        DB::table('job_categories')->insert([
            'name'=>'経理・財務・会計'
        ]);
        DB::table('job_categories')->insert([
            'name'=>'物流・資材購買・貿易'
        ]);
        DB::table('job_categories')->insert([
            'name'=>'ITエンジニア'
        ]);
        DB::table('job_categories')->insert([
            'name'=>'エンジニア(機械・電気・電子・半導体・制御)'
        ]);
        DB::table('job_categories')->insert([
            'name'=>'デザイナー'
        ]);
        DB::table('job_categories')->insert([
            'name'=>'コンサルタント・シンクタンク'
        ]);
        DB::table('job_categories')->insert([
            'name'=>'総合職'
        ]);
        DB::table('job_categories')->insert([
            'name'=>'一般事務'
        ]);
        DB::table('job_categories')->insert([
            'name'=>'技術・研究'
        ]);
        DB::table('job_categories')->insert([
            'name'=>'教師・講師'
        ]);
        DB::table('job_categories')->insert([
            'name'=>'公務員・国際公務員'
        ]);
        DB::table('job_categories')->insert([
            'name'=>'社長・役員'
        ]);
        DB::table('job_categories')->insert([
            'name'=>'法務従事者'
        ]);
        DB::table('job_categories')->insert([
            'name'=>'医療従事者'
        ]);
        DB::table('job_categories')->insert([
            'name'=>'投資・アナリスト'
        ]);
        DB::table('job_categories')->insert([
            'name'=>'その他'
        ]);
    }
}
