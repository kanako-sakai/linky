@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
                <div class="col-md-8 heading-section text-center ftco-animate">
                    <h2 class="mb-4">オフィシャルメンター相談リクエスト</h2>
                </div>
            </div>
            
            {!! Form::open(['route' => ['official.confirm', $user->id]]) !!}
            
            
                {!! Form::hidden('plan', '1') !!}
            
            <div class="form-group">
                {!! Form::label('mentor_id', 'ご希望のメンター：') !!} {{ $mentor->name }}
                {!! Form::hidden('mentor_id', $mentor->id) !!}
            </div>
      
           
            <div class="form-group">
                {!! Form::label('name', 'お名前') !!}
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $user->name }}">
                    <div class="invalid-feedback">
                    @if($errors->has('name'))
                        @foreach($errors->get('name') as $message)
                        {{ $message }}
                        @endforeach    
                    @endif 
                    </div>
            </div>
            
            <div class="form-group">
                {!! Form::label('email', 'ご連絡先(メールアドレス)') !!}
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                     <div class="invalid-feedback">
                    @if($errors->has('email'))
                        @foreach($errors->get('email') as $message)
                        {{ $message }}
                        @endforeach    
                    @endif 
                    </div>
            </div>

            
            <div class="form-group">
                {!! Form::label('goal', 'メンタリングの目的') !!}
                <input type="text" name="goal" class="form-control @error('goal') is-invalid @enderror" value="{{ old('goal') }}">
                     <div class="invalid-feedback">
                    @if($errors->has('goal'))
                        @foreach($errors->get('goal') as $message)
                        {{ $message }}
                        @endforeach    
                    @endif 
                    </div>
            </div>
            
            <div class="form-group">
                {!! Form::label('questions', 'お話しされたい内容') !!}
                <textarea class="form-control @error('questions') is-invalid @enderror" name="questions" cols="50" rows="10">{{ old('questions') }}</textarea>
                <div class="invalid-feedback">
                @if($errors->has('questions'))
                    @foreach($errors->get('questions') as $message)
                    {{ $message }}
                    @endforeach    
                @endif 
                </div>
            </div>
            
            <div class="form-group">
                {!! Form::label('dates', 'ご希望日時　（時間調整がしやすいよう、1日少なくとも3時間以上可能な時間をご提示ください。）') !!}
                <textarea class="form-control @error('dates') is-invalid @enderror" name="dates" cols="50" rows="10" placeholder="【第一希望】〇月〇日　〇〇時～〇〇時 &#13;&#10;【第二希望】〇月〇日　〇〇時～〇〇時　&#13;&#10;【第三希望】〇月〇日　〇〇時～〇〇時　&#13;&#10;【第四希望】〇月〇日　〇〇時～〇〇時　&#13;&#10;【第五希望】〇月〇日　〇〇時～〇〇時">{{ old('dates') }}</textarea>
                <div class="invalid-feedback">
                @if($errors->has('dates'))
                    @foreach($errors->get('dates') as $message)
                    {{ $message }}
                    @endforeach    
                @endif 
                </div>
            </div>
            
            <div class="form-group">
                <input class="accept-checkbox @error('precaution') is-invalid @enderror" name="precaution" type="checkbox" value="1" id="precaution">
                <label for="precaution">以下の注意事項に同意する。</label>
                <div class="invalid-feedback">
                    @if($errors->has('precaution'))
                        @foreach($errors->get('precaution') as $message)
                        {{ $message }}
                        @endforeach    
                    @endif 
                </div>
                
                <div class="card precaution">
                    <div class="card-body">
                	<p>・本サービスは、様々な経験・知識を有する先輩社会人（メンター）をご紹介し、同人が利用者（メンティー）との双方向の対話を通じて、利用者（メンティー）のキャリア形成上の悩みの解消をサポートするものです。</p>
                    <p>・本サービスにおいて援助・支援の対象となるのはキャリア形成上の課題や悩みであり、個別の医療相談(疾患や障害等に関わる相談)や法律相談は対象外となります。</p>
                    <p>・メンターの助言は一個人の見解であり、利用者の悩みの解消を保証するものではありません。</p>
                    <p>・ご入金後のキャンセル、返金は、別途規定した場合を除いて、応じられません。</p>
                    <p>・メンタリング日決定後の日程変更は必ず７日前までにメンターに直接ご連絡ください。日程変更のご要望は、各メンタリング日に対して１回までとさせていただきます。７日前までのご連絡がない場合や２回以上の日程変更のご要望には応じられませんし、ご返金させていただくことはできませんので、ご注意ください。</p>
                    <p>・当日は15分以上遅刻されますと、キャンセル扱いとなり、返金には応じられません。</p>
                    <p>・メンタリング日決定後、メンターの都合に基づく日程変更の要請によりメンタリングの実施が困難になった場合は、当該メンタリングに対応する料金をご返金いたします。</p>
                    <p>・本サービスの所定の手続をおとりいただけない場合や、利用規約上の禁止事由に該当する等の場合は、本サービスをご利用いただけません。</p>
                    </div>
                </div>    
            </div>
          
            {!! Form::submit('内容を確認する', ['class' => 'btn py-3 px-4 btn-primary']) !!}
            {!! Form::close() !!}
      </div>
  </section>
@endsection              
        