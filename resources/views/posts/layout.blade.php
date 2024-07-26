<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online NoteBook</title>
    
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    
    <link rel="stylesheet" href="assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/perfect-scrollbar.css') }}">
    
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">

</head>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <img src="assets/images/logo.svg" alt="" srcset="">
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            
                
                <li class='sidebar-title'>Main Menu</li>
                
            
                
                <li class="sidebar-item active ">

                    <a href="{{route('posts.index')}}" class='sidebar-link'>
                        <i data-feather="home" width="20"></i> 
                        <span>Dashboard</span>
                    </a>

                    
                </li>
                
            
                
                <li class="sidebar-item">

                    <a href="#" class='sidebar-link'>
                        <i data-feather="user" width="20"></i> 
                        <span>Profile</span>
                    </a>

                    
                </li>
                
            
                
                <li class="sidebar-item ">

                    <a href="#" class='sidebar-link'>
                        <i data-feather="settings" width="20"></i> 
                        <span>Settings</span>
                    </a>                    
                </li>
                
            
                
                {{-- <li class='sidebar-title'>Forms &amp; Tables</li> --}}
                
            

             
                
                <li class="sidebar-item  has-sub">

                    <a href="#" class='sidebar-link'>
                        <i data-feather="user" width="20"></i> 
                        <span>Authentication</span>
                    </a>

                    
                    <ul class="submenu ">
                        
                        <li>
                            <a href="auth-login.html">Login</a>
                        </li>
                        
                        <li>
                            <a href="auth-register.html">Register</a>
                        </li>
                        
                        <li>
                            <a href="auth-forgot-password.html">Forgot Password</a>
                        </li>
                        
                    </ul>
                    
                </li>
                
            
                
                
            
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                        <li class="dropdown nav-icon">
                            <a href="#" data-bs-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="bell"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-large">
                                <h6 class='py-2 px-4'>Notifications</h6>
                                <ul class="list-group rounded-none">
                                    <li class="list-group-item border-0 align-items-start">
                                        <div class="avatar bg-success me-3">
                                            <span class="avatar-content"><i data-feather="shopping-cart"></i></span>
                                        </div>
                                        <div>
                                            <h6 class='text-bold'>New Order</h6>
                                            <p class='text-xs'>
                                                New note made with dawilly gene
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown nav-icon me-2">
                            <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="mail"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" >
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar me-1">
                                    <img src="assets/images/avatar/avatar-s-1.png" alt="" srcset="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">Hi, Saugi</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            

            @yield('content')

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2024 &copy; dawillygene</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a href="https://dawillygene.co.tz">dawillygene</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('js/feather.min.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script>
        (() => {
    for (var e = document.querySelectorAll(".sidebar-item.has-sub"), t = function () {
            var t = e[r];
            e[r].querySelector(".sidebar-link").addEventListener("click", (function (e) {
                e.preventDefault();
                var r = t.querySelector(".submenu");
                r.classList.contains("active") ? r.classList.remove("active") : r.classList.add("active")
            }))
        }, r = 0; r < e.length; r++) t();
    var a = document.querySelectorAll(".sidebar-toggler");
    for (r = 0; r < a.length; r++) {
        a[r].addEventListener("click", (function () {
            var e = document.getElementById("sidebar");
            e.classList.contains("active") ? e.classList.remove("active") : e.classList.add("active")
        }))
    }
    if ("function" == typeof PerfectScrollbar) {
        var c = document.querySelector(".sidebar-wrapper");
        new PerfectScrollbar(c)
    }
    window.onload = function () {
        var e = window.innerWidth;
        e < 768 && (console.log("widthnya ", e), document.getElementById("sidebar").classList.remove("active"))
    }, feather.replace()
})();
    </script>
</body></html>