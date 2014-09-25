@extends('frontend/layouts/account')

{{-- Page title --}}
@section('title')
Change your Password
@stop

{{-- Account page content --}}
@section('account-content')

<h3>Change your Password</h3>


<form method="post" action="" autocomplete="off" role="form">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />

	<!-- Old Password -->
	<div class="form-group{{ $errors->first('old_password', ' error') }}">
		<label for="old_password">Old Password</label>
		<input type="password" name="old_password" id="old_password" value="" class="form-control" />
		{{ $errors->first('old_password', '<span class="help-block">:message</span>') }}
	</div>

	<!-- New Password -->
	<div class="form-group{{ $errors->first('password', ' error') }}">
		<label for="password">New Password</label>
		<input type="password" name="password" id="password" value="" class="form-control" />
		{{ $errors->first('password', '<span class="help-block">:message</span>') }}
	</div>

	<!-- Confirm New Password  -->
	<div class="form-group{{ $errors->first('password_confirm', ' error') }}">
		<label for="password_confirm">Confirm New Password</label>
		<input type="password" name="password_confirm" id="password_confirm" value="" class="form-control" />
		{{ $errors->first('password_confirm', '<span class="help-block">:message</span>') }}

	</div>
	
	<!-- Form actions -->
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Update Password</button>
		<a href="{{ route('forgot-password') }}" class="btn btn-link">I forgot my password</a>
	</div>
</form>
@stop