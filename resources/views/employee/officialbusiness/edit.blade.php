@extends('layouts.app')

@section('content')

<div class="section-edit-official-business">
    <div class="row">
        <div class="col-md-6">
            <x-breadcrumbs breadCrumbs="EMPLOYEE / OFFICIAL BUSINESS"/>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Official Business Form
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <form action="/official-business/{{$officialBusiness->id}}" method="POST" id="editObForm" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
        
                        <div class="row">
                            
                            <div class="col-md-6 mx-auto">
                                <!-- Name of Employee -->
                                <div class="form-group">
                                    <label for="">Name</label>
                                        @foreach($employees as $employee)
                                            @if($employee->id == $officialBusiness->employee_id)
                                            <input type="text"  class="form-control employeeName" value="{{$employee->cl_first_name}} {{$employee->cl_middle_name}} {{$employee->cl_last_name}} {{$employee->cl_name_ext}}"  readonly>
                                            @endif
                                        @endforeach
                                </div>

                                <!-- Date Filed -->
                                <div class="form-group">
                                    <label for="obDateFiled">Date Filed</label>
                                    <input type="text"  class="form-control" name="obDateFiled" value="{{ \Carbon\Carbon::parse($officialBusiness->cl_date_file)->format('F j, Y') }}" readonly>
                                    <input type="text" name="obDateFiled" class="form-control" value="{{$officialBusiness->cl_date_file}}" hidden>    
                                </div>
        
                                <!-- Destination-->
                                <div class="form-group">
                                    <label for="">Destination</label>
                                    <input type="text"  class="form-control" name="obDestination" value="{{$officialBusiness->cl_destination}}" readonly>
                                </div>
                                
                                <!-- Time Out -->
                                <div class="form-group">
                                    <label for="">Time Out</label>
                                    <input type="time"  class="form-control" name="obTimeOut" value="{{$officialBusiness->cl_time_out}}" readonly>
                                </div>
                                
                                <!-- Number of Hours -->
                                <div class="form-group">
                                    <label for="">Number of Hours</label>
                                    <input type="text"  class="form-control" name="obNumberofHours" value="{{$officialBusiness->cl_number_of_hours}}"readonly>
                                </div>

                                 <!-- Status -->
                                 <div class="form-group">
                                    <label for="">Status</label>
                                    <select id="selectStatus" class="form-control status" name="obStatus">
                                        <option value="">. . .</option>
                                        <option value="Approved" >Approved</option>
                                        <option value="Declined">Declined</option>
                                    </select>
                                     <span id="errorSpan"></span>
                                </div>
        
                                <!-- Attachment -->
                                <div class="form-group-file" id="attachmentUpload" >
                                    <label for="fileUpload" class="labelAttachBtn">Attach File</label>
                                    <input type="file" id="fileUpload" accept=".JPG, .jpg, .jpeg, .png, .pdf" name="attachmentFileImage" class="fileAttach">
                                </div>
                            </div>
                                
                            
                            <div class="col-md-6">
                                <!-- Control Number -->
                                <div class="form-group obControlNum">
                                    <label for="">Control Number</label>
                                    <input type="text"  class="form-control" name="obControlNumber" value="{{$officialBusiness->cl_control_number}}" readonly>
                                </div>

                                    <!-- Purpose -->
                                <label for="">Purpose</label>
                                <textarea name="obReason" id="" cols="15" rows="5"  class="form-control purpose" readonly>{{$officialBusiness->cl_reason}}</textarea>
                            
                                <!-- Time In -->
                                <div class="form-group">
                                    <label for="">Time In</label>
                                    <input type="time"  class="form-control" name="obTimeIn" value="{{$officialBusiness->cl_time_in}}" readonly>
                                </div>
                            
                                <!-- Date Covered -->
                                <div class="form-group">
                                    <label for="obDateCovered">Date Covered</label>
                                    <input type="text"  class="form-control" name="obDateCovered" value="{{ \Carbon\Carbon::parse($officialBusiness->cl_date_file)->format('F j, Y') }}" readonly>
                                    <input type="text" name="obDateCovered" class="form-control" value="{{$officialBusiness->cl_date_covered}}" hidden>
                                </div>

                                <!-- Approved By -->
                                <div class="form-group">
                                    <label for="">Approved By</label>
                                    <select id="selectApprove" class="form-control approvedBy" name="obApprovedBy" >
                                    <option value="">. . .</option>
                                        @foreach($employees as $employee)
                                            <option value="{{$employee->id}}">{{$employee->cl_first_name}} {{$employee->cl_middle_name}} {{$employee->cl_last_name}} {{$employee->cl_name_ext}}</option>
                                        @endforeach
                                    </select>
                                    <span id="approveSpan"></span>
                                </div>
    
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button class="btn btn-warning" id="UpdateObBtn">Update</button>
        </div>

    </div>
    
</div>

<script src="{{ asset('js/officialbusinessedit.js')}}" ></script>
@endsection