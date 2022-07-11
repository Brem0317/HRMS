@extends('layouts.app')

@section('content')
<div class="section-civil-service-add">
    <div class="row">
        <div class="col-md-6 breadCrumb">
            <x-breadcrumbs breadCrumbs="Employee / Benefits"/>
        </div>
    </div> 
    <div class="card">
        <div class="card-header">
            <x-cardnav employeeId='{{$employeeID}}'/>
        </div>
        
        <div class="card-body">
            <form action="/employee-benefits" method="POST">
                @csrf
                <input type="number" value="{{$employeeID}}" name="employeeID" hidden>

                <div class="col-md-12">
                    <div class="row">
                        <!-- For GSIS -->
                        <div class="form-group">
                            <label for="employeeGSIS">GSIS Number</label>
                            <input type="text"  class="form-control" name="employeeGsis" @if(isset($employeeBenefit->cl_gsis)) value="{{$employeeBenefit->cl_gsis}}"  @else placeholder="0000-0000-000" @endif>
                        </div>

                        <!-- For PAG-IBIG -->
                        <div class="form-group">
                            <label for="employeePagibig">Pag-Ibig Number</label>
                            <input type="text"  class="form-control" name="employeePagibig" @if(isset($employeeBenefit->cl_pag_ibig)) value="{{$employeeBenefit->cl_pag_ibig}}"  @else placeholder="0000-0000-000" @endif>
                        </div>

                        <!-- For PHIC -->
                        <div class="form-group">
                            <label for="employeePhic">PHIC</label>
                            <input type="text"  class="form-control" name="employeePhic" @if(isset($employeeBenefit->cl_phic)) value="{{$employeeBenefit->cl_phic}}" @else placeholder="00-00000000-00" @endif>
                        </div>

                        <!-- SSS Number -->
                        <div class="form-group">
                            <label for="employeSss">SSS Number</label>
                            <input type="text"  class="form-control" name="employeSss" @if(isset($employeeBenefit->cl_sss_number)) value="{{$employeeBenefit->cl_sss_number}}" @else placeholder="00-0000000-0" @endif}}>
                        </div>

                        <!-- Employee TIN -->
                        <div class="form-group">
                            <label for="employeeTin">TIN</label>
                            <input type="text"  class="form-control" name="employeeTin" @if(isset($employeeBenefit->cl_tin)) value="{{$employeeBenefit->cl_tin }}" @else  placeholder="000-000-000" @endif>
                        </div>

                        <!-- HMO -->
                        <div class="form-group">
                            <label for="employeeHmo">HMO</label>
                            <input type="text"  class="form-control" name="employeeHmo" @if(isset($employeeBenefit->cl_hmo)) value="{{$employeeBenefit->cl_hmo }}" @else placeholder="0000-0000-0000" @endif>
                        </div>

                        <!-- Agency Employee Number -->
                        <div class="form-group">
                            <label for="employeeAgencyNum">Agency Employee Number</label>
                            <input type="text"  class="form-control" name="employeeAgencyNum" @if(isset($employeeBenefit->cl_agency_employee_number)) value="{{$employeeBenefit->cl_agency_employee_number }}"@else placeholder="0000-0000-0000" @endif>
                        </div>


                        



                    </div><!--Row--> 
                </div><!--div-col-md-12--> 
            </div> <!-- Card - Body --> 
            <div class="card-footer">
                <button class="btn btn-primary">Next</button>
            </div>
        </form> <!-- Form --> 
    </div><!-- Card  -->
</div><!-- Secsection-civil-service-addtion -->

@endsection