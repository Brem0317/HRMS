@extends('layouts.app')

@section('content')


<div class="section-add-official-business">
    
    <div class="row">
        <div class="col-md-6">
            <x-breadcrumbs breadCrumbs="EMPLOYEE / OFFICIAL BUSINESS"/>
        </div>
    </div>
  
    
    
    
    <div class="card">
        <!-- EMPLOYEE LIST -->
        <div class="row">
            <div class="col-md-6 officialBusinessLeft">
                
                <div class="card-header employeeList">
                    <div class="row">
                        <div class="col-md-6 obListTitle">
                            Employee List
                        </div>
                        <div class="col-md-6 text-right">
                            <!-- class search-input is use in js and the data-table = overtime-list refers to the table class -->
                            <input type="text" class="search-input obSearchClass" placeholder="Search. . ." data-table="employee-list">
                        </div>
                    </div>
                </div>
            
                
                <div class="card-body employeeListBody">
                    <div class="tableFormFixHead">
                        <table class="table employee-list">
                            <thead>
                                <th class="w-10">Employee Number</th>
                                <th class="w-30">Name</th>
                                <th class="w-10">Action</th>
                            </thead>
                            <tbody>
                                <!-- Employee Number and Name  List-->
                                @foreach($employees as $employee)
                                    <tr>
                                        <td>{{$employee->cl_id_number}}</td>
                                        <td>{{$employee->cl_first_name}} {{$employee->cl_middle_name}} {{$employee->cl_last_name}} {{$employee->cl_name_ext}}</td>
                                        <td>
                                            <a href="/official-business/{{$employee->id}}" class="btn">
                                                <i class="fas fa-plus"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
    
                            </tbody>
                        </table>
                    </div>
                </div>
                   
               </div>


            <!-- OFFFICIAL BUSINESS FORM -->
            <div class="col-md-6 officialBusinessRight">
                <div class="card-header oBForm">
                    <div class="row">
                        <div class="col-md-6 oBFormTitle">
                            Official Business Form
                        </div>
                    </div>
                </div>

                <div class="card-body oBFormBody">

                    <form action="/official-business" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(isset($soloemployee))

                            <div class="row">
                                <div class="col-md-6">

                                    <!-- Name -->
                                    <input type="text" name="employeeID" class="form-control" value="{{$soloemployee->id}}"  hidden readonly>
                                    <div class="form-group">
                                        <label for="">Name</label>
                                            <input type="text"  class="form-control employeeName" placeholder="{{$soloemployee->cl_first_name}} {{$soloemployee->cl_middle_name}} {{$soloemployee->cl_last_name}} {{$soloemployee->cl_name_ext}}"   readonly>
                                    </div>

                                    <!-- Date Filed -->
                                    <div class="form-group">
                                            <label for="">Date Filed</label>
                                            <input type="date"  class="form-control" name="obDateFiled" required>
                                    </div>
                                    
                                    <!-- Destination -->
                                    <div class="form-group">
                                            <label for="">Destination</label>
                                            <input type="text"  class="form-control" name="obDestination" required>
                                    </div>
                                    
                                    <!-- Time Out -->
                                    <div class="form-group">
                                            <label for="">Time Out</label>
                                            <input type="time"  class="form-control" name="obTimeOut" required>
                                    </div>
                                    
                                    <!-- Number of Hours -->
                                    <div class="form-group">
                                            <label for="">Number of Hours</label>
                                            <input type="text"  class="form-control" name="obNumberofHours" required>
                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <!-- Control Number -->
                                    <div class="form-group obControlNumber">
                                        <label for="obControlNumber">Control Number</label>
                                        <input type="text"  class="form-control" name="obControlNumber" required>
                                    </div>

                                    <!-- Purpose -->
                                    <label for="">Purpose</label>
                                    <textarea name="obReason" id="" cols="15" rows="5"  class="form-control purpose" placeholder="Type here..." required></textarea>
                                    
                                    <!-- Time In -->
                                    <div class="form-group">
                                        <label for="">Time In</label>
                                        <input type="time"  class="form-control" name="obTimeIn"required>
                                    </div>
                                    
                                    <!-- Date Covered -->
                                    <div class="form-group">
                                        <label for="">Date Covered</label>
                                        <input type="date"  class="form-control" name="obDateCovered" required> 
                                    </div>

                                    <button class="btn btn-warning obSubmit" >Submit</button>

                                </div>

                        </div>

                        @else

                        <div class="row">
                            <div class="col-md-6">
                                <!-- Name -->
                                <input type="text" name="employeeID" class="form-control" value="" hidden readonly>
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text"  class="form-control employeeName" name="obNameInput" placeholder=""  readonly>
                                </div>

                                <!-- Date Filed -->
                                <div class="form-group">
                                        <label for="">Date Filed</label>
                                        <input type="date"  class="form-control" name="obDateFiled" readonly>
                                </div>
                                
                                <!-- Destination -->
                                <div class="form-group">
                                        <label for="">Destination</label>
                                        <input type="text"  class="form-control" name="obDestination" readonly>
                                </div>
                                
                                <!-- Time Out -->
                                <div class="form-group">
                                        <label for="">Time Out</label>
                                        <input type="time"  class="form-control"name="obTimeOut" readonly>
                                </div>
                                
                                <!-- Number of Hours -->
                                <div class="form-group">
                                        <label for="">Number of Hours</label>
                                        <input type="text"  class="form-control" name="obNumberofHours" readonly>
                                </div>
                                

                            </div>

                            <div class="col-md-6">
                                <!-- Control Number -->
                                <div class="form-group obControlNumber">
                                    <label for="obControlNumber">Control Number</label>
                                    <input type="text"  class="form-control" name="obControlNumber" readonly>
                                </div>

                                <!-- Purpose -->
                                <label for="">Purpose</label>
                                <textarea name="obReason" id="" cols="15" rows="5"  class="form-control purpose" readonly></textarea>
                                
                                <!-- Time In -->
                                <div class="form-group">
                                    <label for="">Time In</label>
                                    <input type="time"  class="form-control" name="obTimeIn" readonly>
                                </div>
                                
                                <!-- Date Covered -->
                                <div class="form-group">
                                    <label for="obDateCovered">Date Covered</label>
                                    <input type="date"  class="form-control" name="obDateCovered" readonly>
                                </div>

                            </div>

                        </div>

                        @endif
                    </form>
                </div>
                
            
            </div>
        </div>
    </div>
</div>


<script src="{{asset('js/officialbusinessadd.js')}}"></script>
@endsection