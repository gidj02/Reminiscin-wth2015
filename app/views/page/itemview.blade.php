@extends('layout.user_master')
@section('contents')

<div class="row">
    <div class='container' style='margin-top:100px;'>
        <div class='col-lg-12'>
            <div class='panel panel-success'>
                <div class='panel-heading'>
                    <h1>{{ $item->name }}</h1>
                    <h3>{{ $item->location }}</h3>
                    <h5>{{ $item->date }}</h5>
                </div>
                <div class='panel-body'>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ '/../' . $item->imgurl }}" alt="" class="img-rounded img-responsive" />
                        </div>
                        <div class="col-md-6">
                            <p>
                                {{ $item-> blog }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
