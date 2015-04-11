@extends('layout.master')

@section('contents')
	<div class='container' style='margin-top:100px;'>
		<div class='col-md-4 col-md-offset-4'>
		    <div class='login-panel panel panel-default'>
				<div class='panel-heading'><h1> Login User </h1></div>
				<div class='panel-body'>
					{{ Form::open(['route' => 'storesession']) }}
					<fieldset>
			  			<div class='form-group'>
			              		{{ Form::text('username', '', array('placeholder' => 'Username' , 'class' => 'form-control', 'aria-describedby' => 'basic-addon1')) }}
			              		
								{{ $errors->first('username') }}
			            </div>

						<div class='form-group'>
			               		{{ Form::password('password', array('placeholder' => 'Password' , 'class' => 'form-control', 'aria-describedby' => 'basic-addon1')) }}
			               	
								{{ $errors->first('password') }}
			            </div>

						<div class='form-group'>
								{{ Form::submit('Login', array('class' => 'btn btn-block btn-warning')) }}
						</div>
				</fieldset>
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>


@stop
