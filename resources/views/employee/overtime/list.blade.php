@extends('layouts.app')

@section('content')
<div class="section-overtime">
    <div class="row overtimeListHeader">
        <!-- For Breadcrumbs -->
        <div class="col-md-6 overtimeListBreadCrumbs">
            <x-breadcrumbs breadCrumbs="EMPLOYEE OVERTIME "/>
        </div>
        <!-- For Add Overtime Button -->
        <div class="col-md-6 text-right">
            <a href="/add-employee-overtime" class="btn addOvertimeBtn">Add Overtime</a>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6 overtime-title">
                    Employee Overtime List
                </div>
                <div class="col-md-6 text-right">
                    <!-- class search-input is use in js and the data-table = overtime-list refers to the table class -->
                    <input type="text" class="search-input w-40" placeholder="Search. . ." data-table="overtime-list">
                </div>
            </div>
        </div>
        <div class="card-body">
            
            <table class="table overtime-list-header">
                <thead>
                    <th class="w-20">Employee Number</th>
                    <th class="w-20">Name</th>
                    <th class="w-10">Department</th>
                    <th class="w-10">Date Filed</th>
                    <th class="w-20">Approved By</th>
                    <th class="w-10">Status</th>
                    <th class="w-10">Action</th>
                </thead>
            </table>
            <div class="overtime-list-content">
                <table class="table overtime-list table-hover">
                    <!-- <thead>
                        <tr>
                            <th>Employee Number</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Date Filed</th>
                            <th>Approved By</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead> -->
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>brem</td>
                            <td>asdas</td>
                            <td>asd</td>
                            <td>asdas</td>
                            <td>asdsa</td>
                            <td><a ><i class="fas fa-pen"></i></a></td>
                        </tr>
                        {{-- @foreach($overtimes as $overtime)
                            <tr>
                                <!-- Info From Employee -->
                                @foreach($employees as $employee)
                                    @if($overtime->employee_id == $employee->id)
                                        <td class="w-20">{{$employee->cl_id_number}}</td>
                                        <td class="w-20">
                                            <a href="">
                                                {{$employee->cl_first_name}} {{$employee->cl_middle_name}} {{$employee->cl_last_name}} {{$employee->cl_name_ext}}
                                            </a>
                                        </td>
                                    @endif
                                @endforeach
                                <!-- Info From Overtime -->
                                <td class="w-10"></td>
                                <td class="w-10">{{$overtime->cl_date_file}}</td>
                                <td class="w-20">
                                    @foreach($employees as $employee)
                                        @if($overtime->cl_approved_by == $employee->id)
                                            {{$employee->cl_first_name}} {{$employee->cl_middle_name}} {{$employee->cl_last_name}} {{$employee->cl_name_ext}}
                                        @endif
                                    @endforeach
                                </td>
                                @if($overtime->cl_status == "Pending")
                                    <td class="pending w-10">{{$overtime->cl_status}}</td>
                                @elseif($overtime->cl_status == "Approved")
                                    <td class="approved w-10">{{$overtime->cl_status}}</td>
                                @elseif($overtime->cl_status == "Declined")
                                    <td class="declined w-10">{{$overtime->cl_status}}</td>
                                @endif
                                <!-- Button Edit Function -->
                                <td class="w-10">
                                    <form action="/overtime/{{$overtime->id}}/edit" method="POST">
                                        @csrf
                                        @method('GET')
                                        <button class="btn">
                                            <i class="fas fa-pen"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/list.js')}}"></script>
@endsection