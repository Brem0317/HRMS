@extends('layouts.app')
@section('content')
<div class="section-edit-overtime">
    <div class="row">
        <!-- For Breadcrumbs -->
        <div class="col-md-12">
            <x-breadcrumbs breadCrumbs="Employee / Employee overtime "/>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-12">
                    Overtime Form
                </div>
            </div>
        </div>
        <form action="/overtime/{{$overtime->id}}" method="POST" id="editOvertimeForm" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="overtime-content">
                    <div class="row"> 
                        <div class="col-md-6">
                            <!-- Employee ID -->
                            <input type="text" class="form-control" name="overtimeID" value="{{$overtime->id}}" readonly hidden>

                            <div class="form-group ">
                                <label for="">Name</label>
                                @foreach($employees as $employee)
                                    @if($overtime->employee_id == $employee->id)
                                        <input type="text" class="form-control inputReadOnly" name="employeeID" value="{{$employee->cl_first_name}} {{$employee->cl_middle_name}} {{$employee->cl_last_name}} {{$employee->cl_name_ext}}" readonly>
                                    @endif
                                @endforeach
                            </div>
                            <div class="form-group pt-1" >
                                <label for="">Date Filed</label>
                                <input type="date" class="form-control inputReadOnly" name="dateFiledInput" value="{{$overtime->cl_date_file}}" readonly required>
                            </div>                                                                                          
                            <div class="form-group">
                                <label for="">Time Started</label>
                                <input type="time" class="form-control inputReadOnly" name="timeStartedInput" value="{{$overtime->cl_time_started}}" readonly required>
                            </div>
                            <div class="form-group">
                                <label for="">Time End</label>
                                <input type="time" class="form-control inputReadOnly" name="timeEndInput" value="{{$overtime->cl_time_ended}}" readonly required>
                            </div>
                            <div class="form-group">
                                <label for="">Total Time</label>
                                <input type="text" class="form-control inputReadOnly" name="totalTimeInput" value="{{$overtime->cl_total_time}}" readonly required>
                            </div>
                            <div class="form-group">
                                <label for="">Status</label> <span id="errorSpan" class="errorNotification"></span>
                                <select id="statusIdSelect" name="statusSelect" class="form-control" required>
                                    <option value="">. . .</option>
                                    <option value="Approved">Approved</option>
                                    <option value="Declined">Declined</option>
                                </select>
                                
                            </div>

                            <div id="overtimeStatus" class="form-group-file">
                                <!-- <img src="{{asset($overtime->cl_attachment)}}" alt="">{{$overtime->cl_attachment}} -->
                                <label for="fileUpload" class="labelAttachBtn">Attach File</label>
                                <input type="file" id="fileUpload" name="attachmentFileImage" class="fileAttach">
                            </div>
                        </div>

                        <!-- Reasons -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Control Number</label>
                                <input type="text" class="form-control inputReadOnly" name="controlNumberInput" value="{{$overtime->cl_control_number}}" placeholder=". . ." readonly required>
                            </div>
                            <div class="form-group">
                                <label for="">Reason</label>
                                <textarea id="" cols="15" rows="5"  class="form-control inputReadOnly" name="reasonTextarea" placeholder="" readonly required>{{$overtime->cl_reason}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Type of Overtime</label>
                                <input type="text" class="form-control inputReadOnly" name="overtimeTypeSelect" value="{{$overtime->cl_type}}" placeholder=". . ." readonly required>
                            </div>
                            <div class="form-group">
                                <label for="">Effective Date</label>
                                <input type="date" class="form-control inputReadOnly" name="effectiveDateInput" value="{{$overtime->cl_effective_date}}" readonly required>
                            </div>
                            <div class="form-group">
                                <label for="">Approved By</label> 
                                <span id="approveErrorSpan" class="errorNotification"></span>
                                <select id="approvedIDSelect" class="form-control" name="approvedBy" required>
                                    <!-- @if($overtime->employee_id == $employee->id)
                                    {{$employee->cl_first_name}} {{$employee->cl_middle_name}} {{$employee->cl_last_name}} {{$employee->cl_name_ext}}
                                    @endif -->
                                    <option value="">. . .</option>
                                    @foreach($employees as $employee)
                                        <option value="{{$employee->id}}">{{$employee->cl_first_name}} {{$employee->cl_middle_name}} {{$employee->cl_last_name}} {{$employee->cl_name_ext}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <button class="btn" id="editSubmitOvertimeBtn">Update</button>
            </div>
        </form>
    </div>
</div>

<!-- <script src="{{asset('js/edit.js')}}"></script> -->
@endsection