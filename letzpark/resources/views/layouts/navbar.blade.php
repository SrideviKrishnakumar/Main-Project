<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" id="mainNavBar">
    <div class="container-fluid">
        <img src="{{asset("images/brand.png")}}" alt="LetzPark brand" id="isologotype">
        <img src="{{asset("images/icon.png")}}" alt="LetzPark icon" id="isologo">
        <img src="{{asset("images/logo.png")}}" alt="LetzPark logotype" id="logotype">
        <!--Hamburger menu option-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--Drop down container-->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav ">
                <!--Parking list-->
                <li class="nav-item">
                    <a class="nav-link text-primary" href="{{route('parking.list')}}">Parking List</a>
                </li>
                <!--About us-->
                <li class="nav-item">
                    <a class="nav-link text-primary" href="{{route('about')}}">About Us</a>
                </li>
                <!--Only for guests-->
                @if (!Auth::check())
                <!--Log in-->
                <li class="nav-item">
                    <a class="nav-link text-primary" href="{{route('login')}}">Login</a>
                </li>
                <!--Register-->
                <li class="nav-item">
                    <a class="nav-link text-primary rounded-pill" href="{{route('register')}}" id="register">Register</a>
                </li>
                @endif
                <!--only registered-->
                @if (Auth::check())
                <!--spot me-->
                <li class="nav-item">
                    <a class="nav-link active text-primary" aria-current="page" href="#">SpotMe</a>
                </li>
                <!--destination-->
                <li class="nav-item">
                    <a class="nav-link text-primary" href="{{route('destination')}}">Destination</a>
                </li>
                <!--rentals-->
                <li class="nav-item">
                    <a class="nav-link text-primary" href="{{route('rentals')}}">Rentals</a>
                </li>
                <!--Account-->
                <li class="nav-item">
                    <a class="nav-link text-primary" href="{{route('account')}}">Account</a>
                </li>
                @endif
                <!--Only admins-->
                @if (Auth::check()&&Auth::user()->admin==1)
                <li class="nav-item dropdown">
                    <!--admin options-->
                    <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-cog"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <!--Bug reports-->
                        <li><a class="dropdown-item text-primary" href="{{route('bugs')}}">Bug Reports</a></li>
                        <!--Users-->
                        <li><a class="dropdown-item text-primary" href="{{route('users')}}">Users</a></li>
                    </ul>
                </li>
                @endif
                @if (Auth::check())
                <li class="nav-item" id="logoutbtn">
                    <form class="text-primary" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <strong ><x-dropdown-link class="text-primary" :href="route('logout')" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Logout') }}</strong>
                        </x-dropdown-link>
                    </form>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
