@extends('frontend.layouts.account')

{{-- Page title --}}
@section('title')
Change your Email
@stop

{{-- Account page content --}}
@section('account-content')
<div class="page-header">
	<h4>Change your Email</h4>
</div>

<form method="post" action="" class="form-horizontal" autocomplete="off">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />

	<!-- Form type -->
	<input type="hidden" name="formType" value="change-email" />

	<!-- Current Password -->
	<div class="control-group{{ $errors->first('current_password', ' error') }}">
		<label class="control-label" for="current_password">Current Password</label>
		<div class="controls">
			<input type="password" name="current_password" id="current_password" value="" />
			{{ $errors->first('current_password', '<span class="help-inline">:message</span>') }}
		</div>
	</div>

	<!-- New Email -->
	<div class="control-group{{ $errors->first('email', ' error') }}">
		<label class="control-label" for="email">New Email</label>
		<div class="controls">
			<input type="text" name="email" id="email" value="" />
			{{ $errors->first('email', '<span class="help-inline">:message</span>') }}
		</div>
	</div>

	<!-- Confirm New Email -->
	<div class="control-group{{ $errors->first('email_confirm', ' error') }}">
		<label class="control-label" for="email_confirm">Confirm New Email</label>
		<div class="controls">
			<input type="text" name="email_confirm" id="email_confirm" value="" />
			{{ $errors->first('email_confirm', '<span class="help-inline">:message</span>') }}
		</div>
	</div>

	<!-- Form actions -->
	<div class="control-group">
		<div class="controls">
			<a class="btn" href="{{ route('home') }}">Cancel</a>

			<button type="submit" class="btn btn-info">Update</button>
		</div>
	</div>
</form>
@stop