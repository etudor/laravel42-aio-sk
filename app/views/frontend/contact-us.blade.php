@extends('frontend/layouts/default')

{{-- Page title --}}
@section('title')
Contact us ::
@parent
@stop

{{-- Page content --}}
@section('content')

<h1>Contact Us</h1>

<form method="post" action="" role="form">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />

	<fieldset>
		<!-- Name -->
		<div  class="form-group{{ $errors->first('name', ' error') }}">
			<input type="text" id="name" name="name" class="form-control" placeholder="Name">
			{{ $errors->first('name', '<span class="help-block">:message</span>') }}
		</div>

		<!-- Email -->
		<div  class="form-group{{ $errors->first('email', ' error') }}">
			<input type="text" id="email" name="email" class="form-control" placeholder="Email">
			{{ $errors->first('email', '<span class="help-block">:message</span>') }}
		</div>
		<!-- Description -->
		<div  class="form-group{{ $errors->first('description', ' error') }}">
			<textarea rows="4" id="description" name="description" class="form-control" placeholder="Description"></textarea>
			{{ $errors->first('description', '<span class="help-block">:message</span>') }}
		</div>

		<!-- Form actions -->
		<button type="submit" class="btn btn-primary pull-right">Submit</button>
	</fieldset>
</form>
@stop
