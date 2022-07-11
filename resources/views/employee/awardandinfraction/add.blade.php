@extends('layouts.app')

@section('content')
<div class="award-and-infraction-add">
    <div class="row">
        <div class="col-md-6 breadCrumb">
            <x-breadcrumbs breadCrumbs="Employee / Award and Infraction"/>
        </div>
    </div> 
    <div class="card">
        <div class="card-header">
            <x-cardnav employeeId='{{$employeeID}}'/>
        </div>
        <div class="card-body">
            <div>
                <div class="div-bottom-line">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Award</h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <button type="button" class="btn" data-toggle="modal" data-target="#awardModal">Add</button>
                        </div>
                    </div>
                </div>
                <!-- output View -->
                <form action="/employee-awards-infractions" method="POST" id="awardFormId" enctype="multipart/form-data">
                    @csrf
                    <input type="number" value="{{$employeeID}}" name="employeeID" id="employee_ID" hidden>
                    <table id="awardTable" class="table">
                        <thead>
                            <tr>
                                <th>Award Received</th>
                                <th>Date</th>
                                <th>Attache File</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </form>
                <!-- output View -->
            </div>



            <!-- Infraction -->
            <div>
                <div class="div-bottom-line">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Infraction</h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <button type="button" class="btn" data-toggle="modal" data-target="#jobTitleModal">Add</button>
                        </div>
                    </div>
                </div>
                <!-- output View -->
                <form action="/employee-awards-infractions" method="POST" id="awardFormId" enctype="multipart/form-data">
                    @csrf
                    <input type="number" value="{{$employeeID}}" name="employeeID" id="employee_ID" hidden>
                    <table id="awardTable" class="table">
                        <thead>
                            <tr>
                                <th>Award Received</th>
                                <th>Date</th>
                                <th>Attache File</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employeeInfractions as $employeeInfraction)
                                <tr class="data-row">
                                    <!-- jobTitle -->
                                    <td class="infraAward">{{$employeeInfraction->cl_award}}</td>
                                    <td class="infraDate">{{$employeeInfraction->cl_date}}</td>
                                    <td>{{$employeeInfraction->cl_attachment}}</td>
                                    <td>
                                        <button type="button" id="jobTitleEdit" class="btn" data-item-id="{{$employeeInfraction->id}}">
                                            <i class="fas fa-pen"></i>
                                        </button>
                                        <button type="button" id="jobTitleDelete" class="btn" data-item-id="{{$employeeInfraction->id}}">
                                            <i class="fas fa-trash-alt deleteListBtn"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </form>
                <!-- output View -->
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn" id="saveNext">Next</button>
        </div>
    </div>
</div>

<!-- award modal -->
<div class="modal fade" id="awardModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Awards</h5>
            </div>
            <div class="modal-body">
                <div class="section-add-awardinfraction-modal">
                    <div class="form-group">
                        <label for="">Award <span id="nameEmpty"></span> </label>
                        <input type="text" id="awardReceived" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Date</label>
                        <input type="date" id="awardDate" class="form-control">
                    </div>
                    <div id="groupFile" class="form-group-file">
                        <label for="awardAttach" class="labelAttachBtn">Attach File</label>
                        <input type="file" id="awardAttach" name="awardAttach" class="fileAttach">
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


<!-- Infraction Add Modal -->
<div class="modal fade" id="jobTitleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Job Title</h5>
            </div>
            <div class="modal-body">
                <div class="section-add-jobTitle-modal">
                    <form action="/employee-awards-infractions" method="POST" id="jobTitleForm" enctype="multipart/form-data">
                        @csrf
                        <!--  -->
                        <div class="section-add-awardinfraction-modal">
                            <input type="number" value="{{$employeeID}}" name="employeeID" id="employee_ID" hidden>
                            <div class="form-group">
                                <label for="jobTitleName">Infraction</label>
                                <input type="text" name="jobTitleName" class="form-control" placeholder="i.e. Manager">
                            </div>
                            <!-- <div class="form-group">
                                <label for="infractionReceived">Infraction</label>
                                <input type="text" id="infractionReceived" name="infractionReceived" class="form-control">
                            </div> -->
                            <div class="form-group">
                                <label for="infractionDate">Date</label>
                                <input type="date" id="infractionDate" name="infractionDate" class="form-control">
                            </div>
                            <div id="groupFile" class="form-group-file">
                                <label for="infractionAttach" class="labelAttachBtn">Attach File</label>
                                <input type="file" id="infractionAttach" name="infractionAttach" class="fileAttach">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="jobTitleSubmitBtn">Submit</button>
            </div>
        </div>
    </div>
</div>

<!-- Infraction Edit Modal -->
<div class="modal fade" id="editJobTitleModal" tabindex="-1" role="dialog" aria-labelledby="edit-job-title-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="section-job-title-modal">
                    <form method="POST" id="editJobTitleForm" class="editJobTitleForm">
                        @csrf
                        @method('PUT')
                        <input type="number" value="{{$employeeID}}" name="employeeID" id="employee_ID" hidden>
                        <div class="form-group">
                            <label for="jobTitleName">Job Title Name</label>
                            <input type="text" name="jobTitleName" id="jobTitleInputNameModal" class="form-control">
                        </div>
                        <!-- <div class="form-group">
                            <label for="infractionReceived">Infraction</label>
                            <input type="text" id="infractionReceived" name="infractionReceived" class="form-control">
                        </div> -->
                        <div class="form-group">
                            <label for="infractionDate">Date</label>
                            <input type="date" name="infractionDate" id="infractionDateModal"  class="form-control">
                        </div>
                        <div id="groupFile" class="form-group-file">
                            <label for="infractionAttach" class="labelAttachBtn">Attach File</label>
                            <input type="file" id="infractionAttach" name="infractionAttach" class="fileAttach">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="jobTitleUdpateBtn">Update</button>
            </div>
        </div>
    </div>
</div>

<!-- Delete Infraction Title -->
<div class="modal fade" id="deleteJobTitleModal" tabindex="-1" role="dialog" aria-labelledby="Delete-job-title-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="section-job-title-modal-delete text-center">
                    <i class="fas fa-exclamation-triangle"></i>
                    <form method="POST" id="deleteJobTitleForm">
                        @csrf
                        @method('DELETE')
                        <input type="number" value="{{$employeeID}}" name="employeeID" id="employee_ID" hidden>
                        <div class="form-group" id="jobTitleDivNameModal">
                        
                        </div>
                    </form>
                    <button type="button" class="btn deleteModalBtn" id="jobTitleDeleteBtn">Yes</button>
                    <button type="button" class="btn cancelModalBtn" data-dismiss="modal">Cancel</button>
                </div>
            </div>`
        </div>
    </div>
</div>


<script src="{{asset('js/awardandinfractionjs.js')}}"></script>
@endsection