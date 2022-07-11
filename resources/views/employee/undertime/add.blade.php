@extends('layouts.app')

@section('content')
<div class="section-add-undertime">
    <!-- Undertime Add List -->
    <div class="row">
        <div class="col-md-6">
            <x-breadcrumbs breadCrumbs="Employee/Employee Undertime"/>
        </div>
    </div>
    
    <!-- Undertime Add List undertimeAddContent-->
    <div class="card">
        <div class="row">
            <div class="col-md-6 undertimeAddCardLeft">
                <!-- First Card -->
                <div class="card-header left-header">
                    <div class="row">
                        <div class="col-md-6 undertime-title">
                            Employee List
                        </div>
                        <div class="col-md-6 text-right">
                            <!-- class search-input is use in js and the data-table = undertime-list refers to the table class -->
                            <input type="text" class="search-input w-100" placeholder="Search . . ." data-table="employee-list-body">
                        </div>
                    </div>
                </div>
            
                <!-- Second Card -->
                <div class="card-body">
                    <table class="employee-list table">
                        <thead>
                            <th class="employee-number">Employee Number</th>
                            <th class="fullname">Fullname</th>
                            <th>Action</th>
                        </thead>
                    </table>
                    <div class="div-body table-size-body">
                        <table class="employee-list-body">
                            <tbody>
                            @foreach($employees as $employee)
                                    <tr>
                                        <td class="tdIdNum">{{$employee->cl_id_number}}</td>
                                        <td class="tdfullname">{{$employee->cl_first_name}} {{$employee->cl_middle_name}} {{$employee->cl_last_name}} {{$employee->cl_name_ext}}</td>
                                        <td class="tdAddbtn">
                                            <a href = "/undertime/{{$employee->id}}" class="btn">
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


            
            <div class="col-md-6 undertimeAddCardRight">
                <!-- First Card -->
                <div class="card-header undertimeAddForm">
                    <div class="row">
                        <div class="col-md-6 undertime-title">
                            Undertime Form
                        </div>
                    </div>
                </div>
                <!-- Second Card -->
                <div class="card-body undertimeCardBodyBG">
                    <form action="/undertime" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(isset($soloemployee))
                            <!-- If mag add for employee undertime -->
                            <div class="row">
                                <!-- Left Col-Div -->
                                <div class="col-md-6">
                                    <!-- employeeID hidden -->
                                    <input type="text" name="employeeID" class="form-control" value="{{$soloemployee->id}}" hidden>

                                    <!-- Name Div -->
                                    <div class="form-group">
                                        <label for="nameInput">Name</label>
                                        <input type="text" class="form-control hasValName" name="nameInput" value="{{$soloemployee->cl_first_name}} {{$soloemployee->cl_middle_name}} {{$soloemployee->cl_last_name}} {{$soloemployee->cl_name_ext}}" readonly required>
                                    </div>

                                    <!-- Date Filed Div -->
                                    <div class="form-group">
                                        <label for="dateFiledInput">Date Filed</label>
                                        <input type="date" class="form-control" name="dateFiledInput" required>
                                    </div>

                                    <!-- Time Started Div -->
                                    <div class="form-group">
                                        <label for="timeStartedInput">Time Started</label>
                                        <input type="time" class="form-control" name="timeStartedInput" required>
                                    </div>
                                    
                                    <!-- Number of Hours Div -->
                                    <div class="form-group">
                                        <label for="totalnumberInput">Total Number of Hours</label>
                                        <input type="text" class="form-control" name="totalnumberInput" required>
                                    </div>

                                    <!-- Substituted By Div -->
                                    <div id="divSubstituted" class="form-group divSubstituted">
                                        <label for="substitutedBy">Substituted By</label>
                                        <select id="substitutedInputID" class="form-control" name="substitutedBy">
                                            <option value="">. . .</option>
                                            @foreach($employees as $employee)
                                                <option value="{{$employee->id}}">{{$employee->cl_first_name}} {{$employee->cl_middle_name}} {{$employee->cl_last_name}} {{$employee->cl_name_ext}}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                </div>

                                <!-- Right Col-Div -->
                                <div class="col-md-6">
                                    <!-- Control Number Div -->
                                    <div class="form-group">
                                        <label for="controlNumberInput">Control Number</label>
                                        <input type="text" class="form-control" name="controlNumberInput" required>
                                    </div>

                                    <!-- Reason Div -->
                                    <div class="form-group">
                                        <label for="reason">Reason</label>
                                        <textarea id="" class="form-control" rows="4" placeholder="Reason. . ." name="reason" required></textarea>
                                    </div>

                                    <!-- Position Div -->
                                    <div class="form-group">
                                        <label for="position">Postion</label>
                                        <select id="positionSelect" class="form-control" name="position" required>
                                            <option value="">. . .</option>
                                            @foreach($positions as $position)
                                                <option value="{{$position['value']}}">{{$position['label']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button class="btn float-right">Submit</button>
                                </div>
                            </div>


                        @else
                        <div class="row">
                                <!-- Left Col-Div -->
                                <div class="col-md-6">
                                    <!-- Name Div -->
                                    <div class="form-group">
                                        <label for="nameInput">Name</label>
                                        <input type="text" class="form-control noValName" name="nameInput" disabled required>
                                    </div>

                                    <!-- Date Filed Div -->
                                    <div class="form-group">
                                        <label for="dateFiledInput">Date Filed</label>
                                        <input type="date" class="form-control noValDateFiled" name="dateFiledInput" disabled required>
                                    </div>

                                    <!-- Time Started Div -->
                                    <div class="form-group">
                                        <label for="timeStartedInput">Time Started</label>
                                        <input type="time" class="form-control noValTimeStarted" name="timeStartedInput" disabled required>
                                    </div>

                                    <!-- Number Of Hours Div -->
                                    <div class="form-group">
                                        <label for="totalnumberInput">Total Number of Hours</label>
                                        <input type="text" class="form-control noValNumHours" name="totalnumberInput" disabled required>
                                    </div>

                                    <!-- Substituted By Div -->
                                    <div id="divSubstituted" class="form-group divSubstituted">
                                        <label for="substitutedBy">Substituted By</label>
                                        <select id="substitutedInputID" class="form-control noValSubsitutedBy" name="substitutedBy">
                                            <option value="">. . .</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Right Col-Div -->
                                <div class="col-md-6">
                                    <!-- Control Number -->
                                    <div class="form-group">
                                        <label for="controlNumberInput">Control Number</label>
                                        <input type="text" class="form-control noValControlNum" name="controlNumberInput" disabled required>
                                    </div>
                                    <!-- Reason Div -->
                                    <div class="form-group">
                                        <label for="reason">Reason</label>
                                        <textarea id="" class="form-control noValReason" rows="4" name="reason" disabled required></textarea>
                                    </div>

                                    <!-- Position Div -->
                                    <div class="form-group">
                                        <label for="position">Postion</label>
                                        <select id="positionSelect" class="form-control noValPosition" name="position" disabled required>
                                            <option value="">. . .</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        @endif  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="{{asset('js/undertime-add.js')}}"></script>
@endsection