@extends('layout.user_master')

@section('contents')
	<div class="panel panel-primary">
		<div class="panel-heading"><h1> Itinerary Form </h1></div>
			<div class="panel-body">
				<!-- Wala pang createItinerary sa Controller -->
				{{ Form::open(['route' => 'itinerary.store']) }}
			<div class="row">
		        <div class="col-lg-12 col-sm-6 col-md-6">
		            <div class="well well-sm">
		                <div class="row">
		                	<!-- Image for Itinerary -->
		                    <div class="col-sm-6 col-md-4">
		                        <!-- <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" /> -->
		                        <!-- {{ Form::file('upload', array('id' => 'btnupload', 'class' => 'form-control btn btn-warning dropzone')) }} -->
		                        <form action="{{ url('itinerary/upload')}}" class="dropzone" id="my-awesome-dropzone">
		                        </form>
		                    </div>
		                    <!-- End Image for Itinerary -->
		                    <div class="col-sm-6 col-md-8">
		                        <!-- Text fields  -->
					  			<div class="row">
									<div class="form-group">
						                <label class="col-md-4 control-label">Itinerary Name: </label>
						                <div class="col-md-6">
						              		{{ Form::text('itineraryname') }}
											{{ $errors->first('itineraryname') }}
						                </div>
						            </div>
					  			</div>
					  			<div class="row">
									<div class="form-group">
						                <label class="col-md-4 control-label">Description: </label>
						                <div class="col-md-6">
						              		{{ Form::textarea('description') }}
											{{ $errors->first('description') }}
						                </div>
						            </div>
					  			</div>

								<!-- End of End Items -->
								<!-- End of Iterinary Items -->
					            <br>
					            <br>
					            <br>
					            <br>
					            <br>
					            <br>
					            <!-- Save button -->
					            {{ Form::submit('Save', array('id' => 'btnsave', 'class' => 'btn btn-block btn-warning')) }}
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
	<script>

	</script>
@stop
