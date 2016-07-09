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

                        <?php
                        echo Form::model($personnel, array('route' => array('storePersonnel', $personnel->id)));
                        ?>
                        <div class="form-group">

                            <div class="row">
                                <?php echo Form::label('name', 'Name', array('class' => 'col-sm-3 control-label'));?>
                                <div class="col-sm-6">
                                    <?php echo Form::text('name', $personnel->name, array('class' => 'form-control'));?>
                                </div>
                            </div>

                            <div class="row">
                                <?php echo Form::label('gender', 'Gender', array('class' => 'col-sm-3 control-label'));?>
                                <div class="col-sm-6">
                                    <?php echo Form::radio('name', 'male');?> Male
                                    <?php echo Form::radio('name', 'female');?> Female
                                    <?php echo Form::radio('name', 'other');?> Other
                                </div>
                            </div>

                            <div class="row">
                                <?php echo Form::label('phone', 'Phone', array('class' => 'col-sm-3 control-label'));?>
                                <div class="col-sm-6">
                                    <?php echo Form::text('phone', $personnel->phone, array('class' => 'form-control'));?>
                                </div>
                            </div>

                            <div class="row">
                                <?php echo Form::label('email', 'Email', array('class' => 'col-sm-3 control-label'));?>
                                <div class="col-sm-6">
                                    <?php echo Form::text('email', $personnel->email, array('class' => 'form-control'));?>
                                </div>
                            </div>

                            <div class="row">
                                <?php echo Form::label('address', 'Address', array('class' => 'col-sm-3 control-label'));?>
                                <div class="col-sm-6">
                                    <?php echo Form::textarea('address', $personnel->address, array('class' => 'form-control', 'rows' => 3));?>
                                </div>
                            </div>

                            <div class="row">
                                <?php echo Form::label('date_of_birth', 'Date of birth', array('class' => 'col-sm-3 control-label'));?>
                                <div class="col-sm-6">
                                    <?php echo Form::text('date_of_birth', $personnel->date_of_birth, array('class' => 'form-control'));?>
                                </div>
                            </div>

                            <div class="row">
                                <?php echo Form::label('education_background', 'Education Background', array('class' => 'col-sm-3 control-label'));?>
                                <div class="col-sm-6">
                                    <?php echo Form::textarea('education_background', $personnel->education_background, array('class' => 'form-control', 'rows' => 3));?>
                                </div>
                            </div>

                            <div class="row">
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
                            
                            <div class="row">
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