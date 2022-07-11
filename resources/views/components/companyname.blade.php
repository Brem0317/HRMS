{{-- @php 
    $companyProfiles = DB::table('tbl_company_profiles')->select('tbl_company_profiles.*')->get();
@endphp 

@if($companyProfiles->count() > 0)
    @foreach ($companyProfiles as $companyProfile)
        <a class="navbar-brand companyBrand" href="{{ url('/') }}">
            <img src="{{asset ($companyProfile->cl_company_logo)}}" alt="Client Logo" />
            {{ $companyProfile->cl_company_profile }}
        </a>
    @endforeach
@else
    <a class="navbar-brand companyBrand" href="https://classify.com.ph/" target="_blank">
        <img src="{{asset ('images/classify_logo.png')}}" alt="Classify Incorporated" />
        Classify Incorporated
    </a>
@endif --}}