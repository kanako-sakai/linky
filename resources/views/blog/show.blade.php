@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container mt-4">
    	    <div class="border p-4">
    	        <h1 class="h4 mb-4 blog-title">
    	            {{ $article->title }}
    	        </h1>
    	        
    	        <div class="summary">
    	            <time>{{ $article->updated_at->format('Y.m.d') }}</time></p>
                </div>

                <!-- 本文 -->
                <p>{!! $article->content !!}</p>
                
                <div class="mb-4">
                @can('system-only')
                     <a href="{{ action('BlogController@edit', $article->id) }}" class="btn btn-primary">
                     編集する
                     </a>
                @endcan
                
                @can('system-only')
                    <form style="display: inline-block;" method="POST" action="{{ action('BlogController@destroy', $article->id) }}">
                        @csrf
                        @method('DELETE')
                     
                        <button class="btn btn-danger">削除する</button>
                    </form>
                @endcan
                </div>
                
                </section>
            </div>    
             <div class="submit-return-buttons text-center mb-5">
                <a href="{{ route('blog.index') }}" class="btn btn-light">
                    一覧に戻る
                </a>
            </div>
        </div>
</section>        
@endsection