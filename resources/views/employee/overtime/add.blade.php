@extends('layouts.app')

@section('content')
<div class="section-add-overtime">
    <!-- Overtime Add List -->
    <div class="overtimeAddHeader">
        <div class="row overtimeAddBreadCrumbs">
            <div class="col-md-12">
                <x-breadcrumbs breadCrumbs="Employee/Employee Overtime"/>
            </div>
        </div>
    </div>
    
    <!-- Overtime Add List overtimeAddContent-->
    <div class="card">
        <div class="row">
            <div class="col-md-6 overtimeAddCardLeft">
                <!-- First Card -->
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6 overtime-title">
                            Employee List
                        </div>
                        <div class="col-md-6 text-right">
                            <!-- class search-input is use in js and the data-table = overtime-list refers to the table class -->
                            <input type="text" class="search-input w-100" placeholder="Search. . ." data-table="employee-list">
                        </div>
                    </div>
                </div>
            
                <!-- Second Card -->
                <div class="card-body">
                    <table class="table employee-list table-hover">
                        <thead>
                            <th>Employee Number</th>
                            <th>Fullname</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                                <tr>
                                    <td>{{$employee->cl_id_number}}</td>
                                    <td>
                                        <a href="">
                                            {{$employee->cl_first_name}} {{$employee->cl_middle_name}} {{$employee->cl_last_name}} {{$employee->cl_name_ext}}
                                        </a>
                                    </td>
                                    <td>
                                        <a href = "/overtime/{{$employee->id}}" class="btn">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


            
            <div class="col-md-6 overtimeAddCardRight">
                <!-- First Card -->
                <div class="card-header overtimeAddForm">
                    <div class="row">
                        <div class="col-md-12 overtime-title">
                            Overtime Form
                        </div>
                    </div>
                </div>
                <!-- Second Card -->
                <div class="card-body overtimeCardBodyBG">
                    <form action="/overtime" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(isset($soloemployee))
                            <!-- If mag add for employee overtime -->
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Employee ID -->
                                    <input type="text" class="form-control" name="employeeID" value="{{$soloemployee->id}}" readonly hidden>
                                    
                                        <label for="">Name</label>
                                        <input type="text"  class="form-control inputReadOnly" placeholder="" value="{{$soloemployee->cl_first_name}} {{$soloemployee->cl_middle_name}} {{$soloemployee->cl_last_name}} {{$soloemployee->cl_name_ext}}"  readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Date Filed</label>
                                        <input type="date" class="form-control" name="dateFiledInput" placeholder=". . ." required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Time Started</label>
                                        <input type="time" class="form-control" name="timeStartedInput" placeholder=". . ." required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Time End</label>
                                        <input type="time" class="form-control" name="timeEndInput" placeholder=". . ." required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Total Time</label>
                                        <input type="text" class="form-control" name="totalTimeInput" placeholder=". . ." required>
                                    </div>
                                    
                                </div>
                                <!-- Reasons -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Control Number</label>
                                        <input type="text" class="form-control" name="controlNumberInput" placeholder=". . ." required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Reason</label>
                                        <textarea name="reasonTextarea" id="" cols="15" rows="5"  class="form-control" name="reasonTextarea" placeholder="Reason. . ." required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Type of Overtime</label>
                                        <select class="form-control" name="overtimeTypeSelect" required>
                                            <option value="">. . .</option>
                                            <option value="Regular">Regular</option>
                                            <option value="Rest Day">Rest Day</option>
                                            <option value="Regular Holiday">Regular Holiday</option>
                                            <option value="Special Holiday">Special Holiday</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Effective Date</label>
                                        <input type="date" class="form-control" name="effectiveDateInput" placeholder=". . ." required>
                                    </div>
                                    <button class="btn">Submit</button>
                                </div>
                            </div>

                        @else
                            <div class="row">
                                <!-- Default Form -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" placeholder="Employee Name. . ."  readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Date Filed</label>
                                        <input type="text" class="form-control" placeholder=". . ." readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Time Started</label>
                                        <input type="text" class="form-control" placeholder=". . ."  readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Time End</label>
                                        <input type="text" class="form-control" placeholder=". . ."  readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Total Time</label>
                                        <input type="text" class="form-control" placeholder=". . ."  readonly>
                                    </div>
                                </div>
                                <!-- Reasons -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Control Number</label>
                                        <input type="text" class="form-control" placeholder=". . ."  readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Reason</label>
                                        <textarea name="reason" id="" cols="15" rows="5"  class="form-control" placeholder="Reason. . ." readonly></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Type of Overtime</label>
                                        <input type="text" class="form-control" placeholder=". . ."  readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Effective Date</label>
                                        <input type="text" class="form-control" placeholder=". . ."  readonly>
                                    </div>
                                    <button class="btn" disabled>Submit</button>
                                </div>
                            </div>
                        @endif  
                    </form>
                </div>
            </div>
        </div>




        <div class="row"></div>
    </div>
</div>



<script src="{{asset('js/add.js')}}"></script>
@endsection