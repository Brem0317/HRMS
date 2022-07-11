<div class="rightForm">
    <div class="rightTop">
        <h4>Leave Form</h4>
    </div>
    <div class="rightBody">
        <form action="/leave" method="POST" enctype="multipart/form-data" id="addLeaveForm">
            @csrf
            @if(isset($soloemployee))
                <input type="text" name="employeeID" class="form-control" value="{{$soloemployee->id}}" hidden>                                            
                <div class="col-md-6 formDiv">
                    <div class="form-group">
                        <label for="leaveName">Name</label>                        
                        @if ($soloemployee->cl_middle_name !== NULL)
                            <input type="text" name="leaveName" class="form-control" placeholder="{{$soloemployee->cl_first_name}} {{$soloemployee->cl_middle_name[0]}}. {{$soloemployee->cl_last_name}}" readonly>                            
                        @else
                            <input type="text" name="leaveName" class="form-control" placeholder="{{$soloemployee->cl_first_name}} {{$soloemployee->cl_last_name}}" readonly>
                        @endif
                    </div>                                          
                    <div class="form-group">
                        <label for="leaveDateFiled">Date Filed</label>
                        <input type="date" name="leaveDateFiled" class="form-control dateToday">
                    </div>
                    <div class="form-group">
                        <label for="leaveStartDate">Start Date</label>
                        <input type="date" name="leaveStartDate" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="leaveEndDate">End Date</label>
                        <input type="date" name="leaveEndDate" class="form-control" required>
                    </div>                    
                </div>
                <div class="col-md-6 formDiv">
                    <div class="form-group">
                        <label for="leaveControlNumber">Control Number</label>
                        <input type="text" name="leaveControlNumber" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="leaveReason">Reason</label>      
                        <textarea class="form-control" name="leaveReason" placeholder="Type here..." required></textarea>
                    </div>  
                    <div class="form-group">
                        <label for="leaveLeaveType">Type of Leave</label>
                        <select name="leaveLeaveType" class="form-control" required>
                            <option value="">---</option>
                            <option value="Vacation">Vacation</option>
                            <option value="Sick">Sick</option>
                            <option value="Maternity">Maternity</option>
                            <option value="Paternity">Paternity</option>
                        </select>
                    </div>
                </div>
            @else                                    
                <div class="col-md-6 formDiv">
                    <div class="form-group">
                        <label for="leaveName">Name</label>
                        <input type="text" name="leaveName" class="form-control" disabled>
                    </div>                                            
                    <div class="form-group">
                        <label for="leaveDateFiled">Date Filed</label>
                        <input type="date" name="leaveDateFiled" disabled class="form-control dateToday">
                    </div>
                    <div class="form-group">
                        <label for="leaveStartDate">Start Date</label>
                        <input type="date" name="leaveStartDate" disabled class="form-control">
                    </div>                                            
                    <div class="form-group">
                        <label for="leaveEndDate">End Date</label>
                        <input type="date" name="leaveEndDate" disabled class="form-control">
                    </div>                                      
                </div>
                <div class="col-md-6 formDiv">
                    <div class="form-group">
                        <label for="leaveControlNumber">Control Number</label>
                        <input type="text" name="leaveControlNumber" disabled class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="leaveReason">Reason</label>                                           
                        <textarea class="form-control" name="leaveReason" placeholder="Type here..." disabled></textarea>
                    </div>
                    <div class="form-group">
                        <label for="leaveLeaveType">Type of Leave</label>
                        <select name="leaveLeaveType" disabled class="form-control">
                            <option selected>---</option>
                            <option value="Vacation">Vacation</option>
                            <option value="Sick">Sick</option>
                            <option value="Maternity">Maternity</option>
                            <option value="Paternity">Paternity</option>
                        </select>
                    </div>
                </div>
            @endif
            @if(isset($soloemployee))
                @if ($soloemployee->cl_first_name !== NULL)
                    <button class="btn sectionAddBtn" id="leaveSubmitBtn">Submit</button>                           
                @endif
            @endif
        </form>                            
    </div>         
</div><!-- right form -->