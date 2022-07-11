@extends('layouts.app')
@section('content')
<div class="section-employee-list">
    <div class="row">
        <div class="col-md-6 breadCrumb">
            <x-breadcrumbs breadCrumbs="Employee"/>
        </div>
        <div class="col-md-6" >

 
            <a href="/employee" type="button" class="btn btn-primary registerBtn">Register Employee</a>
 
        </div>
    </div>   
    <!-- Additional Codes Here  -->
 
    <div class="card">
        <div class="card-header">

            <div class="row">
                <div class="col-md-6">
                    {{-- <h6>Total Employees ({{$employee_count}})</h6> --}}
                </div>

                <div class="col-md-6">
                    <div style="float:right">
                        <div class="row">
                            <div class="col searchBox"> <input type="text" class="form-control search-input employeeSearchClass"  data-table="employeeSearch-list" placeholder="Search..."></div>
                            <div class="col">
                                <button class="btn print">
                                    <i class="fas fa-print"></i>
                                </button>

                                <button class="btn download">
                                    <i class="fas fa-download"></i>
                                </button>
                            </div>
                        </div>
                    </div>                       
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row ">
                <div class="col-md-6">
                    <div class="row filterByBody">
        
                        <div class="filterTitle"> Filter By</div>
        
                        <div class="form-group">
                            <select id="" class="form-control " name="" >
                            <option value="">Department . . .</option>
                                {{-- @foreach($departments as $department)
                                    <option value="">{{$department->cl_department_name}}</option>
                                @endforeach --}}
                            </select>
                        </div>
        
                        <div class="form-group">
                            <select id="" class="form-control " name="" >
                            <option value="">Position. . .</option>
                                {{-- @foreach($positions as $position)
                                    <option value="">{{$position->cl_position_name}}</option>
                                @endforeach --}}
                            </select>
                        </div>
                    </div>
        
                </div>
            </div>
            <div class="tableFormFixHead">
                <table class="table employeeSearch-list">
                    <thead>
                        <th class="w-20">Employee Number</th>
                        <th class="w-20">Name</th>
                        <th class="w-20">Department</th>
                        <th class="w-20">Position</th>
                        <th class="w-10">Action</th>
                    </thead>
            
                    <tbody>
                        <tr>
                            <td>JCAH20190092</td>
                            <td>John Carl A. Hicban</td>
                            <td>Development</td>
                            <td>Sinovac</td>
                            <td><a ><i class="fas fa-pen"></i></a></td>
                        </tr>
                        {{-- @foreach($employees as $employee)
                            <tr>
                                <td>
                                    {{$employee->cl_id_number}}
                                </td>
                                <td>
                                    <a href="">{{$employee->cl_first_name}} {{$employee->cl_middle_name}} {{$employee->cl_last_name}} {{$employee->cl_name_ext}}</a> 
                                </td> --}}
            
                                 <!-- For Employee Department -->
                                {{-- @foreach($employeeworkscheds as $employeeworksched)
                                    @if($employee->id == $employeeworksched->employee_id)
                                        @foreach($departments as $department)
                                            @if($employeeworksched->department_id == $department->id)
                                                <td>{{$department->cl_department_name}}</td>
                                            @endif 
                                        @endforeach
                                    @endif
                                @endforeach --}}
            
                                <!-- For Employee Department -->
                                {{-- @foreach($employeeworkscheds as $employeeworksched)
                                    @if($employee->id == $employeeworksched->employee_id)
                                        @foreach($positions as $position)
                                            @if($employeeworksched->position_id == $position->id)
                                                <td>{{$position->cl_position_name}}</td>
                                            @endif 
                                        @endforeach
                                    @endif
                                @endforeach --}}
            
                                
                                <!-- For Action -->
                                {{-- <td>
            
                                    <div class="row">
                                        <form action="" method="POST">
                                            @csrf
                                            @method('GET')
                                            <button class="btn calendarBtn"><i class="fas fa-calendar-alt"></i></button>
                                        </form>
                                        <form action="" method="POST">
                                                @csrf
                                                @method('GET')
                                                <button class="btn eyeBtn"><i class="fas fa-eye"></i></button>
                                        </form>
                                        <form action="/employee/{{$employee->id}}/edit" method="POST">
                                                @csrf
                                                @method('GET')
                                                <button class="btn penBtn"><i class="fas fa-pen"></i></button>
                                        </form>
                                        
                                    </div>
                                </td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>           
 
        </div>


<script src="{{asset('js/search.js')}}"></script>
@endsection

