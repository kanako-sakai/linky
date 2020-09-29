@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center">
                	<h2 class="mb-4">公式メンターとの相談</h2>
          		</div>
        	</div>
            
            <ul class="list-group list-group-horizontal">
    
                {{--　履歴一覧タブ --}}
                <li class="list-group-item">
                    <a href="{{ route('official_status', ['id' => $user->id]) }}" class="nav-link mypage-link {{ Request::routeIs('official_status') ? 'active' : '' }}">
                        <span class="nav_title">履歴・スケジュール</span>
                    </a>
                </li>
                {{-- メッセージ一覧タブ --}}
                <li class="list-group-item">
                    <a href="{{ route('show_mentors', ['id' => $user->id]) }}" class="nav-link mypage-link {{ Request::routeIs('show_mentors') ? 'active' : '' }}">
                        <span class="nav_title">メッセージ</span>
                    </a>
                </li>
            </ul>
            
            <div class="col-md-12 mt-5">  
            <h5 class="title_border_left">スケジュール</h5>
            <p>※振替される場合は、遅くとも7日前までにrolemy.info@gmail.comまでメールをお送りください。日程変更のご要望は、各メンタリング日に対して１回までとさせていただきます。7日前を過ぎますと振替できませんのでご注意ください。</p>
                <table class="records table-bordered">
                    <tbody>
                        <tr>
                            <th>日時</th>
                            <th>メンター</th>
                            <th>リンク</th>
                            <th>ステータス</th>
                        </tr>
                        @if(count($meetings) > 0)  
                            @foreach($meetings as $meeting)
                        <tr>
                            <td>{{ $meeting->dates }} {{ $meeting->times }}</td>
                            <td>{{ $meeting->mentor->name }}</td>
                            <td>{{ $meeting->zoom_link }}</td>
                            <td>@if($meeting->conducted == 1) 実施済み
                                @else 未実施
                                @endif</td>
                        </tr> 
                        @endforeach
                        @endif
                    </tbody>
                </table>  
            </div>
           
            <div class="col-md-12">
    　       　<h5 class="title_border_left">履歴</h5>
               <table class="records table-bordered">
                    <tbody>
                        <tr>
                            <th>日時</th>
                            <th>内容</th>
                            <th>購入数</th>
                            <th>チケット使用</th>
                            <th>残高</th>
                        </tr>
                        @if (count($records) > 0)
                        @foreach ($records as $record)
                        <tr>
                            <td align="left">{{ $record->updated_at }}</td>
                            <td align="left">@if($record->action == 0) リクエスト送付
                                @elseif($record->action == 1) 入金確認
                                @elseif($record->action == 2) 実施
                                @endif
                            </td>
                            <td align="right">{{ $record->credit }}</td>
                            <td align="right">{{ $record->debit }}</td>
                            <td align="right">{{ $record->balance }}</td>
                        </tr>    
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            
            <div class="text-center">    
                {!! link_to_route('official_mentors', 'リクエストを出す', [], ['class' => 'btn btn-primary']) !!}</a>
            
            @if(empty($latest_record))
            
            @elseif($latest_record->balance > 0)
                {!! link_to_route('official.form', 'リクエスト', ['id' => Auth::id()], ['class' => 'btn btn-secondary']) !!}</a>
            @endif
        </div>
</section>
@endsection