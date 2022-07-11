@extends('layouts.app')

@section('content')
<div class="section-civil-service-add">
    <div class="row">
        <div class="col-md-6 breadCrumb">
            <x-breadcrumbs breadCrumbs="Employee / Civil Service Eligibility"/>
        </div>
    </div> 
    <div class="card">
        <div class="card-header">
            <x-cardnav employeeId='{{$employeeID}}' 
                familyTabActive='' 
                civilserviceTabActive='active'/>
        </div>
        <form action="/employee-civil-service" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <input type="number" value="{{$employeeID}}" name="employeeID" hidden>
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="non-prof">
                            <label>Non Professional</label>
                        </div>
                        <div class="first-row">
                            <div class="col-md-7">
                                <label for="categoryInputId">Category</label>
                                <select id="categoryId categoryNonprof" class="categoryClass" name="categoryNonprof">
                                    @if(isset($csnonprofData))
                                        <option value="{{$csnonprofData->cl_category}}">{{$csnonprofData->cl_category}}</option>
                                    @else
                                        <option value="">. . .</option>
                                    @endif
                                        <option value="CAREER SERVICE">CAREER SERVICE</option>
                                        <option value="RA 1080 (BOARD/ BAR)">RA 1080 (BOARD/ BAR)</option>
                                        <option value="UNDER SPECIAL LAWS">UNDER SPECIAL LAWS</option>
                                        <option value="CES">CES</option>
                                        <option value="CSEE BARANGAY ELIGIBILITY">CSEE BARANGAY ELIGIBILITY</option>
                                        <option value="DRIVER'S LICENSE">DRIVER'S LICENSE</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="ratingInput">Ratings</label>
                                <input type="text" id="ratingInput ratingNonProf" class="input-size" name="ratingNonProf" @if(isset($csnonprofData)) value="{{$csnonprofData->cl_ratings}}" @else  placeholder="100%" @endif>
                            </div>
                            <div class="col-md-2">
                                <label for="dateOfExamination">Date of Examination / Confirment</label>
                                <input type="date" id="dateOfExamination dateOfExaminationNonprof" class="input-size" @if(isset($csnonprofData))value="{{$csnonprofData->cl_date_of_examination}}"@endif name="dateOfExaminationNonprof">
                            </div>
                        </div>
                        <div class="second-row">
                            <div class="non-second-div">
                                <label for="placeOfExamination">Place of Examination</label>
                                <input type="text" id="placeOfExamination placeOfExaminationNonprof" class="placeOfExamination" name="placeOfExaminationNonprof" @if(isset($csnonprofData)) value="{{$csnonprofData->cl_place_of_examination}}" @else placeholder="i.e Allah Valley Dr, Surallah, South Cotabato, 9512" @endif>
                            </div>
                            <div class="row-second-2">
                                <label for="licenseNumber">License Number</label>
                                <input type="text" id="licenseNumber licenseNumberNonprof" class="input-size" name="licenseNumberNonprof" @if(isset($csnonprofData)) value="{{$csnonprofData->cl_license_number}}" @else placeholder="000-00-000000" @endif>
                            </div>
                            <div class="row-second-2">
                                <label for="licenseValid">License validity</label>
                                <input type="date" id="licenseValid licenseValidNonprof" class="" @if(isset($csnonprofData))value="{{$csnonprofData->cl_licencse_validity}}"@endif name="licenseValidNonprof">
                            </div>
                            <input type="file" id="nonprofAttach" class="attachFile" name="nonprofAttach">
                        </div>
                    </div>

                    <div class="col-md-12 prof-div">
                        <div class="prof">
                            <label>Professional</label>
                        </div>
                        <div class="first-row">
                            <div class="col-md-7">
                                <label for="categoryProf">Category</label>
                                <select id="categoryId categoryProf" class="categoryClass" name="categoryProf">
                                    @if(isset($csprofData))
                                        <option value="{{$csprofData->cl_category}}">{{$csprofData->cl_category}}</option>
                                    @else
                                        <option value="">. . .</option>
                                    @endif
                                    <option value="CAREER SERVICE">CAREER SERVICE</option>
                                    <option value="RA 1080 (BOARD/ BAR)">RA 1080 (BOARD/ BAR)</option>
                                    <option value="UNDER SPECIAL LAWS">UNDER SPECIAL LAWS</option>
                                    <option value="CES">CES</option>
                                    <option value="CSEE BARANGAY ELIGIBILITY">CSEE BARANGAY ELIGIBILITY</option>
                                    <option value="DRIVER'S LICENSE">DRIVER'S LICENSE</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="ratingInput">Ratings</label>
                                <input type="text" id="ratingInput ratingProf" class="input-size" name="ratingProf" @if(isset($csprofData)) value="{{$csprofData->cl_ratings}}" @else placeholder="100%" @endif>
                            </div>
                            <div class="col-md-2">
                                <label for="dateOfExamination">Date of Examination / Confirment</label>
                                <input type="date" id="dateOfExamination dateOfExaminationProf" class="input-size" @if(isset($csprofData))value="{{$csprofData->cl_date_of_examination}}"@endif name="dateOfExaminationProf">
                            </div>
                        </div>
                        <div class="second-row">
                            <div class="non-second-div">
                                <label for="placeOfExamination">Place of Examination</label>
                                <input type="text" id="placeOfExamination placeOfExaminationProf" class="placeOfExamination" name="placeOfExaminationProf" @if(isset($csprofData)) value="{{$csprofData->cl_place_of_examination}}" @else placeholder="i.e Allah Valley Dr, Surallah, South Cotabato, 9512" @endif>
                            </div>
                            <div class="row-second-2">
                                <label for="licenseNumber">License Number</label>
                                <input type="text" id="licenseNumber licenseNumberProf" class="input-size" name="licenseNumberProf" @if(isset($csprofData)) value="{{$csprofData->cl_license_number}}" @else placeholder="000-00-000000" @endif>
                            </div>
                            <div class="row-second-2">
                                <label for="licenseValid">License validity</label>
                                <input type="date" id="licenseValid licenseValidProf" class="" @if(isset($csprofData)) value="{{$csprofData->cl_licencse_validity}}" @endif name="licenseValidProf">
                            </div>
                            <input type="file" id="profAttach " class="attachFile" name="profAttach">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn next-btn">Next</button>
            </div>
        </form>
    </div>
</div>

@endsection