@extends('layouts.app')

@section('content')
<div class="section-character-reference-add">
    <div class="row">
        <div class="col-md-6 breadCrumb">
            <x-breadcrumbs breadCrumbs="Employee / Character Reference"/>
        </div>
    </div> 
    <div class="card">
        <div class="card-header">
            <x-cardnav employeeId='{{$employeeID}}'/>
        </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <button type="button" class="btn" data-toggle="modal" data-target="#characterReferenceModal">Add Character Reference</button>
                    </div>
                </div>
                <!-- output View -->
                <form action="/employee-character-reference" method="POST" id="characterReferenceID">
                    @csrf
                    <input type="number" value="{{$employeeID}}" name="employeeID" id="employee_ID" hidden>
                    <table id="characterReferenceTable" class="table">
                        <thead>
                            <tr>
                                <th>Fullname</th>
                                <th>Address</th>
                                <th>Mobile Number</th>
                                <th>Company</th>
                                <th>Position</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </form>
                <!-- output View -->
            </div>
            <div class="card-footer text-right">
                <button class="btn" id="saveNext">Next</button>
            </div>
    </div>
</div>

<!-- ADD jobTitle -->
<div class="modal fade" id="characterReferenceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Character Reference</h5>
            </div>
            <div class="modal-body">
                <div class="section-add-reference-modal">
                    <div class="form-group">
                        <label for="">Fullname <span id="nameEmpty"></span> </label>
                        <input type="text" id="referenceFullname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" id="referenceAddress" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Company</label>
                        <input type="text" id="referenceCompany" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Mobile Number</label>
                                <input type="number" id="referenceNumber" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Position</label>
                                <input type="text" id="referencePosition" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="number" value="{{$employeeID}}" name="employeeID" id="employee_ID" hidden>
                <button type="button" id="updateButton"class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>











<script src="{{asset('js/characterReferenceModalAdd.js')}}"></script>
@endsection