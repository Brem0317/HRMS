@extends('layouts.app')
@section('content')
<section>
    <div class="section-leave-edit">
        <div class="row">        
            <div class="col-md-6">
                <x-breadcrumbs breadCrumbs="Employee/Employee Leave"/>
            </div>
        </div><!-- row -->
        <div class="card">
            <div class="card-header">Leave Form</div><!-- card header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <form action="/leave/{{$leave->id}}" enctype="multipart/form-data" method="POST" id="editLeaveForm">
                            @csrf
                            @method('PUT')
                            <input type="text" name="employeeID" class="form-control" value="{{$leave->id}}" hidden>                            
                            @foreach($employees as $employee)
                                @if($employee->id == $leave->employee_id)
                                    @include('components.employee.includes.leave.editleftcol')
                                    @include('components.employee.includes.leave.editrightcol')
                                @endif
                            @endforeach
                            <button class="btn sectionAddBtn" id="leaveSubmitBtn">Update</button>
                        </form>         
                    </div>
                </div>
            </div><!-- card body -->            
            <div class="card-footer"></div><!-- card footer -->
        </div><!-- card -->
    </div><!-- section leave list -->
</section>
{{-- <script src="{{asset('js/editLeavejs.js')}}"></scrip> --}}
@endsection   