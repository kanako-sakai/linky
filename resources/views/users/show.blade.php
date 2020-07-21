@extends('layouts.app_2')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            @include('users.card')
            @include('users.profile')

        </aside>
        
        <div class="col-sm-8">
            @include('users.navtabs')
            
        <div class="row">    
            {{--　リクエストボタン --}}
            @include('mentor_request.request_button')
        </div>
        
        <div class="row">    
            {{--　承認ボタン --}}
            @include('mentor_request.accept_button')
        </div>
        
@endsection