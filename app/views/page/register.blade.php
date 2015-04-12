@extends('layout.master')

@section('contents')


<div class='container' style='margin-top:30px; margin-bottom: 30px;'>	
<div class='row'>
    <div class='col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3'>
    <div class='login-panel panel panel-default'>
		{{ Form::open(['route' => 'user.store']) }}
		<div class='panel-heading'><h2>Please Sign Up <br><small>Make your memories last forever.</small></h2></div>
		<div class='panel-body'>
			
			<hr class='colorgraph'>
				<div class='form-group'>
					{{ Form::text('username','',array('class' => 'form-control input-md', 'placeholder' => 'Username', 'aria-describedby' => 'basic-addon1')) }}
					{{ $errors->first('username') }}	
				</div>
				
			
				<div class='form-group'>
					{{ Form::email('email','',array('class' => 'form-control input-md', 'placeholder' => 'Email Address', 'aria-describedby' => 'basic-addon1')) }}	
					{{ $errors->first('email') }}
				</div>

				<div class='form-group'>
					{{ Form::text('firstname','',array('class' => 'form-control input-md', 'placeholder' => 'First Name', 'aria-describedby' => 'basic-addon1')) }}	
					{{ $errors->first('firstname') }}
				</div>

				<div class='form-group'>
					{{ Form::text('middlename','',array('class' => 'form-control input-md', 'placeholder' => 'Middle Name', 'aria-describedby' => 'basic-addon1')) }}	
					{{ $errors->first('middlename') }}
				</div>

				<div class='form-group'>
					{{ Form::text('lastname','',array('class' => 'form-control input-md', 'placeholder' => 'Last Name', 'aria-describedby' => 'basic-addon1')) }}	
					{{ $errors->first('lastname') }}
				</div>

				<div class='form-group'>
					{{ Form::text('contact','',array('class' => 'form-control input-md', 'placeholder' => 'Contact Number', 'aria-describedby' => 'basic-addon1')) }}	
					{{ $errors->first('contact') }}
				</div>

				<div class='row'>
					<div class='col-xs-12 col-sm-6 col-md-6'>
						<div class='form-group'>
							{{ Form::password('password', array('class' => 'form-control input-md', 'placeholder' => 'Password', 'aria-describedby' => 'basic-addon1')) }}
               				<br>	
							{{ $errors->first('password') }}
						</div>
					</div>
					<div class='col-xs-12 col-sm-6 col-md-6'>
						<div class='form-group'>
							{{ Form::password('password_confirmation',array('class' => 'form-control input-md', 'placeholder' => 'Confirm Password', 'aria-describedby' => 'basic-addon1')) }}
               				<br>	
							{{ $errors->first('password_confirmation') }}
						</div>
					</div>
				</div>
			
			<hr class='colorgraph'>
			<div class='row'>

				<div class='col-xs-12 col-md-6'>
					{{ Form::submit('Create', array('class' => 'btn btn-warning btn-block')) }}
				</div>
				</div>
				</div>
			</div>
		{{ Form::close() }}
	</div>
</div>

@stop