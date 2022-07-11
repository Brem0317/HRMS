@extends('layouts.app')

@section('content')
<div class="section-other-training-add">
    <div class="row">
        <div class="col-md-6 breadCrumb">
            <x-breadcrumbs breadCrumbs="Employee / Other Trainings"/>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <x-cardnav employeeId='{{$employeeID}}'/>
        </div>

        <!-- Body -->
        <div class="card-body">
            <input type="text" value="{{$employeeID}}" name="employeeID" hidden>

            <!--Voluntary Work or Involvement in Civic / Non-Government / People / Voluntary Organization-->
            <div class="row">
                <div class="col-md-12">
                    <div class="other-training-underline">
                        <div class="row">
                            <div class="col-md-6 other-training-title">
                                Voluntary Work or Involvement in Civic / Non-Government / People / Voluntary Organization
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="button" class="btn addModalBtn" data-toggle="modal" data-target="#voluntaryWorkModal">
                                    Add
                                </button>
                            </div>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                            <th>Organization Name</th>
                            <th>Organization Address</th>
                            <th>Date From</th>
                            <th>Date To</th>
                            <th>Number of Hours</th>
                            <th>Position/Nature of Work</th>
                            <th>Attache File</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr class="data-row">
                                <td>Mt. Apo Hikers</td>
                                <td>Banga, South Cotabato</td>
                                <td>September 25, 2019</td>
                                <td>December 25, 2019</td>
                                <td>15 hours</td>
                                <td>Member</td>
                                <td>Mt. Apo Hikers.png</td>
                                <td>
                                    <button class="btn">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                    <button class="btn">
                                        <i class="fas fa-trash-alt deleteListBtn"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Learning and Development (L&D) Interventions/Training Programs Attended -->
            <!-- <div class="row top-padding">
                <div class="col-md-12 text-right">
                    <div class="other-training-underline">
                        <div class="row">
                            <div class="col-md-6 other-training-title">
                                Learning and Development (L&D) Interventions/Training Programs Attended
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="button" class="btn addModalBtn" data-toggle="modal" data-target="#LearningDevelopmentModal">
                                    Add
                                </button>
                            </div>
                        </div>
                    </div>
                    <table class="table text-left">
                        <thead>
                            <th>Title</th>
                            <th>Date From</th>
                            <th>Date To</th>
                            <th>Number of Hours</th>
                            <th>Type of LD</th>
                            <th>Conducted/Sponsored By</th>
                            <th>Attache File</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr class="data-row">
                                <td>Manegerial</td>
                                <td>April 21, 2021</td>
                                <td>July 21, 2021</td>
                                <td>12</td>
                                <td>Manegerial</td>
                                <td>Training Camp</td>
                                <td>Training.png</td>
                                <td>
                                    <button class="btn">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                    <button class="btn">
                                        <i class="fas fa-trash-alt deleteListBtn"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> -->

            <!-- Special Skills -->
            <div class="row top-padding">
                <div class="col-md-12 text-right">
                    <div class="other-training-underline">
                        <div class="row">
                            <div class="col-md-6 other-training-title">
                                Special Skills
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="button" class="btn addModalBtn" data-toggle="modal" data-target="#specialSkillstModal">
                                    Add
                                </button>
                            </div>
                        </div>
                    </div>
                    <form action="/employee-work-experience-save" method="POST" enctype="multipart/form-data" id="characterReferenceID">
                        @csrf
                        <input type="number" value="{{$employeeID}}" name="employeeID" id="employee_ID" hidden>
                        <table id="characterReferenceTable" class="table text-left">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Attache File</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </form>
                    </table>
                </div>
            </div>

            <!--Non Academic Recognition-->
            <div class="row top-padding">
                <div class="col-md-12 text-right">
                    <div class="other-training-underline">
                        <div class="row">
                            <div class="col-md-6 other-training-title">
                                Non Academic Recognition
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="button" class="btn addModalBtn" data-toggle="modal" data-target="#nonAcademicRecognitiontModal">
                                    Add
                                </button>
                            </div>
                        </div>
                    </div>
                    <table class="table text-left">
                        <thead>
                            <th>Title</th>
                            <th>Attache File</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr class="data-row">
                                <td>Leadership Award</td>
                                <td>Leadership Award.png</td>
                                <td>
                                    <div class="btn">
                                        <i class="fas fa-pen"></i>
                                    </div>
                                    <div class="btn">
                                        <i class="fas fa-trash-alt deleteListBtn"></i>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!--Association / Organization-->
            <div class="row top-padding">
                <div class="col-md-12 text-right">
                    <div class="other-training-underline">
                        <div class="row">
                            <div class="col-md-6 other-training-title">
                                Association / Organization
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="button" class="btn addModalBtn" data-toggle="modal" data-target="#associationOrganizationModal">
                                    Add
                                </button>
                            </div>
                        </div>
                    </div>
                    <table class="table text-left">
                        <thead>
                            <th>Title</th>
                            <th>Attache File</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr class="data-row">
                                <td>Philippine Red Cross</td>
                                <td>RedCross.png</td>
                                <td>
                                    <div class="btn">
                                        <i class="fas fa-pen"></i>
                                    </div>
                                    <div class="btn">
                                        <i class="fas fa-trash-alt deleteListBtn"></i>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!--Orientations-->
            <div class="row top-padding">
                <div class="col-md-12 text-right">
                    <div class="other-training-underline">
                        <div class="row">
                            <div class="col-md-6 other-training-title">
                                Orientations
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="button" class="btn addModalBtn" data-toggle="modal" data-target="#orientationModal">
                                    Add
                                </button>
                            </div>
                        </div>
                    </div>
                    <table class="table text-left">
                        <thead>
                            <th>Title</th>
                            <th>Attache File</th>
                            <th>Date</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr class="data-row">
                                <td>Gender and Development</td>
                                <td>Orientation.png</td>
                                <td>May 22, 2021</td>
                                <td>
                                    <div class="btn">
                                        <i class="fas fa-pen"></i>
                                    </div>
                                    <div class="btn">
                                        <i class="fas fa-trash-alt deleteListBtn"></i>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <!-- Footer -->
        <div class="card-footer text-right">
            <button class="btn" id="saveNext">Next</button>
        </div>
    </div>
</div>

<!-- voluntaryWorkModal -->
<div class="modal fade" id="voluntaryWorkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    Voluntary Work or Involvement in Civic / Non-Government / People / Voluntary Organization
                </h5>
            </div>
            <div class="modal-body">
                <div class="section-add-reference-modal">
                    <div class="form-group">
                        <label for="">Organization Name</label>
                        <input type="text" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Organization Address</label>
                        <input type="text" id="" class="form-control">
                    </div>
                    <div class="row">        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">End Date</label>
                                <input type="date" id="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Start Date</label>
                                <input type="date" id="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Number of Hours</label>
                                <input type="text" id="" class="form-control">
                            </div>
                        </div>     
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Position/Nature of Work</label>
                                <input type="text" id="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group-file">
                        <label for="fileUpload" class="labelAttachBtn">Attach File</label>
                        <input type="file" id="fileUpload" name="attachmentFileImage" class="fileAttach">
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

<!-- LearningDevelopmentModal -->
<div class="modal fade" id="LearningDevelopmentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    Learning and Development (L&D) Interventions/Training Programs Attended
                </h5>
            </div>
            <div class="modal-body">
                <div class="section-add-reference-modal">
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" id="" class="form-control">
                    </div>
                    <div class="row">        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Start Date</label>
                                <input type="date" id="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">End Date</label>
                                <input type="date" id="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Type of LD</label>
                                <input type="text" id="" class="form-control">
                            </div>
                        </div>     
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Number of Hours</label>
                                <input type="text" id="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Conducted / Sponsored By</label>
                        <input type="text" id="" class="form-control">
                    </div>
                    <div class="form-group-file">
                        <label for="fileUpload" class="labelAttachBtn">Attach File</label>
                        <input type="file" id="fileUpload" name="attachmentFileImage" class="fileAttach">
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









<!-- specialSkillstModal -->
<div class="modal fade" id="specialSkillstModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    Special Skills
                </h5>
            </div>
            <div class="modal-body">
                <div class="section-add-reference-modal">
                    <div class="form-group">
                        <label for="">Title <span id="nameEmpty"></span> </label>
                        <input type="text" id="referenceFullname" class="form-control">
                    </div>
                    <div class="form-group">
                        <!-- <label for="">Attach File</label> -->
                        <input type="file" id="referenceAddress">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="number" value="{{$employeeID}}" name="employeeID" id="employee_ID" hidden>
                <button type="button" id="specialSkillsBtn" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
























<!-- nonAcademicRecognitiontModal -->
<div class="modal fade" id="nonAcademicRecognitiontModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    Non Academic Recognition
                </h5>
            </div>
            <div class="modal-body">
                <div class="section-add-reference-modal">
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" id="" class="form-control">
                    </div>
                    <div class="form-group-file">
                        <label for="fileUpload" class="labelAttachBtn">Attach File</label>
                        <input type="file" id="fileUpload" name="attachmentFileImage" class="fileAttach">
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

<!-- associationOrganizationModal -->
<div class="modal fade" id="associationOrganizationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    Association / Organization
                </h5>
            </div>
            <div class="modal-body">
                <div class="section-add-reference-modal">
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" id="" class="form-control">
                    </div>
                    <div class="form-group-file">
                        <label for="fileUpload" class="labelAttachBtn">Attach File</label>
                        <input type="file" id="fileUpload" name="attachmentFileImage" class="fileAttach">
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

<!-- orientationModal -->
<div class="modal fade" id="orientationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    Orientations
                </h5>
            </div>
            <div class="modal-body">
                <div class="section-add-reference-modal">
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" id="" class="form-control">
                    </div>
                    <div class="row">        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Start Date</label>
                                <input type="date" id="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">End Date</label>
                                <input type="date" id="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group-file">
                        <label for="fileUpload" class="labelAttachBtn">Attach File</label>
                        <input type="file" id="fileUpload" name="attachmentFileImage" class="fileAttach">
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


<script src="{{asset('js/otherTraining.js')}}"></script>
@endsection