@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center">
                	<h2 class="mb-4">あなたへの相談依頼</h2>
          		</div>
        	</div>

            <div class="col-md-10 member-list">    
            {{-- ユーザ一覧 --}}
                @if (count($requesters) > 0)
                <table class="requests_list">
                    @foreach ($requesters as $requester)
                        <tr>
                            <th>
                            {{-- アイコン --}}
                            @if(isset($requester->sender->picture))
                            	<img src = "{{ $requester->sender->picture }}" class="profile_icon">
                            @else
                            	<p class="no_icon"></p>
                            @endif
                            </th>
                            <td class="name-message">
                                {{-- ユーザ詳細ページへのリンク --}}
                                {!! link_to_route('users.show',$requester->sender->name , ['user' => $requester->sender->id]) !!} <br>
                                @if (Auth::id() != $requester->sender->id)
                                @if (Auth::user()->is_matching($requester->sender->id))
                            
                                    @elseif (Auth::user()->is_requested($requester->sender->id))
                                        {{-- メッセージの表示 --}}
                                        {!! nl2br(e($requester->message)) !!}
                            </td>
                            <td class="accept-button">
                                <div class="row">
                                    <div class = "col-md-4 text-center">     
                                    {{-- 承認のボタン --}}
                                    {!! Form::open(['route' => ['accept', $requester->sender->id], 'method' => 'put']) !!}
                                        {!! Form::submit('承認', ['class' => "btn btn-primary btn-block"]) !!}
                                    {!! Form::close() !!}
                                    </div>
                                    <div class = "col-md-4 text-center">
                                    {{-- 拒否ボタン --}}
                                    {!! Form::open(['route' => ['decline', $requester->sender->id], 'method' => 'put']) !!}
                                        {!! Form::submit('拒否', ['class' => "btn btn-danger btn-block"]) !!}
                                    {!! Form::close() !!}
                                    </div>
                            </td>
                        </tr>
                                @else
                                @endif
                            @endif
                            </td>
                        </tr>
                    @endforeach
                </table>    
                @endif
            </div>
        </div>        
</section>    
@endsection