@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Create Personnel
                    </div>
                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(array('url' => 'personnel', 'id' => 'personnel-form')) !!}

                        <?php //echo Form::model($personnel, array('route' => array('storePersonnel', $personnel->id)));?>

                        <div class="form-group">

                            <div class="row top-buffer">
                                <?php echo Form::label('name', 'Name *', array('class' => 'col-sm-3 control-label'));?>
                                <div class="col-sm-6">
                                    <?php echo Form::text('name', $personnel->name, array('class' => 'form-control', 'required' => true));?>
                                </div>
                            </div>

                            <div class="row top-buffer">
                                <?php echo Form::label('gender', 'Gender *', array('class' => 'col-sm-3 control-label'));?>
                                <div class="col-sm-6">
                                    <?php echo Form::radio('gender', 'male', array('checked' => true));?> Male&nbsp;
                                    <?php echo Form::radio('gender', 'female');?> Female&nbsp;
                                    <?php echo Form::radio('gender', 'other');?> Other&nbsp;
                                </div>
                            </div>

                            <div class="row top-buffer">
                                <?php echo Form::label('phone', 'Phone *', array('class' => 'col-sm-3 control-label'));?>
                                <div class="col-sm-6">
                                    <?php echo Form::text('phone', $personnel->phone, array('class' => 'form-control', 'id' => 'phone', 'required' => true));?>
                                </div>
                            </div>

                            <div class="row top-buffer">
                                <?php echo Form::label('email', 'Email *', array('class' => 'col-sm-3 control-label'));?>
                                <div class="col-sm-6">
                                    <?php echo Form::email('email', $personnel->email, array('class' => 'form-control', 'required' => true));?>
                                </div>
                            </div>

                            <div class="row top-buffer">
                                <?php echo Form::label('address', 'Address', array('class' => 'col-sm-3 control-label'));?>
                                <div class="col-sm-6">
                                    <?php echo Form::textarea('address', $personnel->address, array('class' => 'form-control', 'rows' => 3));?>
                                </div>
                            </div>

                            <div class="row top-buffer">
                                <?php echo Form::label('date_of_birth', 'Date of birth', array('class' => 'col-sm-3 control-label'));?>
                                <div class="col-sm-6">
                                    <?php echo Form::text('date_of_birth', $personnel->date_of_birth, array('class' => 'form-control', 'id' => 'date_of_birth'));?>
                                </div>
                            </div>

                            <div class="row top-buffer">
                                <?php echo Form::label('education_background', 'Education Background', array('class' => 'col-sm-3 control-label'));?>
                                <div class="col-sm-6">
                                    <?php echo Form::textarea('education_background', $personnel->education_background, array('class' => 'form-control', 'rows' => 3));?>
                                </div>
                            </div>

                            <div class="row top-buffer">
                                <?php echo Form::label('preferred_mode_of_contact', 'Preferred mode of contact', array('class' => 'col-sm-3 control-label'));?>
                                <div class="col-sm-6">
                                    <?php
                                        $pmof_options = array(
                                            '' => 'None',
                                            'email' => 'Email',
                                            'phone' => 'Phone'
                                        );
                                    ?>
                                    <?php echo Form::select('preferred_mode_of_contact', $pmof_options, array('class' => 'form-control'));?>
                                </div>
                            </div>

                            <div class="row top-buffer">
                                <div class="col-sm-6">
                                    <?php echo Form::submit('Save');?>
                                </div>
                            </div>

                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    @parent
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type='text/javascript' src='http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js'></script>
    <script src="{{ URL::asset('js/custom_validation.js') }}">
@endsection