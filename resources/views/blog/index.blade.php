@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center">
                	<h2 class="mb-4">メディア</h2>
          		</div>
        	</div>
        	
        	@can('system-only')
        	<div class="mt-4 mb-4 text-center">
                <a href="{{ route('blog.create') }}" class="btn btn-primary">
                    投稿の新規作成
                </a>
            </div>
            @endcan

        	<div class="table-responsive">
        	    <table class="blog-table">
        	        @if(count($articles) >0)
        	            @foreach ($articles as $article)
                            <tr>
                                <th><img class="blog-thumnail" src = "{{ $article->picture }}" ></th>
                                <td>    
                                    <p class="bbs-subject">{!! link_to_route('blog.show', $article->title, ['blog'=>$article->id]) !!}</p>
                                <p><span class="badge badge-pill badge-info">{{ $article->category()->first()->name }}</span></p>
                                </td>    
                            </tr>
                        @endforeach
                    @endif    
        	    </table>
        	</div>
    
        	<div class="d-flex justify-content-center mb-5">
                {{ $articles->links() }}
            </div>
        </div>
</section>

@endsection