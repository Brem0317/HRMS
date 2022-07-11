@extends('layouts.app')

@section('content')

<div class="section-logs-list">
    <x-breadcrumbs breadCrumbs="SETTINGS / USER LOGS"/>
    <div class="card">
        <div class="card-header">
            <div class="card-header-text" style="float:left;">
                <h6>User Logs</h6>
            </div>

            <div style="float:right;">
                <input type="text" class="form-control search-input logsSearchClass"  data-table="logs-list" placeholder="Search...">
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-12">

                    <div class="tableFormFixHead">
                        {{-- @if($logs->count() > 0) --}}
                            <table class="table logsListClass logs-list">
                                <thead>
                                    <th class="w-40">Name</th>
                                    <th class="w-40">Action</th>
                                    <th class="w-20">Date</th>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>JCAH20190092</td>
                                        <td>12312</td>
                                        <td><a href="#"><i class="fas fa-pen"></i></a></td>
                                    </tr>
                                    {{-- @foreach($logs as $log)
                                            <tr>
                                                @foreach($employees as $employee)
                                                    @if($log->employee_id == $employee->id)
                                                        <td>
                                                        <a href="">{{$employee->cl_first_name}} {{$employee->cl_middle_name}} {{$employee->cl_last_name}} {{$employee->cl_name_ext}}</a> 
                                                        </td>
                                                    @endif
                                                @endforeach

                                                <td class="roleClass">{{$log->cl_action}}</td>
                                                <td class="roleClass">{{ date('F j, Y', strtotime($log->created_at)) }}</td>
                                            </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>
                        {{-- @else
                            <p class="noRecords">No Logs Records Found.</p>
                        @endif --}}

                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer"></div>

    </div>

</div>

<script src="{{asset('js/logs.js')}}" type="application/javascript"></script>
@endsection