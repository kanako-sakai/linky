<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Profile;
use App\Industry;
use App\JobCategory;

class SearchController extends Controller
{
    public function index(Request $request){
        $query = Profile::query();
        
        //$request->input()で検索時に入力した項目を取得
        $search1=$request->input('industry_id');
        $search2=$request->input('job_category_id');
        $search3=$request->input('expat');
        $search4=$request->input('mba');
        $search5=$request->input('other_study_abroad');
        $search6=$request->input('returnee');
        $search7=$request->input('career_change');
        $search8=$request->input('marriage_status');
        $search9=$request->input('child_status');
        
        if(!empty($search1)){
            $query->where('industry_id','$serarch1')->get();
        }
        
        if(!empty($search2)){
            $query->where('job_category_id','$serarch2')->get();
        }
        
        if(!empty($search3)){
            $query->where('expat','$serarch3')->get();
        }
        
        if(!empty($search4)){
            $query->where('mba','$serarch4')->get();
        }
        
        if(!empty($search5)){
            $query->where('other_study_abroad','$serarch5')->get();
        }
        
        if(!empty($search6)){
            $query->where('returnee','$serarch6')->get();
        }
        
        if(!empty($search7)){
            $query->where('career_change','$serarch7')->get();
        }
        
        if(!empty($search8)){
            $query->where('marriage_status','$serarch8')->get();
        }
        
        if(!empty($search9)){
            $query->where('child_status','$serarch9')->get();
        }
        
        //ユーザーを1ページにつき20人ずつ表示させる
        $data = $query->paginate(20);
        
        $industries = Industry::all()->pluck('name', 'id');
        $job_categories = JobCategory::all()->pluck('name', 'id');
        
        return view('search.index',[
            'data' => $data,
            'industries' => $industries, 
            'job_categories' => $job_categories,
        ]);
    }
}
