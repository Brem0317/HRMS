@extends('layouts.app')
@section('content')
<section>
    <div class="section-pendingapprovals-list">
        <div class="row">            
            <div class="col-md-3 singlecounter leavecounter">
                <a href="#pendinglistleave">
                    <i class="fas fa-calendar-day"></i>
                    <div>       
                        <span class="count">
                            {{-- {{ $pendingleaves }} --}}
                        </span>                                            
                        <p>Leave</p>
                    </div>         
                </a>
            </div><!-- leavecounter -->
            <div class="col-md-3 singlecounter overtimecounter">
                <a href="#pendinglistovertime">
                    <i class="fas fa-user-clock"></i>  
                    <div>       
                        <span class="count">
                            {{-- {{ $pendingovertimes }} --}}
                        </span>                                            
                        <p>Overtime</p>
                    </div> 
                </a>
            </div><!-- overtimecounter -->
            <div class="col-md-3 singlecounter undertimecounter">
                <a href="#pendinglistundertime">
                    <i class="fas fas fa-clock"></i>
                    <div>       
                        <span class="count">
                            {{-- {{ $pendingundertimes }} --}}
                        </span>                                            
                        <p>Undertime</p>
                    </div> 
                </a>
            </div><!-- undertimecounter -->
            <div class="col-md-3 singlecounter officialbusinesscounter">
                <a href="#pendinglistofficialbusiness">
                    <i class="fas fa-suitcase"></i>      
                    <div>       
                        <span class="count">
                            {{-- {{ $pendingofficialbusinesses }} --}}
                        </span>                                            
                        <p>Official Business</p>
                    </div> 
                </a>
            </div><!-- officialbusinesscounter -->
            <div class="col-md-3 singlecounter absentlatecounter">
                <a href="#pendinglistabsentlates">
                    <i class="fas fa-user-times"></i>  
                    <div>       
                        <span class="count">
                            {{-- {{ $pendingabsentlates }} --}}
                        </span>                                            
                        <p>Absent/Late</p>
                    </div> 
                </a>
            </div><!-- absentlatecounter -->
            
        </div>
        <div class="row pendinglistcontainer">
            <div class="col-md-6">
                <x-breadcrumbs breadCrumbs="Dashboard / Pending List"/>
            </div>
            <span id="1"></span>
            <div class="card pendinglistleave" id="pendinglistleave">
                <div class="card-header">Pending Leave</div>
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
                                        <th>Full Name</th>
                                        <th>Department</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>     
                                    <tr>
                                        <td>12312</td>    
                                        <td>adadas</td>  
                                        <td>ZXzxczx</td>  
                                        <td>fsdsd</td>  
                                        <td><i class="fas fa-pen"></i></td>  
                                    </tr>                               
                                {{-- @foreach($leaves as $leave)                            
                                    <tr>
                                        @foreach($employees as $employee)
                                            @if($leave->employee_id == $employee->id)
                                                <td>{{$employee->cl_id_number}}</td>
                                                <td>{{$employee->cl_first_name}} {{$employee->cl_middle_name[0]}}. {{$employee->cl_last_name}}</td>
                                                <td>N/A</td>
                                                <td class="pending">{{$leave->cl_status}}</td>                                        
                                                <td><a href="/leave/{{$leave->id}}/edit" id="leaveEdit"><i class="fas fa-pen"></i></a></td>
                                            @endif
                                        @endforeach
                                    </tr>
                                @endforeach --}}
                                </tbody>                 
                            </table>
                            {{-- @else
                                <p class="noRecords">No Pending Leave Records Found.</p>                      
                            @endif --}}
                        </div><!-- fix height -->
                    </div>
                </div>
            </div><!-- pendinglistleave -->
            <div class="card pendinglistovertime" id="pendinglistovertime">
                <div class="card-header">Pending Overtime</div>
                <div class="card-body">
                    <div class="row">
                        <div class="inputSearch">
                            <input type="text" class="form-control search-input"  data-table="employeeOvertimeList" placeholder="Search...">                    
                        </div>                    
                        <div class="fixHeight">                            
                            {{-- @if($overtimes->count() > 0) --}}
                            <table class="employeeOvertimeList">                                
                                <thead>
                                    <tr>
                                        <th>Employee Number</th>
                                        <th>Full Name</th>
                                        <th>Department</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>12312</td>    
                                        <td>adadas</td>  
                                        <td>ZXzxczx</td>  
                                        <td>fsdsd</td>  
                                        <td><i class="fas fa-pen"></i></td>  
                                    </tr>  
                                {{-- @foreach($overtimes as $overtime)                            
                                    <tr>
                                        @foreach($employees as $employee)
                                            @if($overtime->employee_id == $employee->id)
                                                <td>{{$employee->cl_id_number}}</td>
                                                <td>{{$employee->cl_first_name}} {{$employee->cl_middle_name[0]}}. {{$employee->cl_last_name}}</td>
                                                <td>N/A</td>
                                                <td class="pending">{{$overtime->cl_status}}</td>                                        
                                                <td><a href="/overtime/{{$overtime->id}}/edit" id="leaveEdit"><i class="fas fa-pen"></i></a></td>
                                            @endif
                                        @endforeach
                                    </tr>
                                @endforeach --}}
                                </tbody>                 
                            </table>                            
                            {{-- @else
                                <p class="noRecords">No Pending Overtime Records Found.</p>                      
                            @endif --}}
                        </div><!-- fix height -->
                    </div>
                </div>
            </div><!-- pendinglistovertime -->
            <div class="card pendinglistundertime" id="pendinglistundertime">
                <div class="card-header">Pending Undertime</div>
                <div class="card-body">
                    <div class="row">
                        <div class="inputSearch">
                            <input type="text" class="form-control search-input"  data-table="employeeUndertimeList" placeholder="Search...">                    
                        </div>                    
                        <div class="fixHeight">
                            {{-- @if($undertimes->count() > 0) --}}
                            <table class="employeeUndertimeList">                                
                                <thead>
                                    <tr>
                                        <th>Employee Number</th>
                                        <th>Full Name</th>
                                        <th>Department</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>12312</td>    
                                        <td>adadas</td>  
                                        <td>ZXzxczx</td>  
                                        <td>fsdsd</td>  
                                        <td><i class="fas fa-pen"></i></td>  
                                    </tr>  
                                {{-- @foreach($undertimes as $undertime)                            
                                    <tr>
                                        @foreach($employees as $employee)
                                            @if($undertime->employee_id == $employee->id)
                                                <td>{{$employee->cl_id_number}}</td>
                                                <td>{{$employee->cl_first_name}} {{$employee->cl_middle_name[0]}}. {{$employee->cl_last_name}}</td>
                                                <td>N/A</td>
                                                <td class="pending">{{$undertime->cl_status}}</td> 
                                                <td><a href="/undertime/{{$undertime->id}}/edit" id="leaveEdit"><i class="fas fa-pen"></i></a></td>
                                            @endif
                                        @endforeach
                                    </tr>
                                @endforeach --}}
                                </tbody>                 
                            </table>                            
                            {{-- @else
                                <p class="noRecords">No Pending Undertime Records Found.</p>                      
                            @endif --}}
                        </div><!-- fix height -->
                    </div>
                </div>
            </div><!-- pendinglistundertime -->
            <div class="card pendinglistofficialbusiness" id="pendinglistofficialbusiness">
                <div class="card-header">Pending Official Business</div>
                <div class="card-body">
                    <div class="row">
                        <div class="inputSearch">
                            <input type="text" class="form-control search-input"  data-table="employeeOfficialBusinessList" placeholder="Search...">                    
                        </div>                    
                        <div class="fixHeight">
                            {{-- @if($officialbusinesses->count() > 0) --}}
                            <table class="employeeOfficialBusinessList">                                
                                <thead>
                                    <tr>
                                        <th>Employee Number</th>
                                        <th>Full Name</th>
                                        <th>Department</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>12312</td>    
                                        <td>adadas</td>  
                                        <td>ZXzxczx</td>  
                                        <td>fsdsd</td>  
                                        <td><i class="fas fa-pen"></i></td>  
                                    </tr>  
                                {{-- @foreach($officialbusinesses as $officialbusiness)                            
                                    <tr>
                                        @foreach($employees as $employee)
                                            @if($officialbusiness->employee_id == $employee->id)
                                                <td>{{$employee->cl_id_number}}</td>
                                                <td>{{$employee->cl_first_name}} {{$employee->cl_middle_name[0]}}. {{$employee->cl_last_name}}</td>
                                                <td>N/A</td>
                                                <td class="pending">{{$officialbusiness->cl_status}}</td>                                        
                                                <td><a href="/official-business/{{$officialbusiness->id}}/edit" id="leaveEdit"><i class="fas fa-pen"></i></a></td>
                                            @endif
                                        @endforeach
                                    </tr>
                                @endforeach --}}
                                </tbody>                 
                            </table>                            
                            {{-- @else
                                <p class="noRecords">No Pending Official Business Records Found.</p>                      
                            @endif --}}
                        </div><!-- fix height -->
                    </div>
                </div>
            </div><!-- pendinglistofficialbusiness -->
            <div class="card pendinglistabsentlates" id="pendinglistabsentlates">
                <div class="card-header">Pending Absent / Late</div>
                <div class="card-body">
                    <div class="row">
                        <div class="inputSearch">
                            <input type="text" class="form-control search-input"  data-table="employeeOfficialBusinessList" placeholder="Search...">                    
                        </div>                    
                        <div class="fixHeight">
                            {{-- @if($absentlates->count() > 0) --}}
                            <table class="employeeOfficialBusinessList">                                
                                <thead>
                                    <tr>
                                        <th>Employee Number</th>
                                        <th>Full Name</th>
                                        <th>Department</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>12312</td>    
                                        <td>adadas</td>  
                                        <td>ZXzxczx</td>  
                                        <td>fsdsd</td>  
                                        <td><i class="fas fa-pen"></i></td>  
                                    </tr>  
                                {{-- @foreach($absentlates as $absentlate)                            
                                    <tr>
                                        @foreach($employees as $employee)
                                            @if($absentlate->employee_id == $employee->id)
                                                <td>{{$employee->cl_id_number}}</td>
                                                <td>{{$employee->cl_first_name}} {{$employee->cl_middle_name[0]}}. {{$employee->cl_last_name}}</td>
                                                <td>N/A</td>
                                                <td class="pending">{{$absentlate->cl_status}}</td>                                        
                                                <td><a href="/absent-late/{{$absentlate->id}}/edit" id="leaveEdit"><i class="fas fa-pen"></i></a></td>
                                            @endif
                                        @endforeach
                                    </tr>
                                @endforeach --}}
                                </tbody>                 
                            </table>                            
                            {{-- @else
                                <p class="noRecords">No Pending Absent/Late Records Found.</p>                      
                            @endif --}}
                        </div><!-- fix height -->
                    </div>
                </div>
            </div><!-- pendinglistabsentlates -->
        </div><!-- row -->
    </div>
</section>
<script src="{{asset('js/search.js')}}"></script>
@endsection