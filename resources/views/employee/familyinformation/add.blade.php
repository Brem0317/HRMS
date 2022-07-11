@extends('layouts.app')

@section('content')
<div class="section-employee-information-add">
    <div class="row">
        <div class="col-md-6 breadCrumb">
            <x-breadcrumbs breadCrumbs="Employee / Family Information"/>
        </div>
    </div> 

    <div class="card">
        <div class="card-header">
            <x-cardnav employeeId='{{$employeeID}}' familyTabActive='active'/>
        </div>
        <form action="/employee-spouse" method="POST">
            @csrf
            <div class="card-body">
                <input type="text" value="{{$employeeID}}" name="employeeID" hidden>

                <!-- Spouse Information -->
                <div class="col-md-12">
                    <div class="spouse-div">
                        <label>Spouse Information</label>
                    </div>
                    <div class="spouse-row-first">
                        <div class="col-md-2">
                            <label for="spouseFirstName">First Name</label>
                            <input type="text" id="" class="" name="spouseFirstName" @if(isset($spouseData->cl_first_name)) value="{{$spouseData->cl_first_name}}" @else placeholder="i.e. Juan" @endif>
                        </div>
                        <div class="col-md-2">
                            <label for="spouseMiddleName">Middle Name</label>
                            <input type="text" id="" class="" name="spouseMiddleName" @if(isset($spouseData->cl_middle_name)) value="{{$spouseData->cl_middle_name}}" @else placeholder="i.e. Matino" @endif>
                        </div>
                        <div class="col-md-2">
                            <label for="spouseLastName">Last Name</label>
                            <input type="text" id="" class="" name="spouseLastName" @if(isset($spouseData->cl_last_name)) value="{{$spouseData->cl_last_name}}" @else placeholder="i.e. Dela Cruz" @endif>
                        </div>
                        <div class="col-md-2">
                            <label for="spouseNameExt">Name Extension</label>
                            <select id="" class="" name="spouseNameExt">
                                <option value="">. . .</option>
                                @if(isset($spouseData->cl_name_ext))
                                <option value="{{$spouseData->cl_name_ext}}" selected>{{$spouseData->cl_name_ext}}</option>
                                <option value="Sr.">Sr.</option>
                                <option value="Jr.">Jr.</option>
                                <option value="I">I</option>
                                <option value="II">II</option>
                                <option value="II">III</option>
                                <option value="IV" >IV</option>
                                <option value="V">V</option>
                                @else
                                <option value="Sr.">Sr.</option>
                                <option value="Jr.">Jr.</option>
                                <option value="I">I</option>
                                <option value="II">II</option>
                                <option value="II">III</option>
                                <option value="IV" >IV</option>
                                <option value="V">V</option>
                                @endif
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="spouseOccupation">Occupation</label>
                            <input type="text" id="" class="" name="spouseOccupation" @if(isset($spouseData->cl_occupation)) value="{{$spouseData->cl_occupation}}" @else placeholder="i.e. Teacher" @endif>
                        </div>
                    </div>
                    <div class="spouse-row-second">
                        <div class="col-md-2">
                            <label for="spouseTelephoneNumber">Telephone Number</label>
                            <input type="text" id="" class="" name="spouseTelephoneNumber" @if(isset($spouseData->cl_telephone_number)) value="{{$spouseData->cl_telephone_number}}" @else placeholder="000-0000" @endif>
                        </div>
                        <div class="col-md-2">
                            <label for="spouseEmployerBusinessName">Employer Business Name</label>
                            <input type="text" id="" class="" name="spouseEmployerBusinessName" @if(isset($spouseData->cl_employer_business_name)) value="{{$spouseData->cl_employer_business_name}}" @else placeholder="i.e. HCCCI/Buy & Sell" @endif>
                        </div>
                        <div class="col-md-7">
                            <label for="spouseBusinessAddress">Business Address</label>
                            <input type="text" id="" class="" name="spouseBusinessAddress" @if(isset($spouseData->cl_business_address)) value="{{$spouseData->cl_business_address}}" @else placeholder="i.e. Libertad, Surallah, South Cotabato" @endif>
                        </div>
                    </div>
                </div>

                <!-- Father Information -->
                <div class="col-md-12 father-col-md">
                    <div class="father-div">
                        <label for="">Father Information</label>
                    </div>
                    <div class="father-row">
                        <div class="col-md-2">
                            <label for="fatherFirstName">First Name</label>
                            <input type="text" id="" class="" name="fatherFirstName" @if(isset($fatherData->cl_first_name)) value={{$fatherData->cl_first_name}} @else placeholder="i.e. Juan" @endif>
                        </div>
                        <div class="col-md-2">
                            <label for="fatherMiddleName">Middle Name</label>
                            <input type="text" id="" class="" name="fatherMiddleName" @if(isset($fatherData->cl_middle_name)) value={{$fatherData->cl_middle_name}} @else placeholder="i.e. Matino" @endif>
                        </div>
                        <div class="col-md-2">
                            <label for="fatherLastName">Last Name</label>
                            <input type="text" id="" class="" name="fatherLastName" @if(isset($fatherData->cl_last_name)) value={{$fatherData->cl_last_name}} @else placeholder="i.e. Dela Cruz" @endif>
                        </div>
                        <div class="col-md-2">
                            <label for="fatherNameExt">Name Extension</label>
                            <select id="" class="" name="fatherNameExt">
                                @if(isset($fatherData->cl_name_ext))
                                <option value="{{$fatherData->cl_name_ext}}" selected>{{$fatherData->cl_name_ext}}</option>
                                <option value="Sr.">Sr.</option>
                                <option value="Jr.">Jr.</option>
                                <option value="I">I</option>
                                <option value="II">II</option>
                                <option value="II">III</option>
                                <option value="IV" >IV</option>
                                <option value="V">V</option>
                                @else
                                <option value="">. . .</option>
                                <option value="Sr.">Sr.</option>
                                <option value="Jr.">Jr.</option>
                                <option value="I">I</option>
                                <option value="II">II</option>
                                <option value="II">III</option>
                                <option value="IV" >IV</option>
                                <option value="V">V</option>
                                @endif
                            </select>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>

                <!-- Mother Information -->
                <div class="col-md-12 mother-col-md">
                    <div class="mother-div">
                        <label for="">Mother Information</label>
                    </div>
                    <div class="mother-row">
                        <div class="col-md-2">
                            <label for="motherFirstName">First Name</label>
                            <input type="text" id="" class="" name="motherFirstName" @if(isset($motherData->cl_first_name)) value="{{$motherData->cl_first_name}}" @else placeholder="i.e. Juan" @endif>
                        </div>
                        <div class="col-md-2">
                            <label for="motherMiddleName">Middle Name</label>
                            <input type="text" id="" class="" name="motherMiddleName" @if(isset($motherData->cl_middle_name)) value="{{$motherData->cl_middle_name}}" @else placeholder="i.e. Matino" @endif>
                        </div>
                        <div class="col-md-2">
                            <label for="motherLastName">Last Name</label>
                            <input type="text" id="" class="" name="motherLastName" @if(isset($motherData->cl_last_name)) value="{{$motherData->cl_last_name}}" @else placeholder="i.e. Dela Cruz" @endif>
                        </div>
                    </div>
                </div>

                <!-- Children Information -->
                <div class="col-md-12 children-col-md">
                    <div class="children-div">
                        <label for="">Children Information</label>
                        <div class="children-btn">
                            <button type="button" id="childrenAddBtn" class="childrenAddBtn" data-toggle="modal" data-target="#childrenAddModal">
                                Add
                            </button>
                        </div>
                    </div>
                    <div class="children-row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Date of Birth</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="chilrenTableList" class="chilrenTableList">
                                @if(isset($childrenDatas))
                                    @foreach($childrenDatas as $childrenData)
                                        <tr id="row{{$childrenData->id}} trVal{{$childrenData->id}}">
                                            <td id="tdFullNameChildren{{$childrenData->id}}">
                                                <input type="text" id="fullNameChildren{{$childrenData->id}}" name="fullNameChildren[]" value="{{$childrenData->cl_full_name}}" hidden >
                                                {{$childrenData->cl_full_name}}
                                            </td>
                                            <td id ="editDateOfBirth{{$childrenData->id}}">
                                                <input type="date" id="dateOfBirth{{$childrenData->id}}" name="dateOfBirth[]" value="{{$childrenData->cl_date_of_birth}}" hidden>
                                                {{$childrenData->cl_date_of_birth}}
                                            </td>
                                            <td>
                                                <button type="button" id="{{$childrenData->id}}" class="editBtn" data-toggle="modal" data-target="#childrenEditModal">
                                                    <i class="fas fa-pen"></i>
                                                </button>
                                                <button type="button" id="{{$childrenData->id}}" class="deleteBtn btn_remove btnDeleteVal" data-item-id="{{$childrenData->id}}">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>

            <!-- card-footer -->
            <div class="card-footer">
                <button class="btn float-right">Next</button>
            </div>
        </form>
        
    </div>

    <!-- Add Children -->
    <div id="childrenAddModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">Children Information</div>
                <div class="modal-body">
                    <div class="addmorefieldDiv float-right">
                        <!-- <button id="addmorefield" class="addmorefield">
                            <i class="fas fa-plus"></i> Add More Field
                        </button> -->
                    </div>
                    @if(isset($childrenDatas))
                        @if($childrenDatas->count() > 0)
                            <form action="/employee-spouse" method="POST" id="addChildrenForm">
                                @csrf  
                                <input type="text" id="addChildInputEmployeeId" name="addChildInput_EmployeeId" value="{{$employeeID}}" hidden>
                        @endif
                    @endif
                        <div class="form-row">
                            <div class="form-group nameDiv">
                                <label for="fullNameChildren">Name</label>
                                <input type="text" id="fullNameChildren" class="fullNameChildren" name="@if(isset($childrenDatas))fullNameChildren @else fullNameChildren[] @endif">
                            </div>
                            <div class="form-group dateOfBirthDiv">
                                <label for="dateOfBirth">Date of Birth</label>
                                <input type="date" id="dateOfBirth" class="dateOfBirth" name="@if(isset($childrenDatas))dateOfBirth @else dateOfBirth[] @endif">
                            </div>
                        </div>
                    @if(isset($childrenDatas))</form> @endif
                </div>
                <div class="modal-footer">
                    <button type="button" id="closeChildrenModal" class="closeChildrenModal" data-dismiss="modal" aria-lable="Close">
                        Cancel
                    </button>
                    <!-- Check if Child has data -->
                    @if(isset($childrenDatas))
                        @if($childrenDatas->count() > 0)
                            <button type="button" id="submitAddChild" class="submitAddChilrenModal">
                                Add
                            </button>
                        @else
                            <button type="button" id="submitChilrenModal" class="submitChilrenModal">
                                Add
                            </button>
                        @endif
                    @else
                        <button type="button" id="submitChilrenModal" class="submitChilrenModal">
                            Add
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Children -->
    <div id="childrenEditModal" class="modal editModal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">Children Information</div>
                <div class="modal-body">
                    @if(isset($childrenDatas))
                    <form action="/employee-spouse" method="POST" id="editChildrenForm">
                        @csrf  
                        <input type="text" id="childInputEmployeeId" name="childInput_EmployeeId" value="{{$employeeID}}" hidden>
                        <input type="text" id="childId" name="childId_" hidden>
                        <input type="hidden" value="{{ $employeeID }}" name="employeeID">
                    @endif
                        <div class="form-row">
                                <div class="form-group nameDiv">
                                    <label for="fullNameChildren">Name</label>
                                    <input type="text" id="fullNameEditChildren" class="fullNameChildren" name="@if(isset($childrenDatas))fullNameChildren @else fullNameChildren[]@endif">
                                </div>
                                <div class="form-group dateOfBirthDiv">
                                    <label for="dateOfBirth">Date of Birth</label>
                                    <input type="date" id="editDateOfBirth" class="dateOfBirth" name="@if(isset($childrenDatas))dateOfBirth @else dateOfBirth[] @endif">
                                </div>
                        </div>
                    @if(isset($childrenDatas))</form> @endif
                </div>
                <div class="modal-footer">
                    <button type="button" id="closeChildrenEditModal" class="closeChildrenEditModal" data-dismiss="modal" aria-lable="Close">
                        Cancel
                    </button>
                    <!-- Check if Child has data -->
                    @if(isset($childrenDatas))
                    <button type="button" id="submitEditChild" class="submitChilrenModal">
                        Edit
                    </button>
                    @else
                    <button type="button" id="submitChilrenEditModal" class="submitChilrenModal">
                        Edit
                    </button>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Children -->
    <div class="modal fade" id="deleteChildrenModal" tabindex="-1" role="dialog" aria-labelledby="delete-children-modal-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="warning-logo">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <form method="POST" id="deleteChildrenForm">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" value="{{ $employeeID }}" name="employeeID">
                    <div class="form-group" id="childrenDivNameModal">
                    </div>
                </form>
                <div class="deleteBtns">
                    <button type="button" id="childrenDeleteBtn" class="btn">Yes</button>
                    <button type="button" id="childrenCancelBtn" class="btn" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/familyinformation-add.js')}}"></script>
@endsection