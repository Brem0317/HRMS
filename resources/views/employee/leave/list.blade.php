@extends('layouts.app')
@section('content')
<section>
    <div class="section-leave-list">
        <div class="row">        
            <div class="col-md-6">
                <x-breadcrumbs breadCrumbs="Employee Leave"/>
            </div>
            <div class="col-md-6">
                <a href="/add-employee-leave" class="btn float-right sectionAddBtn">Add Leave</a>
            </div>
        </div><!-- row -->
        <div class="card">
            <div class="card-header">Employee Leave List</div>
            <div class="card-body">
                <div class="row">
                    <div class="inputSearch">
                        <input type="text" class="form-control search-input"  data-table="employeeLeaveList" placeholder="Search...">                    
                    </div>                    
                    <div class="fixHeight">
                        {{-- @if($leaves->count() > 0) --}}
                        <table class="employeeLeaveList">
                            <thead>
                                <tr>
                                    <th>Employee Number</th>
                                    <th>Name</th>
                                    <th>Department</th>
                                    <th>Date Filed</th>
                                    <th>Type of Leave</th>
                                    <th>Approved By</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            {{-- static data to know if the table is working --}}
                            
                                <tr>
                                    <td>1</td>
                                    <td>brem</td>
                                    <td>asdas</td>
                                    <td>asd</td>
                                    <td>asdas</td>
                                    <td>asdsa</td>
                                    <td>asdsa</td>
                                    <td><a ><i class="fas fa-pen"></i></a></td>
                                </tr>


                            {{-- @foreach($leaves as $leave)
                                <tr>
                                    @foreach($employees as $employee)
                                        @if($leave->employee_id == $employee->id)
                                            <td>{{$employee->cl_id_number}}</td>
                                            <td>{{$employee->cl_first_name}} {{$employee->cl_middle_name[0]}}. {{$employee->cl_last_name}}</td>
                                            <td>N/A</td>
                                            <td>{{ \Carbon\Carbon::parse($leave->cl_date_file)->format('F j, Y') }}</td>
                                            <td>{{$leave->cl_type_of_leave}}</td>
                                            @if($leave->cl_approved_by)
                                                @foreach($employees as $employee)
                                                    @if($leave->cl_approved_by == $employee->id)
                                                        <td>{{$employee->cl_first_name}} {{$employee->cl_middle_name[0]}}. {{$employee->cl_last_name}}</td>
                                                    @endif
                                                @endforeach
                                            @else
                                                <td class="pending">---</td>    
                                            @endif

                                            @if ($leave->cl_status == "Pending")
                                                <td class="pending">{{$leave->cl_status}}</td>
                                            @elseif($leave->cl_status == "Approved")
                                                <td class="approved">{{$leave->cl_status}}</td>
                                            @elseif($leave->cl_status == "Declined")
                                                <td class="declined">{{$leave->cl_status}}</td>
                                            @else                                            
                                                <td>{{$leave->cl_status}}</td>
                                            @endif

                                            <td><a href="/leave/{{$leave->id}}/edit" id="leaveEdit"><i class="fas fa-pen"></i></a></td>
                                        @endif
                                    @endforeach   
                                </tr>
                            @endforeach   --}}
                            </tbody>                 
                        </table>
                        {{-- @else --}}
                            {{-- <p class="noRecords">No Leave Records Found.</p>                       --}}
                        {{-- @endif --}}
                    </div><!-- fix height -->
                </div>
            </div>
        </div><!-- card -->
    </div><!-- section leave list -->
</section>
<script src="{{asset('js/search.js')}}"></script>
@endsection