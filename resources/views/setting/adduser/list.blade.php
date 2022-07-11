@extends('layouts.app')


@section('content')
<div class="section-user-list">
    <div class="row">
        <div class="col-md-6 breadCrumb">
            <x-breadcrumbs breadCrumbs="SETTING / ADD USER"/>
        </div>
        <div class="col-md-6" >
            <button type="button" id="userAddBtn" class="btn btn-primary" data-toggle="modal" data-target="#userModal">Add User</button>
        </div>
    </div>


    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    User List
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Search...">
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>Employee Number</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td>JCAH20190092</td>
                        <td>wrwe</td>
                        <td>sdfsd</td>
                        <td>sdfsd</td>
                        <td>23423sfd</td>
                        <td><a href="#"><i class="fas fa-pen"></i></a></td>
                    </tr>
                    {{-- @foreach($users as $user)
                        <tr>
                            @foreach($employees as $employee)
                                @if($user->employee_id == $employee->id)
                                <td>{{$employee->cl_id_number}}</td>
                                @endif
                            @endforeach
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            @foreach($roles as $role)
                                @if($role->id == $user->role_id)
                                    <td>{{$role->cl_role_name}}</td>
                                @endif
                            @endforeach
                            <td>
                                @if($user->cl_status == "active")
                                    <a href="/add-user/toggle/{{$user->id}}"><i class="fas fa-toggle-on"></i></a>
                                @else
                                    <a href="/add-user/toggle/{{$user->id}}"><i class="fas fa-toggle-off"></i></a>
                                @endif
                            </td>
                            <td>
                            <form action="/add-user/{{$user->id}}/edit" method="POST">
                                @csrf
                                @method('GET')
                                <button class="btn"><i class="fas fa-pen-square"></i></button>
                            </form>
                                 
                            </td>
                        </tr>

                    @endforeach --}}
                </tbody>
            </table>
        </div>
        <div class="card-footer">

        </div>
    </div>


</div>
    <!-- ADD User -->
    {{-- <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add User</h5>
                </div>
                <div class="modal-body">
                    <div class="section-add-user-modal">
                        <form action="/add-user" method="POST" id="userForm">
                            @csrf
                            <div class="form-group">
                                <label for="userName">Name</label>
                                <select name="userName" class="form-control" >
                                    @foreach($employees as $employee)
                                        <option value="{{$employee->id}}">{{$employee->cl_first_name}} {{$employee->cl_last_name}}</option>
                                    @endforeach
                                </select>
                            
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>

                            <div class="form-group">
                                <label for="role">Role</label>
                                <select class="form-control" name="role" >
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}">{{$role->cl_role_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" name="status" >
                                    <option value="active">Active</option>
                                    <option value="Non-active">Non-Active</option>
                                </select>
                            </div>

                        </form>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="userSaveBtn">Submit</button>
                </div>
            </div>
        </div>
    </div> --}}


      


<script src="{{asset('js/adduser.js')}}"></script>
@endsection


