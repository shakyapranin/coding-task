@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Personnels &nbsp;
                        <a href="{{ route('storePersonnel') }}" class="btn btn-default">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                    <div class="panel-body">
                        @include('flash::message')
                        <?php if (empty($csv_array)) {?>
                        <div class="row">
                            <div class="col-md-12">No records found.</div>
                        </div>
                        <?php } else {?>

                        <?php $csv_header = array_shift($csv_array); ?>
                        <table class="table table-striped task-table">
                            <!-- Table Headings -->
                            <thead>
                                <?php $token_header = array_shift($csv_header);?>
                                <th class="hidden"><?php echo $token_header;?></th><!--Hide token headers-->
                                <?php foreach ($csv_header as $header_item):?>
                                <th><?php echo ucfirst(trim(str_replace("_", " ", $header_item)));?></th>
                                <?php endforeach; ?>
                                <th>Operations</th>
                            </thead>
                            <!-- Table Body -->
                            <tbody>
                            <?php foreach ($csv_array as $key => $csv_item_array) :?>
                            <?php $token_header = array_shift($csv_item_array);?>
                            <tr>
                                <td class="hidden"><?php echo $token_header;?></td><!--Hide token headers-->
                                <?php  foreach ($csv_item_array as $csv_item) :?>
                                <td class="table-text">
                                    <div><?php echo str_replace('"', '', $csv_item);?></div>
                                </td>
                                <?php endforeach;?>
                                <td class="table-text">
                                    <div>
                                        <a href="submit" class="btn btn-default">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="submit" class="btn btn-default">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </div>
                                </td><!--Operation buttons-->
                            </tr>
                            <?php endforeach ;?>
                            </tbody>
                        </table>

                        <?php }// Populate data if array not empty ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection