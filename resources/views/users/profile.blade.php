@if($profile->exists())

<div class="col-md-12">
    <table class="profile table-bordered">
        <tbody>
            <tr>
                <th class="text-left"><i class="fas fa-university fa-lg"></i> 最終学歴</th>
                <td class="text-left">{{ $profile->education }}</td>
            </tr>
            <tr>
                <th class="text-left"><i class="fas fa-briefcase fa-lg"></i> 社会人歴</th>
                <td class="text-left">{{ $profile->working_years }}　年目</td>
            </tr>
        
            <tr>
                <th class="text-left"><i class="fas fa-building fa-lg"></i> 勤務先</th>
                <td class="text-left">{{ $profile->employee }} 
                
                @if($profile->employer_display==1)
                <span style="color: #808080"><i class="fas fa-lock"></i> 自分のみ</span>
                @else
                <span style="color: #808080"><i class="fas fa-globe-americas"></i> 公開</span>
                @endif
                </td>
            </tr>
            <tr>
                <th class="text-left"><i class="fas fa-certificate fa-lg"></i> 業種</th>
                <td class="text-left">{{ $industry }}</td>
            </tr>
            <tr>
                <th class="text-left"><i class="fas fa-bullseye fa-lg"></i> 職種</th>
                <td class="text-left">{{ $job_category }}</td>
            </tr>
            <tr>
                <th class="text-left"><i class="fas fa-plane fa-lg"></i> 海外経験</th>
                <td class="text-left">
                    @if ($profile->expat == 1)
                        <span class=oversea>海外駐在・トレーニー</span>
                    @endif    
                    @if ($profile->mba == 1)
                        <span class=oversea>MBA留学</span>
                    @endif
                    @if ($profile->other_study_abroad == 1)
                        <span class=oversea>その他海外留学</span>
                    @endif
                    @if ($profile->returnee == 1)
                        <span class=oversea>帰国子女</span>
                    @endif
                </td>
            </tr>
            <tr>
                <th class="text-left"><i class="fas fa-exchange-alt fa-lg"></i> 転職経験</th>
                <td class="text-left">@if ($profile->career_change == 0) なし
                                        @else あり
                                        @endif
                </td>
            </tr>
            <tr>
                <th class="text-left"><i class="fas fa-heart fa-lg"></i> 結婚</th>
                <td class="text-left">
                    @if ($profile->marriage_status == 0)
                        未婚
                    @else
                        既婚
                    @endif
                </td>
            </tr>
            <tr>
                <th class="text-left"><i class="fas fa-baby fa-lg"></i>子供の有無</th>
                <td class="text-left">
                    @if ($profile->child_status == 0)
                        なし
                    @else
                        あり
                    @endif
                </td>
            </tr>
            @if($user->role != 0)
            <tr>
                <th class="text-left">1ヵ月に相談に乗れる回数</th>
                <td class="text-left">@if(!empty($user->limit)) {{ $user->limit }} @else '0' @endif 回</td>
            </tr>
            <tr>
                <th class="text-left">Zoomのリンク</th>
                <td class="text-left">@if(!empty($user->zoom)) {{ $user->zoom }} @else '' @endif</td>
            </tr>
            @endif
            <tr>
                <th class="text-left" valign="top"><i class="fas fa-bullhorn fa-lg"></i> 自己紹介</th>
                <td class="text-left"> {!! nl2br(e($profile->intro)) !!}
                </td>
            </tr>
        </tbody>
    </table>
</div>    
    
@endif