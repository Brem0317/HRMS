@extends('layouts.app')

@section('content')
<div class="section-pre-employment-add">
    <div class="row">
        <div class="col-md-6 breadCrumb">
            <x-breadcrumbs breadCrumbs="Employee / Pre-Employment"/>
        </div>
    </div> 

    <div class="card">
        <div class="card-header">
            <x-cardnav employeeId='{{$employeeID}}'/>
        </div>

        <div class="card-body">
            <form action="/employee-pre-employment" enctype="multipart/form-data" method="POST" >
                @csrf
                <input type="text" value="{{$employeeID}}" name="employeeID" hidden>

                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group-file" id="attachmentUpload" >
                            <div>Official Transcript of Record (Bachelors/Masters/Doctorate) </div>
                            <label for="fileUpload01" class="labelAttachBtn">Attach File</label>
                            <input type="file" id="fileUpload01" accept=".JPG, .jpg, .jpeg, .png, .pdf" name="officialTranscript" class="fileAttach">
                        </div>

                        <div class="form-group-file" id="attachmentUpload" >
                            <div>Marriage Certificate (if applicable) </div>
                            <label for="fileUpload02" class="labelAttachBtn">Attach File</label>
                            <input type="file" id="fileUpload02" accept=".JPG, .jpg, .jpeg, .png, .pdf" name="marriageCertificate" class="fileAttach">
                        </div>

                        <div class="form-group-file" id="attachmentUpload" >
                            <div>Police Clearance </div>
                            <label for="fileUpload03" class="labelAttachBtn">Attach File</label>
                            <input type="file" id="fileUpload03" accept=".JPG, .jpg, .jpeg, .png, .pdf" name="policeClearance" class="fileAttach">
                        </div>
                    
                        <div class="form-group-file" id="attachmentUpload" >
                            <div>Certificate of Previous Employment (if recently employed) </div>
                            <label for="fileUpload04" class="labelAttachBtn">Attach File</label>
                            <input type="file" id="fileUpload04" accept=".JPG, .jpg, .jpeg, .png, .pdf" name="certOfPrevEmpl" class="fileAttach">
                        </div>
                    
                        <div class="form-group-file" id="attachmentUpload" >
                            <div>PSA / NSO Authenticated Birth Certificate  </div>
                            <label for="fileUpload05" class="labelAttachBtn">Attach File</label>
                            <input type="file" id="fileUpload05" accept=".JPG, .jpg, .jpeg, .png, .pdf" name="birthCert" class="fileAttach">
                        </div>

                    </div><!-- row -->
                </div><!-- col-md-12 -->
            </div><!-- card-body -->
            <div class="card-footer">
                <button class="btn btn-primary">Save</button>
            </div>
        </form><!-- form -->
    </div><!-- card -->
</div><!-- section-pre-employment-add -->

@endsection