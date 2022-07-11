@extends('layouts.app')

@section('content')
<div class="section-jobtitle-list">
    <div class="row">
        <div class="col-md-6 jobTitleBreadCrumbs">
            <!-- breadCrumbs -->
            <x-breadcrumbs breadCrumbs="SETTING / JOB TITLE"/>
        </div>
        <div class="col-md-6 text-right">
            <!-- Button trigger modal -->
            <button type="button" class="btn addModalBtn" data-toggle="modal" data-target="#jobTitleModal">
                Add Job Title
            </button>
        </div>
    </div>


    <div class="card">
        <div class="card-header">
            Job Title
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6  mx-auto">
                    <input type="text" class="form-control search-input"  data-table="jobTitle-list" placeholder="Search...">
                    <table class="table jobTitle-list-header">
                        <thead>
                            <th class="w-70">Job Title</th>
                            <th class="w-30">Action</th>
                        </thead>
                    </table>
                    <div class="jobTitle-list-content">
                        <table class="table jobTitle-list">
                            <tbody>
                                <tr>
                                    <td>JCAH20190092</td>
                                    <td><a href="#"><i class="fas fa-pen"></i></a></td>
                                </tr>
                                {{-- @foreach($jobTitles as $jobTitle)
                                    <tr class="data-row">
                                        <td class="jobTitle align-middle w-70">{{$jobTitle->cl_job_title_name}}</td> 
                                        <td class="w-30">
                                            <button type="button" id="jobTitleEdit" class="btn" data-item-id="{{$jobTitle->id}}">
                                                <!-- <i class="fas fa-pen-square"></i> -->
                                                <i class="fas fa-pen"></i>
                                            </button>

                                            <button type="button" id="jobTitleDelete" class="btn" data-item-id="{{$jobTitle->id}}">
                                                <i class="fas fa-trash-alt deleteListBtn"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer">

        </div>
    </div>
</div>


<!-- ADD jobTitle -->
<div class="modal fade" id="jobTitleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Job Title</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <div class="modal-body">
                <div class="section-add-jobTitle-modal">
                    <form action="/job-title" method="POST" id="jobTitleForm">
                        @csrf
                        <div class="form-group">
                            <label for="jobTitleName">Job Title Name</label>
                            <input type="text" name="jobTitleName" class="form-control" placeholder="i.e. Manager">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                <button type="button" class="btn btn-primary" id="jobTitleSubmitBtn">Submit</button>
            </div>
        </div>
    </div>
</div>


<!-- Edit Job Title -->
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
                    <form method="POST" id="editJobTitleForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="jobTitleName">Job Title Name</label>
                            <input type="text" name="jobTitleName" id="jobTitleInputNameModal" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                <button type="button" class="btn btn-primary" id="jobTitleUdpateBtn">Update</button>
            </div>
        </div>
    </div>
</div>


<!-- Delete Job Title -->
<div class="modal fade" id="deleteJobTitleModal" tabindex="-1" role="dialog" aria-labelledby="Delete-job-title-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div> -->
            <div class="modal-body">
                <div class="section-job-title-modal-delete text-center">
                    <i class="fas fa-exclamation-triangle"></i>
                    <form method="POST" id="deleteJobTitleForm">
                        @csrf
                        @method('DELETE')
                        <div class="form-group" id="jobTitleDivNameModal">
                        
                        </div>
                    </form>
                    <button type="button" class="btn deleteModalBtn" id="jobTitleDeleteBtn">Yes</button>
                    <button type="button" class="btn cancelModalBtn" data-dismiss="modal">Cancel</button>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn" id="jobTitleDeleteBtn">Yes</button>
                <button type="button" class="btn" data-dismiss="modal">Cancel</button>
            </div> -->
        </div>
    </div>
</div>



<script src="{{asset('js/jobtitle.js')}}"></script>
@endsection