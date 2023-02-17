<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
                aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="#">@lang('header.home')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('auth.login') }}">@lang('auth.signin')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('auth.register') }}">@lang('auth.signup')</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Jumbotron -->
    <div class="p-5 text-center bg-light">
        <h1 class="mb-3">@lang('header.title')</h1>
        <h4 class="mb-3">@lang('header.description')</h4>
    </div>
    <!-- Jumbotron -->
</header>