@extends('layouts.app')


@section('content')
<div class="section-user-edit">
    <div class="row breadcrumbs">
        <x-breadcrumbs breadCrumbs="SETTING / UPDATE USER"/>
    </div>
    <form action="/add-user/{{$user->id}}" method="POST">
        @csrf
        @method('PUT')
 
        <div class="card">
            <div class="card-header">
                Update User
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 mx-auto">
                        <div class="form-group">
                            <label for="Name">Name</label>
                            @foreach($employees as $employee)
                                @if($user->employee_id == $employee->id)
                                    <input type="text" class="form-control" value="{{$employee->cl_first_name}} {{$employee->cl_last_name}}" readonly>
                                @endif
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            @foreach($employees as $employee)
                                @if($user->employee_id == $employee->id)
                                    <input type="email" name="email" class="form-control" value="{{$user->email}}" >
                                @endif
                            @endforeach
                            
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select name="role" class="form-control">
                                @foreach($roles as $role)
                                    @if($user->role_id == $role->id)
                                        <option value="{{$role->id}}" selected>{{$role->cl_role_name}}</option>
                                    @else
                                        <option value="{{$role->id}}" >{{$role->cl_role_name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" class="form-control">
                                
                                    @if($user->cl_status == "active")
                                        <option value="active" selected>active</option>
                                        <option value="Non-active">Non-active</option>
                                    @else
                                        <option value="Non-active" selected >Non-active</option>
                                        <option value="active" >active</option>
                                    @endif
                                
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection


