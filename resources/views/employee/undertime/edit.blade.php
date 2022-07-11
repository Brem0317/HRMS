@extends ('layouts.app')

@section('content')
<div class="section-edit-undertime">
    <div class="row"> 
        <div class="col-md-6">
            <x-breadcrumbs breadCrumbs="EMPLOYEE > EMPLOYEE UNDERTIME"/>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Undertime Form
        </div>

        <div class="card-body">
            <form action="/undertime/{{$undertime->id}}" method="POST" id="editUndertimeForm" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- Left Col-Div -->
                    <div class="col-md-6">    
                        <!-- Name Div -->
                        <div class="form-group">
                            <label for="nameInput">Name</label>
                            @foreach($employees as $employee)
                                @if($employee->id == $undertime->employee_id)
                                    <input type="text" class="form-control readonlyInput" name="nameInput" value="{{$employee->cl_first_name}}" readonly>
                                @endif
                            @endforeach
                        </div>
    
                        <!-- Date Filed Div -->
                        <div class="form-group">
                            <label for="dateFiledInput">Date Filed</label>
                            <!-- <input type="date" class="form-control" name="dateFiledInput" value="{{$undertime->cl_date_file}}"> -->
                            <input type="text" name="dateFiledInput" class="form-control readonlyInput" value="{{ \Carbon\Carbon::parse($undertime->cl_end_date)->format('F j, Y') }}" readonly>
                            <input type="text" name="dateFiledInput" class="form-control readonlyInput" value="{{$undertime->cl_date_file}}" hidden>
                        </div>
    
                        <!-- Time Started Div -->
                        <div class="form-group">
                            <label for="timeStartedInput">Time Started</label>
                            <input type="time" class="form-control readonlyInput" name="timeStartedInput" value="{{$undertime->cl_time_started}}" readonly>
                        </div>
    
                        <!-- Number Of Hours Div -->
                        <div class="form-group">
                            <label for="totalnumberInput">Number of Hours</label>
                            <input type="text" class="form-control readonlyInput" name="totalnumberInput" value="{{$undertime->cl_number_of_hours}}" readonly>
                        </div>

                        <!-- Position Div -->
                        <div class="form-group">
                            <label for="position">Postion</label>
                            <select id="positionSelect" class="form-control" name="position" >
                                <option value="">. . .</option>
                                @foreach($positions as $position)
                                    @if($undertime->cl_position == $position['value'])
                                        <option value="{{$undertime->cl_position}}" selected>{{$position['label']}}</option>
                                    @else
                                        <option value="{{$position['value']}}">{{$position['label']}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <!-- SubstitutedBy Div -->
                        <div id="divSubstituted" class="form-group divSubstituted">
                            <label for="substitutedBy">Substituted By</label>
                            <select id="substitutedInputID" class="form-control" name="substitutedBy">
                                @if($undertime->cl_substituted_by)
                                    @foreach($employees as $employee)
                                        @if($undertime->cl_substituted_by == $employee->id)
                                            <option value="{{$undertime->cl_substituted_by}}">{{$employee->cl_first_name}} {{$employee->cl_middle_name}} {{$employee->cl_last_name}} {{$employee->cl_name_ext}}</option>
                                        @endif
                                    @endforeach
                                @endif
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
                            <input type="text" class="form-control readonlyInput" name="controlNumberInput" value="{{$undertime->cl_control_number}}" readonly>
                        </div>

                        <!-- Reason Div -->
                        <div class="form-group">
                            <label for="reason">Reason</label>
                            <textarea id="" class="form-control readonlyInput" rows="4" placeholder="Reason. . ." name="reason" readonly>{{$undertime->cl_reason}}</textarea>
                        </div>

                        <!-- Status Div -->
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select id="statusSelect" class="form-control" name="status" value="{{$undertime->cl_status}}">
                                <option value="">. . .</option>
                                @foreach($statuses as $status)
                                    @if($undertime->cl_status == $status['value'])
                                        <option value="{{$undertime->cl_status}}" selected>{{$status['label']}}</option>
                                    @else
                                        <option value="{{$status['value']}}">{{$status['label']}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <!-- Approved By Div -->
                        <div class="form-group divApprovedBy">
                            <label for="approvedBy">Approved By</label>
                            <select id="" class="form-control" name="approvedBy">
                                @if($undertime->cl_approved_by)
                                    @foreach($employees as $employee)
                                        @if($undertime->cl_approved_by == $employee->id)
                                            <option value="{{$undertime->cl_approved_by}}">{{$employee->cl_first_name}} {{$employee->cl_middle_name}} {{$employee->cl_last_name}} {{$employee->cl_name_ext}}</option>
                                        @endif
                                    @endforeach
                                @endif
                                <option value="">...</option>
                                @foreach($employees as $employee)
                                    <option value="{{$employee->id}}">{{$employee->cl_first_name}} {{$employee->cl_middle_name}} {{$employee->cl_last_name}} {{$employee->cl_name_ext}}</option>
                                @endforeach
                            </select>
                        </div>
    
                        <!-- File Upload Div -->
                        <div id="divImageInput" class="form-group">
                            <input type="file" id="undertimeImageInput" class="undertimeImageInputClass" name="undertimeImage" >
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="card-footer">
            <button id="updateEditBtn" class="btn float-right">Update</button>
        </div>
    </div>

</div>

<script src="{{ asset('js/undertime-edit.js') }}"></script>
@endsection 