@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Personnels
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped task-table">

                            <!-- Table Headings -->
                            <thead>
                            <th>Token</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Date of birth</th>
                            <th>&nbsp;</th>
                            </thead>

                            <!-- Table Body -->
                            <tbody>
                            {{--@foreach ($tasks as $task)--}}
                                {{--<tr>--}}
                                    {{--<!-- Task Name -->--}}
                                    {{--<td class="table-text">--}}
                                        {{--<div>{{ $task->name }}</div>--}}
                                    {{--</td>--}}

                                    {{--<td>--}}
                                        {{--<!-- TODO: Delete Button -->--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                            {{--@endforeach--}}
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>asdf</div>
                                </td>
                                <td class="table-text">
                                    <div>asdf</div>
                                </td>
                                <td class="table-text">
                                    <div>asdf</div>
                                </td>
                                <td class="table-text">
                                    <div>asdf</div>
                                </td>
                                <td class="table-text">
                                    <div>asdf</div>
                                </td>
                                <td class="table-text">
                                    <div>asdf</div>
                                </td>

                                <td>
                                    <!-- TODO: Delete Button -->
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection