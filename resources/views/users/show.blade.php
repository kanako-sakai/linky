@extends('layouts.app_2')

@section('content')

    @if(Auth::id() == $user->id)
    
    <section class="ftco-section" id="coaches-section">
        	<div class="container">
        		<div class="row justify-content-center pb-5">
                	<div class="col-md-8 heading-section text-center">
                    	<h2 class="mb-4">マイページ</h2>
              		</div>
            	</div>
            	
                <div class="col-md-12">
                    @include('users.card')
                </div>

                <div class="col-md-12">
                    @include('users.navtabs')
                </div>    
                
                <hr class ="cp_hr05" />
                
                <div class="text-center">
                    <div class="row pb-2">
                        <div class="offset-3 offset-md-9">
                        <a href="{{ route('users.edit', ['user' => $user]) }}" class="btn btn-primary">
                        <i class="fas fa-pen"></i>　プロフィールを編集</a>
                        </div>
                    </div>
                    @include('users.profile')
                </div>
            </div>
    </section>
    
    @else
    <section class="ftco-section" id="coaches-section">
        	<div class="container">
        		<div class="row justify-content-center pb-5">
                	<div class="col-md-8 heading-section text-center">
                    	<h2 class="mb-4">{{ $user->name }}</h2>
              		</div>
            	</div>
            	
                <div class="text-center">
                   @include('users.icon')
                </div>	
                
                <hr class ="cp_hr05" />
                
                <div class= "pb-5 text-center">
                        <h3>プロフィール</h3>
                
                @include('users.profile')
                        
                    <hr class ="cp_hr05" />    
            
                    <div class = "col-md-6 offset-md-3 pb-5 text-center">    
                    {{--　リクエストボタン --}}
                    @include('mentor_request.request_button')
                    </div>
                
                    <!--<div class= "col-md-6 offset-md-3 pb-5 text-center">    -->
                    <!--{{--　承認ボタン --}}-->
                    <!--@include('mentor_request.accept_button')-->
                    <!--</div>-->
                </div> 
            </div>    
        </div>
    </section>
    @endif
@endsection