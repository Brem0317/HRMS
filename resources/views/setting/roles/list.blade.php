@extends('layouts.app')

@section('content')
<section>
    <div class="section-roles-list">
        <div class="row">        
            <div class="col-md-6">
                <x-breadcrumbs breadCrumbs="Setting / User Roles"/>
            </div>
        </div><!-- row -->
        <div class="card">
            <div class="card-header">
                User Roles
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6  mx-auto">
                        <input type="text" class="form-control search-input roleSearchClass"  data-table="roles-list" placeholder="Search...">                        
                        <div class="tableFormFixHead">
                            {{-- @if($roles->count() > 0) --}}
                                <div class="table-header">User Roles</div>
                                <table class="table roleListClass roles-list">
                                    <tbody>
                                        <tr>
                                            <td>JCAH20190092</td>
                                            <td><a href="#"><i class="fas fa-pen"></i></a></td>
                                        </tr>
                                        {{-- @foreach($roles as $role)
                                            <tr class="data-row">
                                                <td class="roleClass">{{$role->cl_role_name}}</td>
                                            </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>
                            {{-- @else
                                <p class="noRecords">No Roles Records Found.</p>
                            @endif --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer"> </div> 
        </div><!-- card -->
    </div><!-- section roles list -->
</section>
<script src="{{asset('js/roles.js')}}" type="application/javascript"></script>
@endsection