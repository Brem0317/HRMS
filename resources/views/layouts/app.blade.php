{{-- @php 
    $companyProfiles = DB::table('tbl_company_profiles')->select('tbl_company_profiles.*')->get();
@endphp  --}}


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HRMS') }}</title>
   
    <!-- Company Favicon -->
    <x-companyfavicon />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/d01fda4d20.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- for javascript js data hung -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>
<body>
    <div id="app" class="section-component">              
        <div class="row">  
                      
            {{-- @auth --}}
            <div class="col-md-2 sideNav">
                <x-sidenavigation />                            
            </div><!-- side navigation -->  
            {{-- @endauth --}}

            {{-- @auth --}}
            <div class="col-md-10 mainContent">  
            {{-- @else             --}}
            {{-- <div class="col mainContent">  --}}
            {{-- @endauth --}}

                {{-- @auth --}}
                <x-topnavigation />   
                {{-- @else          --}}
                {{-- <x-systemdefault />       --}}
                {{-- @endauth --}}
                
                <main class="py-4">
                    @yield('content')
                </main>
                

                {{-- @auth --}}
                <x-footer />
                {{-- @endauth --}}


            </div><!-- main content -->            
        </div><!-- row -->
    </div><!-- section component -->
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    {{-- @include('sweetalert::alert') --}}
</body>
</html>