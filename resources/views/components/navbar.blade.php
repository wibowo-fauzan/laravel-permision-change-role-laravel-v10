<link href="{{ asset('css/header.css') }}" rel="stylesheet">
<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none" href="#">
                <h1 class="d-flex text-warning">DocWibi <h1>Online</h1>
                </h1> <!-- Gunakan <h1> untuk SEO -->
            </a>
            <nav class="mx-auto">
                <div class="input-group input-group-lg">
                    <form class="">
                        <input type="search" class="form-control form-control-dark input-lg rounded-pill"
                            placeholder="Search..." aria-label="Search">
                    </form>
                </div>
            </nav>
            <div class="d-flex justify-content-center align-items-center">
                @auth
                    @if (auth()->user()->role_id === 1)
                        {{-- 1 untuk admin --}}
                        <span class="text-light m-1 btn-lg">Welcome, Admin {{ auth()->user()->name }}!</span>
                    @else
                        {{-- Selain admin --}}
                        <span class="text-light m-1 btn-lg">Welcome, {{ auth()->user()->name }}!</span>
                    @endif

                    <div class="custom-dropdown">
                        <img class="custom-dropdown-button rounded-circle" width="70" height="auto"
                            src="https://cdn.pixabay.com/photo/2021/07/02/04/48/user-6380868_1280.png">
                        <div class="custom-dropdown-menu">
                            <!-- Link ke halaman Profil -->
                            <a class="custom-dropdown-item" href="/profile">Profil</a>
                            <hr class="custom-dropdown-divider">
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="custom-dropdown-item" style="color: red;">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="/login" type="button" class="btn btn-outline-light m-1 btn-lg">Login</a>
                    <a href="/register" type="button" class="btn btn-warning m-1 btn-lg">Register</a>
                @endauth
            </div>
        </div>
    </div>
</header>
