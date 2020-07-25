<?php

use Illuminate\Database\Seeder;

class CancelReasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cancel_reasons')->insert([
            'name'=>'自分のキャリアに近い相談相手(オフィシャルメンター以外)を見つけられなかった'
        ]);
        
        DB::table('cancel_reasons')->insert([
            'name'=>'自分とは違うキャリアの人に相談したかったが、いい相談相手(オフィシャルメンター以外)が見つからなかった'
        ]);
        
        DB::table('cancel_reasons')->insert([
            'name'=>'相談相手(オフィシャルメンター以外)のやる気を感じられなかった'
        ]);
        
        DB::table('cancel_reasons')->insert([
            'name'=>'相談相手(オフィシャルメンター以外)とのやり取りで不愉快を感じることがあった'
        ]);
        
        DB::table('cancel_reasons')->insert([
            'name'=>'オフィシャルメンターで話したいと思うキャリアを持つ人がいなかった'
        ]);
        
        DB::table('cancel_reasons')->insert([
            'name'=>'オフィシャルメンターと話したが、メンターとの業種・職種が違いすぎて有益ではなかった'
        ]);
        
        DB::table('cancel_reasons')->insert([
            'name'=>'オフィシャルメンターと話したが、業種・職種以外の面での相性が悪かった'
        ]);
        
        DB::table('cancel_reasons')->insert([
            'name'=>'オフィシャルメンターのやる気を感じられなかった'
        ]);
        
        DB::table('cancel_reasons')->insert([
            'name'=>'オフィシャルメンターとのやり取りで不愉快を感じることがあった'
        ]);
        
        DB::table('cancel_reasons')->insert([
            'name'=>'オフィシャルメンターの年齢が自分と近すぎた'
        ]);
    }
}
