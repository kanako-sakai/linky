@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center">
                	<h2 class="mb-4">開発者画面</h2>
          		</div>
        	</div>
            
            <div class="text-center mt-5">
                {{-- ユーザ一覧 --}}
                @if (count($records) > 0)
                <table class="mentee-list">
                    @foreach ($records as $record)
                    <tr>
                        <th>
                            {{-- アイコン --}}
                            @if(isset($record->sender->picture))
                            	<img src = "{{ $record->sender->picture }}" class="profile_icon">
                            @else
                            	<p class="no_icon"></p>
                            @endif
                        </th>
                        <td>
                            {!! link_to_route('users.show', $record->sender->name, ['user' => $record->sender->id]) !!}
                        </td>
                        <td>
                                {{-- 履歴ページへのリンク　--}}
                                {!! link_to_route('records', 'リクエスト履歴', ['id' => $record->sender->id], ['class' => 'btn btn-primary']) !!}
                                
                                {{-- スケジュールのページへのリンク --}}
                                {!! link_to_route('schedule_index', 'スケジュール一覧', ['id' => $record->sender->id], ['class'=> 'btn btn-secondary']) !!}
                            </div>
                        </td>    
                    </tr>
                    @endforeach
                </table>    
                @endif
            </div>    
</section>    
@endsection