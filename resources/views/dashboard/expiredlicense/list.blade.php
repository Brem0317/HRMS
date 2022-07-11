@extends('layouts.app')
@section('content')
<section>
    <div class="section-expiredlicenses-list">
        <div class="row">
            <div class="col-md-6">
                <x-breadcrumbs breadCrumbs="Dashboard / Expired Professional Licenses"/>
            </div> 
        </div><!-- row -->
        <div class="row">
            <div class="card expiredlicenses">
                <div class="card-header">Expired Professional Licenses</div>
                <div class="card-body">
                    <div class="row">
                        <div class="inputSearch">
                            <input type="text" class="form-control search-input"  data-table="expiredlicensesList" placeholder="Search...">                    
                        </div>                    
                        <div class="fixHeight">
                            {{-- @if($expiredprofessionallicenses->count() > 0) --}}
                            <table class="expiredlicensesList">
                                <thead>
                                    <tr>
                                        <th>Employee Number</th>
                                        <th>Full Name</th>
                                        <th>License Type</th>
                                        <th>License Number</th>
                                        <th>License Validity</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>12312</td>    
                                    <td>adadas</td>  
                                    <td>ZXzxczx</td>  
                                    <td>fsdsd</td>  
                                    <td>fsdsd</td>  
                                    <td><i class="fas fa-pen"></i></td>  
                                    {{-- @foreach($expiredprofessionallicenses as $expiredprofessionallicense)
                                    <tr>
                                        @foreach($employees as $employee)
                                            @if($expiredprofessionallicense->employee_id == $employee->id)
                                                <td>{{$employee->cl_id_number}}</td>
                                                <td>{{$employee->cl_first_name}} {{$employee->cl_middle_name[0]}}. {{$employee->cl_last_name}}</td>
                                                <td>N/A</td>
                                                <td>{{$expiredprofessionallicense->cl_license_number}}</td> 
                                                <td>{{ \Carbon\Carbon::parse($expiredprofessionallicense->cl_licencse_validity)->format('F j, Y') }}</td> 
                                                <td class="red">Expired</td>
                                            @endif
                                        @endforeach
                                    </tr>
                                    @endforeach                            --}}
                                </tbody>                 
                            </table><!-- expiredlicensesList -->                         
                            {{-- @else
                                <p class="noRecords">No Expired Professional License Records Found.</p>                      
                            @endif --}}
                        </div><!-- fix height -->
                    </div><!-- row -->
                </div>
            </div><!-- expiredlicenses -->
        </div><!-- row -->
    </div><!-- section-expiredlicenses-list -->
</section>
<script src="{{asset('js/search.js')}}"></script>
@endsection