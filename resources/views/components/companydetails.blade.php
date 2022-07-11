{{-- @php 
    $companyProfiles = DB::table('tbl_company_profiles')->select('tbl_company_profiles.*')->get();
@endphp  --}}

{{-- @if($companyProfiles->count() > 0) --}}
    {{-- @foreach ($companyProfiles as $companyProfile)  --}}
        <div class="landing">       
            {{-- <img src="{{asset ($companyProfile->cl_company_logo)}}" alt="Client Logo" /> --}}
            <p>
                {{-- {{ $companyProfile->cl_company_profile }} --}}
            </p>
        </div>
    {{-- @endforeach --}}
    {{-- @else --}}
    <div class="landing">
        <a href="https://classify.com.ph/" target="_blank">
            <img src="{{asset ('images/classify_logo.png')}}" alt="Classify Incorporated" />
        </a>
        <p>Classify Incorporated</p>
    </div>
{{-- @endif --}}