<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Scripts -->
        <script src="{{secure_asset('js/app.js')}}" defer></script>
        <!-- Styles -->
        <link href="{{secure_asset('css/app.css')}}" rel="stylesheet">
        <link href="{{secure_asset('css/customstyles.css')}}" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="{{secure_asset('images/favicon.ico')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
        <title>Jobber | Find Software Jobs & Projects</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <script src="//unpkg.com/alpinejs" defer></script>
    </head>
    <body>
        <nav class="navbar bg-light navbar-light navbar-expand-md">
            <div class="container">
                <a href="/" class="navbar-brand"><img src="images/logo.png" alt="" class="logo" width="250" height="auto"/></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto" style="font-size:1.3em;font-family:'rubik';">
                        @auth
                        <li class="nav-item p-3">
                            <span class="nav-link fw-bold">Welcome {{auth()->user()->name}}</span>
                        </li>
                        <li class="nav-item p-3">
                            <a href="/listings/manage" class="nav-link fw-bold"
                                >
                                Manage Listings</a
                            >
                         </li>
                         <li class="nav-item p-3">
                            <a href="/listings/create" class="nav-link fw-bold"
                                >
                                Post a Job</a
                            >
                         </li>
                         <li class="nav-item p-3">
                            <form action="/logout" class="d-inline" method="POST">
                                @csrf
                                <button type="submit" class="btn custombtn">
                                    Logout
                                </button>
                            </form>
                         </li>
                         
                         @else
                        <li class="nav-item p-3">
                            <a href="/signup" class="nav-link fw-bold"
                                >Sign Up</a
                            >
                        </li>
                        <li class="nav-item p-3">
                            <a href="/login" class="nav-link fw-bold"
                                >
                                Login</a
                            >
                         </li>
                         <li class="nav-item p-3">
                            <a href="/listings/create" class="nav-link fw-bold"
                                >
                                Post a Job</a
                            >
                         </li>
                         @endauth
                    </ul>
                </div>
            </div>
        </nav>
    <main>
        {{$slot}}
    </main>
    <footer style="background-color: #7bb062;">
        <div class="container text-center text-light p-5">
            <p class="">Copyright &copy; 2022, All Rights reserved</p>
            <p class="">Made by NelsonIsioma: nelsonisioma1@gmail.com</p>
        </div>
    </footer>

    <x-flash-message />
</body>
</html>