@extends('layouts.app')

@section('content')
<div class="section-official-business">
    <div class="row">
        <div class="col-md-6">
            <x-breadcrumbs breadCrumbs="EMPLOYEE OFFICIAL BUSINESS "/>
        </div>
        <div class="col-md-6 text-right">
            <a href="/add-employee-official-business" class="btn addOfficialButton">Add Official Business</a>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-header-text" style="float:left;">
                <h6>Employee Official Business List</h6>
            </div>
            <div style="float:right;">
                <input type="text" class="form-control search-input obSearchClass"  data-table="officialbusiness-list" placeholder="Search...">
            </div>
        </div>

        <div class="card-body">
            {{-- @if($officialbusinesses->count() > 0) --}}
            <div class="tableFormFixHead">
                <table class="table officialbusiness-list">
                    <thead>
                        <th class="w-10">Employee Number</th>
                        <th class="w-20">Name</th>
                        <th class="w-10">Department</th>
                        <th class="w-10">Date Filed</th>
                        <th class="w-20">Approved By</th>
                        <th class="w-10">Status</th>
                        <th class="w-10">Action</th>
                    </thead>    
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>brem</td>
                            <td>asdas</td>
                            <td>asd</td>
                            <td>asdas</td>
                            <td>asdsa</td>
                            <td><a ><i class="fas fa-pen"></i></a></td>
                        </tr>
                        {{-- @foreach($officialbusinesses as $officialbusiness)
    
                            <tr> --}}
                                <!-- For Employee Number and Name -->
                                {{-- @foreach($employees as $employee)
                                    @if($officialbusiness->employee_id == $employee->id)
                                        <td>
                                            {{$employee->cl_id_number}}
                                        </td>
                                        <td>
                                           <a href="">{{$employee->cl_first_name}} {{$employee->cl_middle_name}} {{$employee->cl_last_name}} {{$employee->cl_name_ext}}</a> 
                                        </td>
                                    @endif
                                @endforeach
                                
                                <td>---</td> --}}
                                <!-- For Employee Department -->
                                {{-- @foreach($employeeworkscheds as $employeeworksched)
                                    @if($officialbusiness->employee_id == $employeeworksched->employee_id)
                                        @foreach($departments as $department)
                                            @if($employeeworksched->department_id == $department->id)
                                                <td>{{$department->cl_department_name}}</td>
                                            @else
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach --}}
                                
                                <!-- For Date Filed -->
                                {{-- <td>{{ date('F j, Y', strtotime($officialbusiness->cl_date_file)) }}</td> --}}
    
                                <!-- For Approved By -->
                                {{-- @if($officialbusiness->cl_approved_by == null)
                                <td>---</td>
                                @else
                                    @foreach($employees as $employee)
                                    
                                        @if($officialbusiness->cl_approved_by == $employee->id)
                                            <td>
                                                {{$employee->cl_first_name}} {{$employee->cl_middle_name}} {{$employee->cl_last_name}} {{$employee->cl_name_ext}}
                                            </td>
                                        @endif
                                    @endforeach
                                @endif --}}
                            
                                <!-- For Status -->
                                {{-- @if($officialbusiness->cl_status == "Pending")
                                    <td class="pending">{{$officialbusiness->cl_status}}</td>
                                @elseif($officialbusiness->cl_status == "Approved")
                                    <td class="approved">{{$officialbusiness->cl_status}}</td>
                                @elseif($officialbusiness->cl_status == "Declined")
                                    <td class="declined">{{$officialbusiness->cl_status}}</td>
                                @endif --}}
    
                                <!-- For Action -->
                                {{-- <td>
                                    <form action="/official-business/{{$officialbusiness->id}}/edit" method="POST">
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
            {{-- @else
                <p class="noRecords">No Leave Records Found.</p>       
            @endif --}}
        </div>
    </div>        
</div>

<script src="{{asset('js/officialbusinesslist.js')}}"></script>
@endsection