@extends ('layouts.app')

@section('content')
<div class="section-list-undertime">
    <div class="row">
        <div class="col-md-6 breadcrumbs">
            <x-breadcrumbs breadCrumbs="EMPLOYEE UNDERTIME "/>
        </div>
        <div class="col-md-6">
            <!-- a href trigger add undertime -->
            <a href="/add-employee-undertime" class="btn float-right addUndertimeBtn">Add Undertime</a>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">Employee Undertime List</div>
                <div class="col-md-6">
                    <!-- class search-input is use in js and the data-table = employee-list refers to the table class -->
                    <input type="text" class="search-input float-right" placeholder="Search . . ." data-table="undertime-list2">
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="fixHeight">
                {{-- @if($undertimes->count() > 0) --}}
                    <div class="table-size-header">
                        <table class="table undertime-list">
                            <thead>
                                <tr>
                                    <th class="thEmployeeNumber">Employee Number</th>
                                    <th class="thName">Name</th>
                                    <th class="thDprmt">Department</th>
                                    <th class="thDateFiled">Date Filed</th>
                                    <th class="thApprovedBy">Approved By</th>
                                    <th class="thStatus">Status</th>
                                    <th class="thAction">Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="table-size-body">
                        <table class="undertime-list2">
                            <tbody>
                                <tr>
                                    <td>12312</td>    
                                    <td>adadas</td>  
                                    <td>ZXzxczx</td>  
                                    <td>fsdsd</td>  
                                    <td>fsdsd</td>  
                                    <td>fsdsd</td>  
                                    <td><i class="fas fa-pen"></i></td>  
                                </tr>  
                                {{-- @foreach($undertimes as $undertime)
                                    <tr>
                                        @foreach($employees as $employee)
                                            @if($undertime->employee_id == $employee->id)
                                                <td class="tdEmployeeNumber">{{ $employee->cl_id_number }}</td>
                                                <td class="tdName">{{ $employee->cl_first_name }} {{ $employee->cl_middle_name }} {{ $employee->cl_last_name }}</td>
                                            @endif
                                        @endforeach
                                        <td class="tdDprmt"></td>
                                        <td class="tdDateFiled">{{ $undertime->cl_date_file }}</td>
                                        @if($undertime->cl_approved_by)
                                            @foreach ($employees as $employee)
                                                @if( $employee->id == $undertime->cl_approved_by)
                                                <td class="tdApprovedBy">{{ $employee->cl_first_name }} {{ $employee->cl_middle_name }} {{ $employee->cl_last_name }} {{ $employee->cl_name_ext }}</td>
                                                @endif
                                            @endforeach
                                        @else 
                                            <td class="tdApprovedByBlnk">--</td>
                                        @endif
            
                                        
                                        
                                        @foreach ($statuses as $status)
                                            @if($status['value'] == $undertime->cl_status)
                                                <td class="tdStatus {{$status['class']}}">{{$status['label']}}</td>
                                            @endif
                                        @endforeach
                                        <td class="tdAction">
                                            <form action="/undertime/{{$undertime->id}}/edit" method="POST" class="formEditBtn">
                                                @csrf
                                                @method('GET')
                                                <button class="btn">
                                                    <i class="fas fa-pen"></i>
                                                </button>
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
    
</div>

<script src="{{ asset('js/undertime-list.js') }}"></script>
@endsection