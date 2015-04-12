@extends('layout.user_master')

@section('contents')
	<div class="panel panel-primary">
		<div class="panel-heading"><h1> Itinerary Item Form </h1></div>
			<div class="panel-body">
				<!-- Wala pang createItinerary sa Controller -->
				{{ Form::open(['route' => 'itinerary.store']) }}
			<div class="row">
		        <div class="col-lg-12 col-sm-6 col-md-6">
		            <div class="well well-sm">
		                <div class="row">
		                	 <div class="col-sm-6 col-md-4">
		                        <!-- <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" /> -->
		                        <!-- {{ Form::file('upload', array('id' => 'btnupload', 'class' => 'form-control btn btn-warning dropzone')) }} -->
		                        {{ Form::open(array('url' => 'item/store/' . $id, 'class' => 'dropzone', 'id' => 'my-awesome-dropzone', 'enctype' => 'multipart/form-data', 'method' => 'post')) }}
								{{ Form::file('fileupload') }}      
								{{ $errors->first('fileupload') }}      
		                    </div>
		                    <!-- End Image for Itinerary -->
		                    <div class="col-sm-6 col-md-8">
		                        <!-- Text fields  -->
					  			<div class="row">
									 
						              		{{ Form::text('name', '',  array('placeholder' => 'Name of your adventure' , 'class' => 'form-control', 'aria-describedby' => 'basic-addon1')) }}
											{{ $errors->first('name') }}
					  			</div>
					  			<div class="row">
									 
						              		{{ Form::text('location', '',  array('placeholder' => 'Location of your adventure' , 'class' => 'form-control', 'aria-describedby' => 'basic-addon1')) }}
											{{ $errors->first('location') }}
					  			</div>
					  			<div class="row">
									 
						              		{{ Form::text('date', '',  array('placeholder' => 'Date of your adventure' , 'class' => 'form-control', 'aria-describedby' => 'basic-addon1')) }}
											{{ $errors->first('date') }}
					  			</div>
                                
					  			<div class="row">
									 
						              		{{ Form::textarea('blog', '',  array('placeholder' => 'Blog' , 'class' => 'form-control', 'aria-describedby' => 'basic-addon1')) }}
											{{ $errors->first('blog') }}
					  			</div>
								<!-- End of End Items -->
								<!-- End of Iterinary Items -->
					            <br>
					            <!-- Save button -->
					            {{ Form::submit('Save', array('class' => 'btn btn-block btn-warning')) }}
	                            <!-- End of Save button -->
								</div>
		                    </div>
		                </div>
		            </div>
		        </div>
			</div>
			{{ Form::close() }}
		</div>
	</div>
@stop
