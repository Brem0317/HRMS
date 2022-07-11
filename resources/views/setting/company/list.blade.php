@extends('layouts.app')


@section('content')
<div class="section-company-profile">
    <div class="row">
        
        <div class="col-md-6">
            <x-breadcrumbs breadCrumbs="SETTING / COMPANY PROFILE"/>
        </div>

    </div>
    <div class="card">
        <div class="card-header">
            Company Profile
        </div>

        {{-- @if($company == null) --}}
        <form action="/company-profile" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                @csrf
                <div class="companyNameDiv">
                    <label for="companyName">Company Name</label>
                    <input type="text" id="companyInputId" class="companyInputClass form-control" name="companyName" placeholder="Holy Child Central Colleges, Inc." required>
                </div>
    
                <div class="timezoneDiv">
                    <label for="timezone">Time Zone</label>
                    <select id="timezoneDropDownId" class="timezoneDropDownClass form-control" name="timezone" required>
                        <option value="">. . .</option>
                        {{-- @foreach($timeZones as $timeZone)
                            <option value="{{ $timeZone['value'] }}">{{ $timeZone['name'] }}</option>
                        @endforeach --}}
                    </select>
                </div>
    
                <div class="companyAttachDiv">
                    <div class="col-md-6">
                        <label for="companyLogoInput">Company Logo</label>
                        <input type="file" id="companyLogoInputId" class="companyLogoInputClass" name="companyLogoInput" required>
                        <small class="company-logo-small">Company Logo <i class="fas fa-times"></i></small>
                    </div>
    
                    <div class="col-md-6">
                        <label for="companyFavIconInput">Company Fav Icon</label>
                        <input type="file" id="companyFavIconInputId" class="companyFavIconInputClass" name="companyFavIconInput"required>
                        <small class="company-fav-icon-small">Company Fav Icon <i class="fas fa-times"></i></small>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn">
                    Save
                </button>
            </div>
        </form>
        {{-- @else --}}
        {{-- <form action="/company-profile/{{$company->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="card-body">
                <div class="companyNameDiv">
                    <label for="companyName">Company Name</label>
                    <input type="text" id="companyInputId" class="companyInputClass form-control" name="companyName" placeholder="Holy Child Central Colleges, Inc." value="{{$company->cl_company_profile}}" required >
                </div>
    
                <div class="timezoneDiv">
                    <label for="timezone">Time Zone</label>
                    <select id="timezoneDropDownId" class="timezoneDropDownClass form-control" name="timezone" required>
                        <option value="">. . .</option>
                            @foreach($timeZones as $timeZone)
                                @if($company->cl_time_zone == $timeZone['value'])
                                    <option value="{{ $company->cl_time_zone }}" selected>{{ $timeZone['name'] }}</option>
                                @else
                                    <option value="{{ $timeZone['value'] }}">{{ $timeZone['name'] }}</option>
                                @endif
                            @endforeach
                    </select>
                </div>
    
                <div class="companyAttachDiv">
                    <div class="col-md-6">
                        <label for="companyLogoInput">Company Logo</label>
                        @if(isset($company->cl_company_logo))
                            <input type="file" id="companyLogoInputId" class="companyLogoInputClass" name="companyLogoInput">
                            <small class="company-logo-small">Company Logo <i class="fas fa-check"></i></small>
                        @else
                            <input type="file" id="companyLogoInputId" class="companyLogoInputClass" name="companyLogoInput" required >
                            <small class="company-logo-small">Company Logo <i class="fas fa-times"></i></small>
                        @endif
                    </div>
    
                    <div class="col-md-6">
                        <label for="companyFavIconInput">Company Fav Icon</label>
                        @if(isset($company->cl_company_fav_icon))
                            <input type="file" id="companyFavIconInputId" class="companyFavIconInputClass" name="companyFavIconInput">
                            <small class="company-fav-icon-small">Company Fav Icon <i class="fas fa-check"></i></small>
                        @else
                            <input type="file" id="companyFavIconInputId" class="companyFavIconInputClass" name="companyFavIconInput" required>
                            <small class="company-fav-icon-small">Company Fav Icon <i class="fas fa-times"></i></small>
                        @endif
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn">
                    Update
                </button>
            </div>
        </form>
        @endif --}}
    </div>
</div>

<script src="{{asset('js/company.js')}}"></script>
@endsection