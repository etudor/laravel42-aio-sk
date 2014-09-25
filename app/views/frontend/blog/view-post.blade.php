@extends('frontend/layouts/default')

{{-- Page title --}}
@section('title')
{{ $post->title }} ::
@parent
@stop

{{-- Update the Meta Title --}}
@section('meta_title')

@parent
@stop

{{-- Update the Meta Description --}}
@section('meta_description')

@parent
@stop

{{-- Update the Meta Keywords --}}
@section('meta_keywords')

@parent
@stop

{{-- Page content --}}
@section('content')
<h1>{{ $post->title }}</h1>
<p>
	<i class="icon-user"></i> by <span class="muted">{{ $post->author->first_name }}</span>
	| <i class="icon-calendar"></i> {{ $post->created_at->diffForHumans() }}
	| <i class="icon-comment"></i> <a href="{{ $post->url() }}#comments">{{ $post->comments()->count() }} Comments</a>
</p>
<p>{{ $post->content() }}</p>

<div>
	<span class="badge badge-info" title="{{ $post->created_at }}">Posted {{ $post->created_at->diffForHumans() }}</span>
</div>

<hr />

<h4 id="comments">{{ $comments->count() }} Comments</h4>

@if ($comments->count())
	@foreach ($comments as $comment)
		<div class="row">
			<div class="col-lg-1">
				<img class="thumbnail" src="{{ $comment->author->gravatar() }}" alt="">
			</div>
			<div class="col-lg-11">
				<span class="muted">{{ $comment->author->fullName() }}</span>
				&bull;
				<span title="{{ $comment->created_at }}">{{ $comment->created_at->diffForHumans() }}</span>
				<br />
				{{ $comment->content() }}
			</div>
		</div>
	@endforeach
@else
<hr />
@endif

@if ( ! Sentry::check())
	You need to be logged in to add comments.<br /><br />
	Click <a href="{{ route('signin') }}">here</a> to login into your account.
@else
	<h3>Add a Comment</h3>
	<form method="post" action="{{ route('view-post', $post->slug) }}">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />

		<!-- Comment -->
		<div class="form-group{{ $errors->first('comment', ' error') }}">
			<textarea class="form-control" rows="4" name="comment" id="comment">{{ Input::old('comment') }}</textarea>
			{{ $errors->first('comment', '<span class="help-inline">:message</span>') }}
		</div>

		<!-- Form actions -->
		<div class="form-group">
				<input type="submit" class="btn btn-primary" id="submit" value="Submit" />
		</div>
	</form>
@endif
@stop
