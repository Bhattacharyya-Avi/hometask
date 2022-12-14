<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    {{-- <link rel="icon" type="image/png" href="{{url('backend/images/login.jpg')}}"> --}}
    <title>
        Login
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{url('backend/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{url('backend/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{url('backend/css/ui-dashboard.min.css')}}" rel="stylesheet" />
    <!-- Anti-flicker snippet (recommended)  -->
    <style>
        .async-hide {
            opacity: 0 !important
        }
    </style>
</head>

<body class="">
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav
                    class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid pe-0">
                        
                        <div class="collapse navbar-collapse" id="navigation">
                            <ul class="navbar-nav mx-auto ms-xl-auto me-xl-7">
                                {{-- <li class="nav-item">
									<a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="../pages/dashboard.html">
										<i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
										Dashboard
									</a>
									</li> --}}
                                {{-- <li class="nav-item">
									<a class="nav-link me-2" href="../pages/profile.html">
										<i class="fa fa-user opacity-6 text-dark me-1"></i>
										Profile
									</a>
									</li> --}}
                                <li class="nav-item">
                                    <a class="nav-link me-2" href="{{route('registration')}}">
                                        <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                                        Open an account.
                                    </a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link me-2" href="../pages/sign-in.html">
                                        <i class="fas fa-key opacity-6 text-dark me-1"></i>
                                        Sign In
                                    </a>
                                </li> --}}
                            </ul>
                            {{-- <li class="nav-item d-flex align-items-center">
									<a class="btn btn-round btn-sm mb-0 btn-outline-primary me-2" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard">Online Builder</a>
								</li>
								<ul class="navbar-nav d-lg-block d-none">
									<li class="nav-item">
									<a href="https://www.creative-tim.com/product/soft-ui-dashboard" class="btn btn-sm btn-round mb-0 me-1 bg-gradient-dark">Free download</a>
									</li>
								</ul> --}}
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                                    <p class="mb-0">Enter email and password to sign in</p>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('do.login')}}" method="POST">
                                        @csrf
                                        <label>Email</label>
                                        <div class="mb-3">
                                            <input name="email" type="email" class="form-control" placeholder="Email"
                                                aria-label="Email" aria-describedby="email-addon">
                                                @error('record')
                                                    <span style="color: red">{{$message}}</span>
                                                @enderror
                                        </div>
                                        <label>Password</label>
                                        <div class="mb-3">
                                            <input name="password" type="password" class="form-control"
                                                placeholder="Password" aria-label="Password"
                                                aria-describedby="password-addon">
                                        </div>
                                        
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign
                                                in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                    style="background-image:url('{{url('backend/images/login.jpg')}}')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--   Core JS Files   -->
    <script src="{{url('/backend/js/popper.min.js')}}"></script>
    <script src="{{url('backend/js/bootstrap.min.js')}}"></script>
    <script src="{{url('backend/js/perfect-scrollbar.min.js')}}"></script>
    <script src="{{url('backend/js/smooth-scrollbar.min.js')}}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }

    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.4"></script>
</body>

</html>
