@extends('layouts.app_2')

@section('content')

<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center">
                	<h2 class="mb-4">{{ $user-> name }} <br>リクエスト履歴</h2>
          		</div>
        	</div>
        
            <div class="col-md-12">   
                
                <table class="records">
                    <tbody>
                        <tr>
                            <th>日時</th>
                            <th>アクション内容</th>
                            <th>入金</th>
                            <th>チケット使用</th>
                            <th>残高</th>
                        </tr>
                    @if (count($records) > 0)
                    @foreach ($records as $record)
                        <tr>
                            <td align="left">{{ $record->created_at }}</td>
                            <td align="left">@if($record->action == 0) リクエスト送付
                                @elseif($record->action == 1)入金確認
                                @elseif($record->action == 2)チケット使用
                                @elseif($record->action == 9)キャンセル
                                @endif</td>
                            <td align="right">{{ $record->credit }}</td>
                            <td align="right">{{ $record->debit }}</td>
                            <td align="right">{{ $record->balance }}</td>
                        </tr>    
                    @endforeach
                    </tbody>
                </table>  
                @endif
            </div> 
            
            <div class="form-group">
                <span class = "col-md-3">    
                {{-- 1回チケット入金確認 --}}
                {!! Form::open(['route' => ['confirm_payment1', $user->id]]) !!}
                    {!! Form::submit('1回分チケット入金確認', ['class' => "btn btn-primary btn-block"]) !!}
                {!! Form::close() !!}
                </span>
                <span class = "col-md-3">    
                {{-- 3回チケット入金確認 --}}
                {!! Form::open(['route' => ['confirm_payment3', $user->id]]) !!}
                    {!! Form::submit('3回分チケット入金確認', ['class' => "btn btn-primary btn-block"]) !!}
                {!! Form::close() !!}
                </span>
                <span class = "col-md-3">    
                {{-- 5回チケット入金確認 --}}
                {!! Form::open(['route' => ['confirm_payment5', $user->id]]) !!}
                    {!! Form::submit('5回分チケット入金確認', ['class' => "btn btn-primary btn-block"]) !!}
                {!! Form::close() !!}
                </span>
            </div>
        </div>
</section>        
      
@endsection