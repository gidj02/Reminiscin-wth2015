@extends('layout.master')

@section('contents')
	<div class="panel panel-primary">
		<div class="panel-heading"><h1> Register </h1></div>
			<div class="panel-body">
				{{ Form::open(['route' => 'user.store']) }}
			<div class="row">
		  		<div class="col-lg-12">
		  			<div class="form-group">
		                <label class="col-md-4 control-label">First Name: </label>
		                <div class="col-md-6">
		              		{{ Form::text('firstname') }}
		              		<br>
							{{ $errors->first('firstname') }}
		                </div>
		            </div>
					<br>
		  			<div class="form-group">
		                <label class="col-md-4 control-label">Middle Name: </label>
		                <div class="col-md-6">
		              		{{ Form::text('middlename') }}
		              		<br>
							{{ $errors->first('middlename') }}
		                </div>
		            </div>
					<br>
		  			<div class="form-group">
		                <label class="col-md-4 control-label">Last Name: </label>
		                <div class="col-md-6">
		              		{{ Form::text('lastname') }}
		              		<br>
							{{ $errors->first('lastname') }}
		                </div>
		            </div>
					<br>
		  			<div class="form-group">
		                <label class="col-md-4 control-label">Username: </label>
		                <div class="col-md-6">
		              		{{ Form::text('username') }}
		              		<br>
							{{ $errors->first('username') }}
		                </div>
		            </div>
					<br>
					<div class="form-group">
		                <label class="col-md-4 control-label">Password: </label>
		                <div class="col-md-6">
		               		{{ Form::password('password') }}
		               		<br>	
							{{ $errors->first('password') }}
		                </div>
		            </div>
					<br>
					<div class="form-group">
		                <label class="col-md-4 control-label">Confirm Password: </label>
		                <div class="col-md-6">
		               		{{ Form::password('password_confirmation') }}
		               		<br>	
							{{ $errors->first('password_confirmation') }}
		                </div>
		            </div>
					<br>
		  			<div class="form-group">
		                <label class="col-md-4 control-label">Email Address: </label>
		                <div class="col-md-6">
		              		{{ Form::text('email') }}
		              		<br>
							{{ $errors->first('email') }}
		                </div>
		            </div>
					<br>
		  			<div class="form-group">
		                <label class="col-md-4 control-label">Contact Number: </label>
		                <div class="col-md-6">
		              		{{ Form::text('contact') }}
		              		<br>
							{{ $errors->first('contact') }}
		                </div>
		            </div>
					<br>
					<div class="form-group">
		                <div class="col-md-6 col-md-offset-4">
							{{ Form::submit('Sign up') }}
						</div>
					</div>
				</div>
			</div>
			{{ Form::close() }}
		</div>
	</div>
@stop