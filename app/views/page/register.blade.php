@extends('layout.master')

@section('contents')


<div class='container' style='margin-top:30px; margin-bottom: 30px;'>	
<div class='row'>
    <div class='col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3'>
		{{ Form::open(['route' => 'user.store']) }}
			<h2>Please Sign Up <small>It's free and always will be.</small></h2>
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
							{{ Form::password('password',array('class' => 'form-control input-md', 'placeholder' => 'Confirm Password', 'aria-describedby' => 'basic-addon1')) }}
               				<br>	
							{{ $errors->first('password') }}
						</div>
					</div>
				</div>
			
			<hr class='colorgraph'>
			<div class='row'>

				<div class='col-xs-12 col-md-6'>
					{{ Form::submit('Create') }}
				</div>
			</div>
		{{ Form::close() }}
	</div>
</div>

@stop