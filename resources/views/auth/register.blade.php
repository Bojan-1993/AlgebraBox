@extends('layouts.index')

@section('title', 'Register')

@section('content')
<div class="login-row">
    <div>
        <div class="login">
            <div class="login-logo">
                <img src="{!!asset('images/algebra-logo.svg')!!}"/>
				<h2>Register</h2>
            </div>
            <div class="panel-body">
                <form accept-charset="UTF-8" role="form" method="post" action="{{ route('auth.register.attempt') }}">
					<fieldset>
						<div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
							<input class="form-control" placeholder="E-mail" name="email" type="text" value="{{ old('email') }}">
							{!! ($errors->has('email') ? $errors->first('email', '<p class="text-danger">:message</p>') : '') !!}
						</div>
						<div class="form-group  {{ ($errors->has('password')) ? 'has-error' : '' }}">
							<input class="form-control" placeholder="Password" name="password" type="password">
							{!! ($errors->has('password') ? $errors->first('password', '<p class="text-danger">:message</p>') : '') !!}
						</div>
						<div class="form-group  {{ ($errors->has('password_confirmation')) ? 'has-error' : '' }}">
							<input class="form-control" placeholder="Confirm Password" name="password_confirmation" type="password">
							{!! ($errors->has('password_confirmation') ? $errors->first('password_confirmation', '<p class="text-danger">:message</p>') : '') !!}
						</div>
						<input name="_token" value="{{ csrf_token() }}" type="hidden">
						<input class="btn login-btn-box background-green" type="submit" value="Sign Me Up!">
					</fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
