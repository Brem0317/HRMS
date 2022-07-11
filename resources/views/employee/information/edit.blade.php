@extends('layouts.app')

@section('content')
<div class="section-employee-add">
    <div class="row">
        <div class="col-md-6 breadCrumb">
            <x-breadcrumbs breadCrumbs="Employee / Personal Information"/>
        </div>
    </div> 

    <div class="card">
        <div class="card-header">
            <x-cardnav employeeId='{{$employeeID}}'
                familyTabActive='' 
                civilserviceTabActive=''/>
        </div>
        <form action="/employee-add" method="POST">
            @csrf
            <div class="card-body">
                <input type="numeric" name="employeeID" value="{{$employeeID}}">
                <input type="text" name="fname" value="{{$employee->cl_first_name}}">
                <input type="text" name="lname" value="{{$employee->cl_last_name}}">
                <select name="gender" id="">
                    @if($employee->cl_gender = "Male")
                        <option value="Male" selected>Male</option>
                        <option value="Female" >Female</option>
                    @else
                        <option value="Male" >Male</option>
                        <option value="Female" selected>Female</option>
                    @endif
                </select>
                <input type="date" name="dob" value="{{$employee->cl_date_of_birth}}">
                <select name="civilStatus" id="">
                    @if($employee->cl_civil_status = "single")
                        <option value="single" selected>Single</option>
                        <option value="married">Married</option>
                        <option value="single-parent">Single Parent</option>
                        <option value="widowed">Widowed</option>
                    @elseif($employee->cl_civil_status = "married")
                        <option value="single" >Single</option>
                        <option value="married" selected>Married</option>
                        <option value="single-parent">Single Parent</option>
                        <option value="widowed">Widowed</option>
                    @elseif($employee->cl_civil_status = "single-parent")
                        <option value="single" >Single</option>
                        <option value="married" >Married</option>
                        <option value="single-parent" selected>Single Parent</option>
                        <option value="widowed">Widowed</option>
                    @elseif($employee->cl_civil_status = "widowed")
                        <option value="single" >Single</option>
                        <option value="married" >Married</option>
                        <option value="single-parent">Single Parent</option>
                        <option value="widowed" selected>Widowed</option>
                    @endif
                </select>
                <input type="number" name="weight" value="{{$employee->cl_weight}}">
                <input type="number" name="height" value="{{$employee->cl_height}}">
                <input type="text" name="idNumber" value="{{$employee->cl_id_number}}">
                <input type="text" name="mobileNumber" value="{{$employee->cl_mobile_number}}">
            </div>
            <div class="card-footer">
                <button class="btn btn-primary">Next</button>
            </div>
        </form>
    </div>
</div>

@endsection