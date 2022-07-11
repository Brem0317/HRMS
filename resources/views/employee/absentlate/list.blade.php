@extends('layouts.app')
@section('content')
<div class="section-absent-late-list">
    <div class="row">        
        <div class="col-md-6">
            <x-breadcrumbs breadCrumbs="Employee Absent & Late"/>
        </div>
        <div class="col-md-6">
            <a href="/add-employee-absent-late" class="btn float-right sectionAddBtn">Add Absent / Late</a>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-header-text" style="float:left;">
                <h6>Employee Official Business List</h6>
            </div>

            <div style="float:right;">
                <input type="text" class="form-control search-input absentLateSearchClass"  data-table="absentlate-list" placeholder="Search...">
            </div>
        </div>


        <div class="card-body">
            {{-- @if($absentlates->count() > 0) --}}
                <div class="tableFormFixHead">
                    <table class="table absentlate-list">
                        <thead>
                            <tr>
                                <th class="w-20">Employee Number</th>
                                <th class="w-20">Name</th>
                                <th class="w-10">Department</th>
                                <th class="w-10">Date Filed</th>
                                <th class="w-10">Absent / Late</th>
                                <th class="w-20">Approved By</th>
                                <th class="w-10">Applied For</th>
                                <th class="w-10">Status</th>
                                <th class="w-10">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>brem</td>
                                <td>asdas</td>
                                <td>asd</td>
                                <td>asdas</td>
                                <td>asdsa</td>
                                <td>asdsa</td>
                                <td>asdsa</td>
                                <td><a ><i class="fas fa-pen"></i></a></td>
                            </tr>
                            {{-- @foreach($absentlates as $absentlate)
                            <tr> --}}
                                <!-- For Employee Number and Name -->
                                {{-- @foreach($employees as $employee)
                                    @if($absentlate->employee_id == $employee->id)
                                        <td>
                                            {{$employee->cl_id_number}}
                                        </td>
                                        <td>
                                        <a href="">{{$employee->cl_first_name}} {{$employee->cl_middle_name}} {{$employee->cl_last_name}} {{$employee->cl_name_ext}}</a> 
                                        </td>
                                    @endif
                                @endforeach --}}

                                <!-- For Employee Department -->
                                {{-- @foreach($employeeworkscheds as $employeeworksched)
                                    @if($absentlate->employee_id == $employeeworksched->employee_id)
                                        @foreach($departments as $department)
                                            @if($employeeworksched->department_id == $department->id)
                                                <td>{{$department->cl_department_name}}</td>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach --}}

                                <!-- For Date Filed -->
                                {{-- <td>{{ date('F j, Y', strtotime($absentlate->cl_date_file)) }}</td> --}}

                                <!-- For Absent / Late -->
                                {{-- <td>{{$absentlate->cl_type_of_absent_late}}</td> --}}

                                <!-- For Approved By -->
                                {{-- @if($absentlate->cl_approved_by == null)
                                <td>---</td>
                                @else
                                    @foreach($employees as $employee)
                                    
                                        @if($absentlate->cl_approved_by == $employee->id)
                                            <td>
                                                {{$employee->cl_first_name}} {{$employee->cl_middle_name}} {{$employee->cl_last_name}} {{$employee->cl_name_ext}}
                                            </td>
                                        @endif
                                    @endforeach
                                @endif --}}

                                <!-- Applied For -->
                                {{-- @if($absentlate->cl_apply_for === null)
                                <td>---</td>
                                @else
                                    <td>{{$absentlate->cl_apply_for}}</td>
                                @endif --}}

                                <!-- For Status -->
                                {{-- @if($absentlate->cl_status == "Pending")
                                    <td class="pending">{{$absentlate->cl_status}}</td>
                                @elseif($absentlate->cl_status == "Approved")
                                    <td class="approved">{{$absentlate->cl_status}}</td>
                                @elseif($absentlate->cl_status == "Declined")
                                    <td class="declined">{{$absentlate->cl_status}}</td>
                                @elseif($absentlate->cl_status == "No Call, No Show")
                                    <td class="nocallnoshow">{{$absentlate->cl_status}}</td>
                                @endif

                                <td>
                                    <form action="/absent-late/{{$absentlate->id}}/edit" method="POST">
                                        @csrf
                                        @method('GET')
                                        <button class="btn"><i class="fas fa-pen"></i></button>
                                    </form>
                                </td>

                            </tr>
                            @endforeach --}}
                            
                        </tbody>
                    </table>
                </div>
                <!-- fix height -->
            {{-- @else
            <p class="noRecords">No Absent / Late Records Found.</p>       
            @endif --}}
           
        </div><!-- card - body -->
    </div><!-- card -->
</div><!-- section leave list -->
 
<script src="{{asset('js/absentlatelist.js')}}"></script>
@endsection