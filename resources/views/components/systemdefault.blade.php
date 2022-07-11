<nav class="navbar navbar-expand-md navbar-light shadow-sm">
    <div class="container">      
        <a href="/">
            <img src="{{asset('images/systemdefault.png')}}" alt="Classify Inc." />
        </a> 
        <div class="collapse navbar-collapse" id="navbarSupportedContent">                          
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link guestLoginBtn" 
                    {{-- href="{{ route('login') }}" --}}
                    >
                        <i class="fas fa-sign-in-alt"></i>
                        {{-- {{ __('Login') }} --}}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>