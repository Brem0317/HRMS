@extends('layouts.app')

@section('content')
<div class="section-educational-background-add">
    <div class="row">
        <div class="col-md-6 breadCrumb">
            <x-breadcrumbs breadCrumbs="Employee / Educational Background"/>
        </div>
    </div> 

    <div class="card">
        <div class="card-header">
            <x-cardnav employeeId='{{$employeeID}}'
                familyTabActive='' 
                civilserviceTabActive=''/>
        </div>
        <form action="/employee-educational-background" method="POST">
            @csrf
            <div class="card-body">
                <input type="number" value="{{$employeeID}}" name="employeeID">
            </div>
            <div class="card-footer">
                <button class="btn btn-primary">Next</button>
            </div>
        </form>
    </div>
</div>

@endsection