@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Create Personnel
                    </div>
                    <div class="panel-body">
                        {!! Form::open(array('url' => 'personnel')) !!}
                        
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection