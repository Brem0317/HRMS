@extends('layouts.app')

@section('content')
<div class="section-employee-add">
    <div class="row">
        <div class="col-md-12 breadCrumb">
            <x-breadcrumbs breadCrumbs="Employee / Personal Information"/>
        </div>
    </div> 
    <div class="card">
        <div class="card-header">
            Personal Information
        </div>

        <form action="/employee" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="row">
                            <!-- First Column -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="image-plate">
                                        <!-- image Preview -->
                                        <div class="image">
                                            <img id="imageView" src="#" alt="Require attach 2x2 image"/>
                                        </div>
                                        <label for="imgInp" class="labelAttachBtn">
                                            <i class="fas fa-file-image"></i>
                                        </label>
                                        <input type="file" id="imgInp" name="employee_image" class="fileAttach" accept="image/*" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">ID Number</label>
                                    <input type="text" name="employee_id_number" placeholder="i.e JMDC09302022" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <!-- Second Column -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="employee-label-top">Firstname</label>
                                    <input type="text" name="employee_fname" placeholder="i.e Juan" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Gender</label>
                                    <select name="employee_gender" id="" class="form-control" required>
                                        <option value="">. . .</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Weight (kg)</label>
                                    <input type="text" name="employee_weight" placeholder="i.e 0" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Telephone Number</label>
                                    <input type="number" name="employee_tel_no" placeholder="i.e (083) 0000">
                                </div>
                            </div>
                            <!-- Third Column -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="employee-label-top">Middlename</label>
                                    <input type="text" name="employee_mname" placeholder="i.e Matino">
                                </div>
                                <div class="form-group">
                                    <label for="">Date of Birth</label>
                                    <input type="date" name="employee_date_of_birth" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Height (m)</label>
                                    <input type="text" name="employee_height" placeholder="i.e 0" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" name="employee_email" placeholder="i.e juan@hccci.edu.ph">
                                </div>
                            </div>
                            <!-- Fourth Column -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="employee-label-top">Lastname</label>
                                    <input type="text" name="employee_lname" placeholder="i.e Dela Cruz" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Blood Type</label>
                                    <input type="text" name="employee_blood_type" placeholder="i.e A+">
                                </div>
                                <div class="form-group">
                                    <label for="">Employment Status</label>
                                    <select name="employee_status" id="" required>
                                        <option value="">. . .</option>
                                        @foreach ($employeeStatuses as $employeeStatus)
                                            <option value="{{$employeeStatus->id}}">{{$employeeStatus->cl_status_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Mobile Number</label>
                                    <input type="text" name="employee_mobile_Number" placeholder="i.e 0000 000 0000">
                                </div>
                            </div>
                            <!-- Fifth Column -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="employee-label-top">Name Extension</label>
                                    <select name="employee_name_extention" id="">
                                        <option value="">. . .</option>
                                        <option value="Jr">Jr</option>
                                        <option value="Sr">Sr</option>
                                        <option value="I">I</option>
                                        <option value="II">II</option>
                                        <option value="III">III</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Civil Status</label>
                                    <select name="employee_civil_status" id="" required>
                                        <option value="">. . .</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Single-Parent">Single Parent</option>
                                        <option value="Widowed">Widowed</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Place of Birth</label>
                                    <textarea name="employee_place_of_birth" id="" cols="30" rows="5" placeholder="i.e Brgy, Street, Municipality, Province" required></textarea>
                                </div>
                                <div class="form-group"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <div class="secondRowTitle">
                            <h2>Citizenship</h2>
                        </div>
                        <div class="row">
                            <!-- Second Row First Column -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="radio" class="radio-label" name="employee_citizenship" value="Filipino" required>
                                    <label for="" class="radio-label">Filipino</label>
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="employee_citizenship" value="Dual Citizenship" required>
                                    <label for="" class="radio-label">Dual Citizenship</label>
                                </div>
                                <div class="form-group p-1">
                                    <input type="radio" name="employee_by_birth" value="By Birth">
                                    <label for="" class="radio-label">Birth</label>
                                    <input type="radio" name="employee_by_birth" value="By Naturalization">
                                    <label for="" class="radio-label">Naturalization</label>
                                </div>
                                <div class="form-group">
                                    <select name="employee_country" id="" class="form-control">
                                        <option value="">. . .</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country }}">{{ $country }}</option>
                                        @endforeach
                                    </select>
                                    <input type="text" name="on_discuss" hidden>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="secondRowTitle">
                            <h2>Address</h2>
                        </div>
                        <div class="row">
                            <!--Second Row Second Column -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for=""  class="employee-label-top">City</label>
                                    <select id="" class="form-control" name="employee_city">
                                        <option value="">. . .</option>
                                        @foreach($cities as $city)
                                            <option value="{{ $city['name'] }}">{{ $city['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="" >Subdivision</label>
                                    <input type="text" name="employee_subdivision">
                                </div>
                            </div>
                            <!--Second Row Third Column -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="employee-label-top">Province</label>
                                    <select id="" class="form-control" name="employee_province" required>
                                        <option value="">. . .</option>
                                        @foreach($provinces as $province)
                                            <option value="{{ $province['name'] }}">{{ $province['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Block / Lot No.</label>
                                    <input type="text" name="employee_block_lot_no">
                                </div>
                            </div>
                            <!--Second Row Fourth Column -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="employee-label-top">Municipality</label>
                                    <select id="" class="form-control" name="employee_municipality" required>
                                        <option value="">. . .</option>
                                        @foreach($Municipaities as $Municipaity)
                                            <option value="{{ $Municipaity['name'] }}">{{ $Municipaity['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Street</label>
                                    <input type="text" name="employee_street">
                                </div>
                            </div>
                            <!--Second Row Fifth Column -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="employee-label-top">Barangay</label>
                                    <select id="" name="employee_barangay" required>
                                        <option value="">. . .</option>
                                        <option value="Reyes">Reyes</option>
                                        <option value="Libertad">Libertad</option>
                                        <option value="Rizal">Rizal</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Zip Code</label>
                                    <input type="number" name="employee_zip_code" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <button class="btn">Submit</button>
            </div>
        </form>
    </div>
</div>

<script src="{{asset('js/employeeInformation.js')}}"></script>
@endsection