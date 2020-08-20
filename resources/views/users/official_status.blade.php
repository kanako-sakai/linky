@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center">
                	<h2 class="mb-4">公式メンターとの相談</h2>
          		</div>
        	</div>
            
            <div class="col-md-12">  
            <h5 class="title_border_left">スケジュール</h5>
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
            
            @if (count($records) > 0)
            <div class="text-center">    
                {!! link_to_route('official.payment', '追加購入する', ['id' => Auth::id()], ['class' => 'btn btn-primary']) !!}</a>
            @else
                {!! link_to_route('official.payment', 'チケットを購入する', ['id' => Auth::id()], ['class' => 'btn btn-primary']) !!}</a>
            @endif
            
            @if($latest_record->balance > 0)
                {!! link_to_route('official.form', 'リクエスト', ['id' => Auth::id()], ['class' => 'btn btn-secondary']) !!}</a>
            </div>
            @endif
        </div>
</section>
@endsection