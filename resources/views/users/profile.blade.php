@if($profile->exists())

<div class="row pb-2">
    <h4>プロフィール</h4>
    {{-- メッセージ編集ページへのリンク --}}
    {!! link_to_route('users.edit', '編集', ['user' => $user], ['class' => 'btn btn-primary']) !!}
</div>

    <table>
        <tbody>
            <tr>
                <td>【最終学歴】</td>
                <td class="text-left">{{ $profile->education }}</td>
            </tr>
            <tr>
                <td>【社会人歴】</td>
                <td class="text-left">{{ $profile->working_years }}</td>
            </tr>
          
            <tr>
                <td>【勤務先】</td>
                <td class="text-left">{{ $profile->employee }}</td>
            </tr>
            
            <tr>
                <td>【業種】</td>
                <td class="text-left">{{ $industry }}</td>
            </tr>
            <tr>
                <td>【職種】</td>
                <td class="text-left">{{ $job_category }}</td>
            </tr>
            <tr>
                <td>【海外経験】</td>
                <td class="text-left">
                    @if ($profile->expat == 0)<p></p>
                    @else
                        <p>海外駐在・トレーニー</p>
                    @endif    
                    @if ($profile->mba == 0)
                        <p></p>
                    @else
                        <p>MBA留学</p>
                    @endif
                    @if ($profile->other_study_abroad == 0)
                        <p></p>
                    @else
                        <p>その他海外留学</p>
                    @endif
                    @if ($profile->returnee == 0)
                        <p></p>
                    @else
                        <p>帰国子女</p>
                    @endif
                </td>
            </tr>
            <tr>
                <td>【転職経験】</td>
                <td class="text-left">
                    @if ($profile->career_change == 0)
                        <p>なし</p>
                    @else
                        <p>あり</p>
                    @endif
                </td>
            </tr>
            <tr>
                <td>【既婚／未婚】</td>
                <td class="text-left">
                    @if ($profile->marriage_status == 0)
                        <p>既婚</p>
                    @else
                        <p>未婚</p>
                    @endif
                </td>
            </tr>
            <tr>
                <td>【子供の有無】</td>
                <td class="text-left">
                    @if ($profile->child_status == 0)
                        <p>なし</p>
                    @else
                        <p>あり</p>
                    @endif
                </td>
            </tr>
            <tr>
                <td>【自己紹介】</td>
                <td class="text-left"> {{$profile->intro}}
                </td>
            </tr>
        </tbody>
    </table>
    
    {{-- 退会フォームへのリンク --}}
    <p>退会されたい方は{!! link_to_route('cancel_form', 'こちら', ['id' => $user->id]) !!}</p>
@endif