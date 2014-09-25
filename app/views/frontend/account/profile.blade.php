@extends('frontend/layouts/account')

{{-- Page title --}}
@section('title')
Your Profile
@stop

{{-- Account page content --}}
@section('account-content')

	<h3>Update your Profile</h3>


<form method="post" action="" class="" autocomplete="off" role="form">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />

	<!-- First Name -->
	<div class="form-group{{ $errors->first('first_name', ' error') }}">
		<label for="first_name">First Name</label>
		<input class="form-control" type="text" name="first_name" id="first_name" value="{{ Input::old('first_name', $user->first_name) }}" />
		{{ $errors->first('first_name', '<span class="help-block">:message</span>') }}
	</div>

	<!-- Last Name -->
	<div class="form-group{{ $errors->first('last_name', ' error') }}">
		<label for="last_name">Last Name</label>
		<input class="form-control" type="text" name="last_name" id="last_name" value="{{ Input::old('last_name', $user->last_name) }}" />
		{{ $errors->first('last_name', '<span class="help-block">:message</span>') }}
	</div>

	<!-- Website URL -->
	<div class="form-group{{ $errors->first('website', ' error') }}">
		<label for="website">Website URL</label>
		<input class="form-control" type="text" name="website" id="website" value="{{ Input::old('website', $user->website) }}" />
		{{ $errors->first('website', '<span class="help-block">:message</span>') }}
	</div>

	<!-- Country -->
	<div class="form-group{{ $errors->first('country', ' error') }}">
		<label for="country">Country</label>
		<input class="form-control" type="text" name="country" id="country" value="{{ Input::old('country', $user->country) }}" />
		{{ $errors->first('country', '<span class="help-block">:message</span>') }}
	</div>

	<!-- Gravatar Email -->
	<div class="form-group{{ $errors->first('gravatar', ' error') }}">
		<label for="gravatar">Gravatar Email <small>(Private)</small></label>
		<input class="form-control" type="text" name="gravatar" id="gravatar" value="{{ Input::old('gravatar', $user->gravatar) }}" />
		{{ $errors->first('gravatar', '<span class="help-block">:message</span>') }}

		<p><br />
			<img src="//secure.gravatar.com/avatar/{{ md5(strtolower(trim($user->gravatar))) }}" width="30" height="30" />
			<a href="http://gravatar.com" target="_blank">Change your avatar at Gravatar.com</a>.
		</p>
	</div>

	<!-- Form actions -->
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Update your Profile</button>
	</div>
</form>
@stop
