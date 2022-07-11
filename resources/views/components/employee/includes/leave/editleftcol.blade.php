<div class="col-md-3 formDiv">
    <div class="form-group">
        <label for="leaveName">Name</label>                                    
        <input type="text"  class="form-control" placeholder="{{$employee->cl_first_name}} {{$employee->cl_middle_name[0]}}. {{$employee->cl_last_name}}"  readonly>  
        
    </div>
    <div class="form-group">
        <label for="leaveDateFiled">Date Filed</label>
        <input type="text" name="leaveDateFiled" class="form-control" value="{{ \Carbon\Carbon::parse($leave->cl_date_file)->format('F j, Y') }}" readonly>                                            
        <input type="text" name="leaveDateFiled" class="form-control" value="{{$leave->cl_date_file}}" hidden>                                        
    </div>
    <div class="form-group">
        <label for="leaveStartDate">Start Date</label>
        <input type="text" name="leaveStartDate" class="form-control" value="{{ \Carbon\Carbon::parse($leave->cl_start_date)->format('F j, Y') }}" readonly>
        <input type="text" name="leaveStartDate" class="form-control" value="{{$leave->cl_start_date}}" hidden>
    </div>
    <div class="form-group">
        <label for="leaveEndDate">End Date</label>
        <input type="text" name="leaveEndDate" class="form-control" placeholder="{{ \Carbon\Carbon::parse($leave->cl_end_date)->format('F j, Y') }}" readonly>
        <input type="text" name="leaveEndDate" class="form-control"  value="{{$leave->cl_end_date}}" hidden>
    </div>
    <div class="form-group">
        <label for="leaveStatus">Status</label>
        <select name="leaveStatus" class="form-control" id="statusSelect">
            @if($leave->cl_status == "Approved")
                <option value="Approved" selected>Approved</option>
                <option value="Declined">Declined</option>
            @elseif($leave->cl_status == "Declined")
                <option value="Approved">Approved</option>
                <option value="Declined" selected>Declined</option>
            @else
                <option value="">---</option>
                <option value="Approved">Approved</option>
                <option value="Declined">Declined</option>
            @endif
        </select>
    </div>                                               
</div>
<div class="col-md-3 formDiv">
    <div class="form-group">
        <label for="leaveControlNumber">Control Number</label>
        <input type="text" name="leaveControlNumber" class="form-control" value="{{$leave->cl_control_number}}" readonly>
    </div>
    <div class="form-group">
        <label for="leaveReason">Reason</label>                                           
        <textarea name="leaveReason" class="form-control" readonly>{{$leave->cl_reason}}</textarea>
    </div>                                   
    <div class="form-group">
        <label for="leaveApprovedBy">Approved By</label> 
        <select name="leaveApprovedBy" class="form-control">            
            @foreach($employees as $employee)
                @if($leave->cl_approved_by == $employee->id)
                    <option value="{{$employee->id}}" style="display: none;" selected>{{$employee->cl_first_name}} {{$employee->cl_middle_name[0]}}. {{$employee->cl_last_name}}</option>
                @endif
                <option value="{{$employee->id}}">{{$employee->cl_first_name}} {{$employee->cl_middle_name[0]}}. {{$employee->cl_last_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="leaveLeaveType">Type of Leave</label>
        <select name="leaveLeaveType" class="form-control" readonly>
            <option value="{{$leave->cl_type_of_leave}}">{{$leave->cl_type_of_leave}}</option>
        </select>
    </div>
</div>