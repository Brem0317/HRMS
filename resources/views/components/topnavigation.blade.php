<nav class="navbar navbar-expand-md navbar-light shadow-sm">
    <div class="container">          
        <x-companyname />
        <!-- Authentication Links -->  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">                          
            <ul class="navbar-nav ml-auto"> 
                @guest
                    <li class="nav-item">
                        <a class="nav-link guestLoginBtn" >
                            <i class="fas fa-sign-in-alt"></i>
                            {{-- {{ __('Login') }} --}}
                        </a>
                    </li>                                
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <span class="userName">
                                {{-- {{ Auth::user()->name }} --}}
                            </span>
                            <span class="userAvatar"><img src="{{asset('images/profilepic.png')}}" alt=""></span>
                        </a>
                        {{-- @dd(Auth::user()) --}}
                        <div class="dropdown-menu dropdown-menu-right userDropdown" aria-labelledby="navbarDropdown">
                            <span class="userAvatar">
                                {{-- <img src="{{asset('images/profilepic.png')}}" alt=""> --}}
                            </span>
                            <span class="userName">
                                {{-- {{ Auth::user()->name }} --}}
                            </span>
                            <span class="userEmail">
                                {{-- {{ Auth::user()->email }} --}}
                            </span>
                            {{-- <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a> --}}
                            <form id="logout-form"  method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>        
    </div>
</nav>