@extends('layouts.app')

@section('content')
<section>
    <div class="section-medical-information-add">
        <div class="row">
            <div class="col-md-6 breadCrumb">
                <x-breadcrumbs breadCrumbs="Employee / Medical Information"/>
            </div><!-- breadcrumb -->
        </div> <!-- row -->    
        <div class="card">
            <div class="card-header">
                <x-cardnav employeeId='{{$employeeID}}'/>
            </div><!-- card header -->
            <div class="card-body">
                <form action="/employee-medical-result" enctype="multipart/form-data" method="POST" id="employeeMedicalInformation">
                    @csrf
                    <input type="text" value="{{$employeeID}}" hidden name="employeeID">                    

                    <div class="col empMedicalInformationContent">
                        <div class="fixHeight">
                            <div class="sectionContent vaccinationForm">
                                <button type="button" class="btn modalAddBtn sectionAddBtn" data-toggle="modal" data-target="#vaccinationModal">Add</button>                                
                                <h5>Vaccination Form</h5>                                
                                @if(empty($vaccineshots))
                                    <p class="noRecords">No Vaccine Records Found.</p>
                                @else
                                <table class="vaccinationFormList">
                                    <thead>
                                        <tr>
                                            <th>Covid-19 Vaccination</th>
                                            <th>Date</th>
                                            <th>Vaccine Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!is_null($vaccineshots->cl_vaccine_name1))                                        
                                        <tr class="data-row">
                                            <td class="vaccinationSequence">{{$vaccineshots->cl_sequence1}}</td>
                                            <td class="vaccinationDate">{{$vaccineshots->cl_date1}}</td>
                                            <td class="vaccinationName">{{$vaccineshots->cl_vaccine_name1}}</td>
                                            <td>                                        
                                                <button type="button" id="vaccinationEdit" class="btn" data-item-id="{{ $vaccineshots->id }}"><i class="fas fa-pen"></i></button>
                                                <button type="button" id="vaccinationDelete" class="btn" data-item-id="{{ $vaccineshots->id }}"><i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        @endif
                                        @if (!is_null($vaccineshots->cl_vaccine_name2))                                        
                                        <tr class="data-row">
                                            <td class="vaccinationSequence">{{$vaccineshots->cl_sequence2}}</td>
                                            <td class="vaccinationDate">{{$vaccineshots->cl_date2}}</td>
                                            <td class="vaccinationName">{{$vaccineshots->cl_vaccine_name2}}</td>
                                            <td>                                        
                                                <button type="button" id="vaccinationEdit" class="btn" data-item-id="{{ $vaccineshots->id }}"><i class="fas fa-pen"></i></button>
                                                <button type="button" id="vaccinationDelete" class="btn" data-item-id="{{ $vaccineshots->id }}"><i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>                     
                                @endif
                            </div><!-- vaccination form section -->
                            <div class="sectionContent boosterShot"><button type="button" class="btn modalAddBtn sectionAddBtn" data-toggle="modal" data-target="#boosterModal">Add</button>  
                                <h5>Booster Shot</h5>
                                @if($boostershots->count() > 0)
                                <table class="boosterShotList">
                                    <tbody>
                                        
                                        @foreach ($boostershots as $boostershot)
                                        <tr class="data-row">
                                            <td>Booster</td>
                                            <td class="boosterDate">{{ $boostershot->cl_date }}</td>
                                            <td class="boosterName">{{ $boostershot->cl_vaccine_name }}</td>
                                            <td>                                        
                                                <button type="button" id="boosterEdit" class="btn" data-item-id="{{ $boostershot->id }}"><i class="fas fa-pen"></i></button>
                                                <button type="button" id="boosterDelete" class="btn" data-item-id="{{ $boostershot->id }}"><i class="fas fa-trash-alt"></i></button>
                                            </td>                                            
                                        </tr>
                                        @endforeach
                                            
                                    </tbody>
                                </table> 
                                @else 
                                    <p class="noRecords">No Booster Records Found.</p>
                                @endif
                            </div><!-- booster shot section -->                            
                            <div class="sectionContent medicalResults">
                                <h5>Medical Results</h5>
                                    <div class="attachmentDiv">
                                        <label for="medicalResultsAttachment01">Urinalysis</label>
                                        <input type="file" accept=".JPG, .jpg, .jpeg, .png, .pdf" name="medicalResultsAttachment01" class="fileUpload">
                                    </div>
                                    <div class="attachmentDiv">
                                        <label for="medicalResultsAttachment02">Drug Test</label>
                                        <input type="file" accept=".JPG, .jpg, .jpeg, .png, .pdf" name="medicalResultsAttachment02" class="fileUpload">
                                    </div>
                                    <div class="attachmentDiv">
                                        <label for="medicalResultsAttachment03">Physical Exam</label>
                                        <input type="file" accept=".JPG, .jpg, .jpeg, .png, .pdf" name="medicalResultsAttachment03" class="fileUpload">
                                    </div>
                                    <div class="attachmentDiv">
                                        <label for="medicalResultsAttachment04">Fecalysis</label>
                                        <input type="file" accept=".JPG, .jpg, .jpeg, .png, .pdf" name="medicalResultsAttachment04" class="fileUpload">
                                    </div>
                                    <div class="attachmentDiv">
                                        <label for="medicalResultsAttachment05">Chest X-Ray</label>
                                        <input type="file" accept=".JPG, .jpg, .jpeg, .png, .pdf" name="medicalResultsAttachment05" class="fileUpload">
                                    </div>                   
                               
                            </div><!-- medical results section -->
                        </div><!-- fix height -->
                        <button class="btn footerBtn sectionAddBtn">Next</button>
                    </div><!-- medical information content -->    
                </form><!-- form -->
            </div><!-- card body -->
            <div class="card-footer">
            </div><!-- card footer -->        
        </div><!-- card -->
    </div><!-- section medical information add --> 
</section>

@include('components.employee.includes.medicalinformation.vaccinationformmodals')
@include('components.employee.includes.medicalinformation.boostershotmodals')

<script src="{{ asset('js/addboostershot.js')}}"></script>
<script src="{{ asset('js/addvaccinationform.js')}}"></script>

@endsection