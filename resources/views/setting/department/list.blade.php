@extends('layouts.app')
@section('content')
<section>
    <div class="section-department-list">
        <div class="row">        
            <div class="col-md-6">
                <x-breadcrumbs breadCrumbs="Setting / Department"/>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn float-right sectionAddBtn" id="" data-toggle="modal" data-target="#departmentModal">Add Department</button>
            </div>
        </div><!-- row -->
        <div class="card">
            <div class="card-header">Departments</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6  mx-auto">
                        <div class="inputSearch">
                            <input type="text" class="form-control search-input"  data-table="department-list" placeholder="Search...">                    
                        </div>
                        <div class="fixHeight">
                            {{-- @if($departments->count() > 0) --}}
                                <table class="department-list">
                                    <thead>
                                        <tr>
                                            <th>Department Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>JCAH20190092</td>
                                            <td><a href="#"><i class="fas fa-pen"></i></a></td>
                                        </tr>
                                        {{-- @foreach($departments as $department)
                                            <tr class="data-row">
                                                <td class="department">{{$department->cl_department_name}}</td>    
                                                <td>                                        
                                                    <button type="button" id="departmentEdit" class="btn" data-item-id="{{$department->id}}"><i class="fas fa-pen"></i></button>
                                                    <button type="button" id="departmentDelete" class="btn" data-item-id="{{$department->id}}"><i class="fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>                                        
                                        @endforeach --}}
                                    </tbody>                 
                                </table>
                            {{-- @else              
                                <p class="noRecords">No Department Records Found.</p>
                            @endif --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer"></div>
        </div><!-- card -->
    </div><!-- section department list -->
</section>

@include('components.setting.includes.department.modals')


<script src="{{asset('js/departmentjs.js')}}"></script>
@endsection