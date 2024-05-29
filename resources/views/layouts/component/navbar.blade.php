<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

        @auth <!-- Check if the user is authenticated -->

            <li class="nav-item">
                @foreach(Auth::user()->roles as $role)
                    <span class="nav-link">You are a {{ $role->name }}</span>
                @endforeach
            </li>
        @endauth

    </ul>

    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    @auth <!-- Check if the user is authenticated -->
            <li class="nav-item">
                <span class="nav-link">{{ Auth::user()->name }}</span>
            </li>
            <li class="nav-item">
                <span class="nav-link">{{ Auth::user()->email }}</span>
            </li>
        @endauth
        <!-- Add your logout link here -->
        <li class="nav-item">
            <a class="nav-link btn btn-primary btn-block" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
        <!-- End of logout link -->


        
    </ul>
</nav>
