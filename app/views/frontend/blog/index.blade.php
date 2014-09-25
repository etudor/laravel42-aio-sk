@extends('frontend/layouts/default')

{{-- Page content --}}
@section('content')

@foreach (array_chunk($posts->all(), 2) as $postChunk)
<div class="row">
	@foreach( $postChunk as $post )                 
		  <div class="blogShort col-lg-6">
		     <h2><a href="{{ $post->url() }}">{{ $post->title }}</a></h2>
		     <img src="{{ $post->thumbnail() }}" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">
		     <article><p>
				{{ Str::limit($post->content, 200) }}
		         </p></article>
		         				<p>
							<i class="icon-user"></i> by <span class="muted">{{ $post->author->first_name }}</span>
							| <i class="icon-calendar"></i> {{ $post->created_at->diffForHumans() }}
							| <i class="icon-comment"></i> <a href="{{ $post->url() }}#comments">{{ $post->comments()->count() }} Comments</a>
						</p>
		     <a class="btn btn-blog pull-right" href="{{ $post->url() }}">Read More</a> 
		 </div>
	@endforeach
	</div>
@endforeach

{{ $posts->links() }}

@stop
