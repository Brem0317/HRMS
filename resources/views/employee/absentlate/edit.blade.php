@extends('layouts.app')

@section('content')

<div class="section-edit-absent-late">
    <div class="row">
        <div class="col-md-6">
            <x-breadcrumbs breadCrumbs="EMPLOYEE / EMPLOYEE ABSENT & LATE"/>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Absent & Late Form
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <form action="/absent-late/{{$absentLate->id}}" method="POST" id="editAbsentLateForm" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
        
                        <div class="row">
                            
                            <div class="col-md-6 mx-auto">
                                <!-- Name of Employee -->
                                <div class="form-group">
                                    <label for="">Name</label>
                                        @foreach($employees as $employee)
                                            @if($employee->id == $absentLate->employee_id)
                                            <input type="text"  class="form-control employeeName" value="{{$employee->cl_first_name}} {{$employee->cl_middle_name}} {{$employee->cl_last_name}} {{$employee->cl_name_ext}}"  readonly>
                                            @endif
                                        @endforeach
                                </div>

                                <!-- Date Filed -->
                                <div class="form-group">
                                    <label for="absentLateDateFiled">Date Filed</label>
                                    <input type="text"  class="form-control" name="absentLateDateFiled" value="{{ \Carbon\Carbon::parse($absentLate->cl_date_file)->format('F j, Y') }}" readonly>
                                    <input type="text" class="form-control" name="absentLateDateFiled"  value="{{$absentLate->cl_date_file}}" hidden>    
                                </div>

                                 <!-- Type of Absent -->
                                 <div class="form-group">
                                    <label for="">Type of Absent / Late</label>
                                    <select id="typeOfAbsentLate" class="form-control typeOfAbsentLate" name="typeOfAbsentLate" readonly>
                                        <option value="{{$absentLate->cl_type_of_absent_late}}">{{$absentLate->cl_type_of_absent_late}}</option>
                                    </select>
                                </div>
        
                                 <!-- Status -->
                                 <div class="form-group">
                                    <label for="">Status</label>
                                    <select id="selectStatus" class="form-control status" name="absentLateStatus">
                                        <option value="">. . .</option>
                                        <option value="Approved" >Approved</option>
                                        <option value="Declined">Declined</option>
                                        <option value="No Call, No Show">No Call, No Show</option>
                                    </select>
                                     <span id="errorSpan"></span>
                                </div>
        
                                <!-- Attachment -->
                                <div class="form-group-file" id="absentLateUpload" >
                                    <label for="attachmentUpload" class="labelAttachment">Attach File</label>
                                    <input type="file" id="attachmentUpload" accept=".JPG, .jpg, .jpeg, .png, .pdf" name="attachmentUpload01" class="fileAttachment"> 
                                </div>

                            </div>
                                
                            
                            <div class="col-md-6">
                                <!-- Control Number -->
                                <div class="form-group absentLateControlNumber">
                                    <label for="">Control Number</label>
                                    <input type="text"  class="form-control" name="absentLateControlNumber" value="{{$absentLate->cl_control_number}}" readonly>
                                </div>

                                    <!-- Purpose -->
                                <label for="">Purpose</label>
                                <textarea name="absentLateReason" id="" cols="15" rows="5"  class="form-control purpose" readonly>{{$absentLate->cl_reason}}</textarea>
                            
                               
                                <!-- Approved By -->
                                <div class="form-group">
                                    <label for="">Approved By</label>
                                    <select id="selectApprove" class="form-control approvedBy" name="absentlateApprovedBy">
                                    <option value="">. . .</option>
                                        @foreach($employees as $employee)
                                            <option value="{{$employee->id}}">{{$employee->cl_first_name}} {{$employee->cl_middle_name}} {{$employee->cl_last_name}} {{$employee->cl_name_ext}}</option>
                                        @endforeach
                                    </select>
                                    <span id="approveSpan"></span>
                                </div>

                                <!-- Apply For -->
                                <div class="form-group">
                                    <label for="">Apply For</label>
                                    <select id="selectApplyFor" class="form-control applyFor" name="selectApplyFor">
                                        <option value="">. . .</option>
                                        <option value="Sick Leave" >Sick Leave</option>
                                        <option value="Vacation Leave">Vacation Leave</option>
                                    </select>
                                     <span id="approveSpan"></span>
                                </div>

                                <!-- Attachment -->
                                <div class="form-group-file" id="absentLateUpload" >
                                    <div><label for="" class="">Leave Form</label> </div>
                                    <label for="attachmentUpload2" class="labelAttachment">Attach File</label>
                                    <input type="file" id="attachmentUpload2" accept=".JPG, .jpg, .jpeg, .png, .pdf" name="attachmentUpload02" class="fileAttachment"> 
                                </div>
    
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button class="btn btn-warning" id="updateAbsentLateBtn">Update</button>
        </div>

    </div>
    
</div>

<script src="{{ asset('js/absentlateedit.js')}}" ></script>
@endsection