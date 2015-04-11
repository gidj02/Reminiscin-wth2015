@extends('layout.master')

@section('contents')
	<div class="container" style="margin-top:100px;">
		<div class="col-md-4 col-md-offset-4">
		    <div class="login-panel panel panel-default">
				<div class="panel-heading"><h1> Login User </h1></div>
				<div class="panel-body">
					{{ Form::open(['route' => 'storesession']) }}
				<div class="row">
			  		<div class="col-lg-12">
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
			                <div class="col-md-6 col-md-offset-4">
								{{ Form::submit('Login') }}
							</div>
						</div>
					</div>
				</div>
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>


@stop
