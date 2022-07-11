@extends('layouts.app')

@section('content')


<div class="section-add-absent-late">
    
    <div class="row">
        <div class="col-md-6">
            <x-breadcrumbs breadCrumbs="EMPLOYEE / EMPLOYEE ABSENT & LATE"/>
        </div>
    </div>
    <div class="card">
        <!-- EMPLOYEE LIST -->
        <div class="row">
            <div class="col-md-6 absentLateLeft">                
                <div class="card-header employeeList">
                    <div class="row">
                        <div class="col-md-6 absentLateTitle">
                            Employee List
                        </div>
                        <div class="col-md-6 text-right">
                            <!-- class search-input is use in js and the data-table = overtime-list refers to the table class -->
                            <input type="text" class="search-input absentLateSearchClass" placeholder="Search. . ." data-table="employee-list">
                        </div>
                    </div>
                </div>               
                <div class="card-body employeeListBody">
                    <div class="tableFormFixHead">
                        <table class="table employee-list">
                            <thead>
                                <th>Employee Number</th>
                                <th>Name</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <!-- Employee Number and Name  List-->
                                @foreach($employees as $employee)
                                    <tr>
                                        <td>{{$employee->cl_id_number}}</td>
                                        <td>{{$employee->cl_first_name}} {{$employee->cl_middle_name}} {{$employee->cl_last_name}} {{$employee->cl_name_ext}}</td>
                                        <td>
                                            <a href="/absent-late/{{$employee->id}}" class="btn">
                                                <i class="fas fa-plus"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Absent and Late Form -->
            <div class="col-md-6 absentLateRight">
                <div class="card-header absentLateForm">
                    <div class="row">
                        <div class="col-md-6 absentLateFormTitle">
                            Absent / Late Form
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/absent-late" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(isset($soloemployee))
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Name -->
                                    <input type="text" name="employeeID" class="form-control" value="{{$soloemployee->id}}"  hidden readonly>
                                    <div class="form-group">
                                        <label for="">Name</label>
                                            <input type="text"  class="form-control employeeName" placeholder="{{$soloemployee->cl_first_name}} {{$soloemployee->cl_middle_name}} {{$soloemployee->cl_last_name}} {{$soloemployee->cl_name_ext}}"   readonly>
                                    </div>
                                    <!-- Date Filed -->
                                    <div class="form-group">
                                            <label for="">Date Filed</label>
                                            <input type="date"  class="form-control" name="absentLateDateFiled" required>
                                    </div>
                                     <!-- Type of Absent -->
                                    <div class="form-group">
                                        <label for="">Type of Absent / Late</label>
                                        <select id="typeOfAbsentLate" class="form-control status" name="typeOfAbsent" required>
                                            <option value="">. . .</option>
                                            <option value="Whole Day" >Whole Day</option>
                                            <option value="Half Day">Half Day</option>
                                            <option value="Late">Late</option>
                                        </select>
                                    </div>                                    
                                </div>
                                <div class="col-md-6">
                                    <!-- Control Number -->
                                    <div class="form-group absentLateControlNumber">
                                        <label for="absentLateControlNumber">Control Number</label>
                                        <input type="text"  class="form-control" name="absentLateControlNumber" required>
                                    </div>
                                    <!-- Purpose -->
                                    <label for="">Purpose</label>
                                    <textarea name="absentLateReason" id="" cols="15" rows="5"  class="form-control purpose" placeholder="Type here..." required></textarea>
                                    <button class="btn btn-warning absentLateSubmit" >Submit</button>
                                </div>
                            </div>
                        @else
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Name -->
                                <input type="text" name="employeeID" class="form-control" value=""  hidden readonly>
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text"  class="form-control employeeName" placeholder=""   readonly>
                                </div>
                                <!-- Date Filed -->
                                <div class="form-group">
                                    <label for="">Date Filed</label>
                                    <input type="date"  class="form-control" name="absentLateDateFiled" readonly>
                                </div>
                                <!-- Type of Absent -->
                                <div class="form-group">
                                    <label for="">Type of Absent / Late</label>
                                    <select id="typeOfAbsentLate" class="form-control status" name="typeOfAbsent" disabled="disabled">
                                        <option value="">. . .</option>
                                        <option value="Whole Day" >Whole Day</option>
                                        <option value="Half Day">Half Day</option>
                                        <option value="Late">Late</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Control Number -->
                                <div class="form-group absentLateControlNumber">
                                    <label for="absentLateControlNumber">Control Number</label>
                                    <input type="text"  class="form-control" name="absentLateControlNumber" readonly>
                                </div>
                                <!-- Purpose -->
                                <label for="">Purpose</label>
                                <textarea name="absentLateReason" id="" cols="15" rows="5"  class="form-control purpose" placeholder="Type here..." readonly></textarea>
                            </div>
                        </div> 
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('js/absentlateadd.js')}}"></script>
@endsection