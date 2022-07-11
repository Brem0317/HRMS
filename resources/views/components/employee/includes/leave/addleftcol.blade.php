<div class="inputSearch">
    <input type="text" class="form-control search-input"  data-table="employeeLeaveList" placeholder="Search...">                    
</div>
<div class="fixHeight">
    @if($employees->count() > 0)
    <table class="employeeLeaveList">
        <thead>
            <tr>
                <th>Employee Number</th>
                <th>Name</th>
                <th>Sick Leave</th>
                <th>Vacation Leave</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
            <tr>
                <td>{{$employee->cl_id_number}}</td>
                <td>
                    <a href="#">{{$employee->cl_first_name}}
                    @if ($employee->cl_middle_name !== NULL)
                        {{$employee->cl_middle_name[0]}}.
                    @endif
                    {{$employee->cl_last_name}}
                    </a>
                </td>
                <td>5</td>
                <td>5</td>
                <td><a href="/leave/{{$employee->id}}" id="leaveAdd"><i class="fas fa-plus"></i></a></td>
            </tr>    
            @endforeach
        </tbody>                 
    </table>
    @else
        <p class="noRecords">No Employee Records Found.</p>                      
    @endif
</div><!-- fix height -->