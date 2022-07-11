@extends('layouts.app')

@section('content')
<div class="section-work-experience-add">
    <div class="row">
        <div class="col-md-6 breadCrumb">
            <x-breadcrumbs breadCrumbs="Employee / Work Experience"/>
        </div>
    </div> 

    <div class="card">
        <div class="card-header">
            <x-cardnav employeeId='{{$employeeID}}' 
                familyTabActive='' 
                civilserviceTabActive='active'
            />
        </div>
                
        <form action="/employee-work-experience-next" method="POST">
            @csrf
            <div class="card-body">
                <button type="button" id="btnAdd" class="btn btn-add">Add</button>
                <input type="text" id="employeeID" value="{{$employeeID}}" name="employeeID" hidden>

                
                <div class="contents">
                    <div class="label-div">
                        <label>Work Experience</label>
                    </div>

                    <!-- List/Table for Work Experience -->
                    <div class="div-table-header">
                        <table class="table table-header">
                            <thead>
                                <tr>
                                    <th class="th-startdate">Start Date</th>
                                    <th class="th-enddate">End Date</th>
                                    <th class="th-position">Position</th>
                                    <th class="th-agency">Agency/Company</th>
                                    <th class="th-monthly">Monthly Salary</th>
                                    <th class="th-salarygrade">Salary Grade</th>
                                    <th class="th-status">Status of Appointment</th>
                                    <th class="th-government">Government Service</th>
                                    <th class="th-attach">Attached File</th>
                                    <th class="th-action">Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    
                    <div class="div-table-body">
                        <table class="table table-data">
                            <tbody>
                                @if(isset($allWorkExperinces))
                                    @foreach($allWorkExperinces as $allWorkExperince)
                                        <tr id="trow{{$allWorkExperince->id}}">
                                            <input type="text" value="{{$allWorkExperince->employee_id}}" name="employeeID" id="" hidden>
                                            <td class="td-startdate">
                                                {{$allWorkExperince->cl_start_date}}
                                                <input type="hidden" id="startDate{{$allWorkExperince->id}}" value="{{$allWorkExperince->cl_start_date}}">
                                            </td>

                                            <td class="td-enddate">
                                                {{$allWorkExperince->cl_end_date}}
                                                <input type="hidden" id="endDate{{$allWorkExperince->id}}" value="{{$allWorkExperince->cl_end_date}}">
                                            </td>

                                            <td class="td-position">
                                                {{$allWorkExperince->cl_position}}
                                                <input type="hidden" id="position{{$allWorkExperince->id}}" value="{{$allWorkExperince->cl_position}}">
                                            </td>

                                            <td class="td-agency">
                                                {{$allWorkExperince->cl_agency_or_company}}
                                                <input type="hidden" id="agency{{$allWorkExperince->id}}" value="{{$allWorkExperince->cl_agency_or_company}}">
                                            </td>

                                            <td class="td-monthly">
                                                {{$allWorkExperince->cl_monthly_salary}}
                                                <input type="hidden" id="monthlySalary{{$allWorkExperince->id}}" value="{{$allWorkExperince->cl_monthly_salary}}">
                                            </td>

                                            <td class="td-salarygrade">
                                                {{$allWorkExperince->cl_salary_grade}}
                                                <input type="hidden" id="salaryGrade{{$allWorkExperince->id}}" value="{{$allWorkExperince->cl_salary_grade}}">
                                            </td>

                                            <td class="td-status">
                                                {{$allWorkExperince->cl_status_of_appointment}}
                                                <input type="hidden" id="statusOfAppointment{{$allWorkExperince->id}}" value="{{$allWorkExperince->cl_status_of_appointment}}">
                                            </td>

                                            <td class="td-government">
                                                {{$allWorkExperince->cl_government_status}}
                                                <input type="hidden" id="governmentStatus{{$allWorkExperince->id}}" value="{{$allWorkExperince->cl_government_status}}">
                                            </td>

                                            <td class="td-attach">
                                                {{$allWorkExperince->cl_attachment}} 
                                                <input type="text" id="attachment{{$allWorkExperince->id}}" name="attachment" value="{{$allWorkExperince->original_attachment}}" hidden>
                                            </td>

                                            <td class="td-action">
                                                <button type="button" id="{{$allWorkExperince->id}}" class="editBtn" data-toggle="" data-target="">
                                                    <i class="fas fa-pen"></i>
                                                </button>
                                                <button type="button" id="{{$allWorkExperince->id}}" class="deleteBtn btn_remove btnDeleteVal" data-item-id="">
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
            <div class="card-footer">
                <button class="btn btn-next">Next</button>
            </div>
        </form>
    </div>
</div>


<!-- Modal add/update/delete -->
<div id="addWorkExperience" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">Work Experience</div>
            <div class="modal-body">
                <div id="modalContent" class="modal-body-content">
                    @csrf
                        <!-- Employee Id -->
                        <input type="text" value="{{$employeeID}}" name="employeeID" hidden>

                        <!--  -->
                        <div class="first-row">
                            <div class="first-input-div">
                                <label for="startDateInput">Start Date</label>
                                <input type="date" id="startDateInput" class="startDateInput" name="startDate" placeholder=". . .">
                            </div>
                            <div class="second-input-div">
                                <label for="endDateInput">End Date</label>
                                <input type="date" id="endDateInput" class="endDateInput" name="endDate"  placeholder=". . .">
                            </div>
                        </div>
    
                        <div class="second-row">
                            <div class="agency-div">
                                <label for="agencyInput">Agency / Company</label>
                                <input type="text" id="agencyInput" class="agencyInput" name="agency" placeholder="i.e. Training Camp">
                            </div>
                        </div>
    
                        <div class="third-row">
                            <div class="first-input-div">
                                <label for="">Position</label>
                                <input type="text" id="positionInput" class="positionInput" name="position" placeholder=". . .">
                            </div>
    
                            <div class="second-input-div">
                                <label for="">Monthly Salary</label>
                                <input type="text" id="monthlySalaryInput" class="monthlySalaryInput" name="monthlySalary" placeholder=". . .">
                            </div>
                        </div>
    
                        <div class="fourth-row">
                            <div class="first-input-div">
                                <label for="">Salary Grade</label>
                                <input type="text" id="salaryGradeInput" class="salaryGradeInput" name="salaryGrade" placeholder=". . .">
                            </div>
                            <div class="second-input-div">
                                <label for="">Status of Appointment</label>
                                <input type="text" id="statusOfAppointmentInput" class="statusOfAppointmentInput" name="statusOfAppointment" placeholder=". . .">
                            </div>
                        </div>
    
                        <div class="fifth-row">
                            <div class="first-input-div">
                                <label for="">Government Status</label>
                                <input type="text" id="governmentStatusInput" class="governmentStatusInput" name="governmentStatus" placeholder=". . .">
                            </div>
    
                            <div id="attachDiv" class="attach-div">
                                <input type="file" id="attachFile" class="attachFile" name="attachFile">
                                <sub id="cancelAttach">Cancel</sub>
                            </div>
                        </div>
                </div>                
            </div>
            <div class="modal-footer">
                <button type="button" id="closeChildrenModal" class="closeChildrenModal" data-dismiss="modal" aria-lable="Close">
                    Cancel
                </button>
                <button type="button" id="submitChilrenModal" class="submitChilrenModal">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/workexperience-add.js') }}"></script>
@endsection