<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.quixlab.com/elaenia-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Oct 2021 08:57:50 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elaenia </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="admin/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="admin/vendor/waves/waves.min.css">
    <link rel="stylesheet" href="admin/vendor/toastr/toastr.min.css">
    <link rel="stylesheet" href="admin/vendor/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/css/style.css">
</head>

<body>

    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">

        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <nav class="navbar navbar-expand-lg navbar-light px-0 justify-content-between">
                            <a class="navbar-brand" href="index.html"><img src="admin/images/new.png" style="width: 223px; height: 69px;" alt="">
                            
                            <div class="dashboard_log my-2">
                                <div class="d-flex align-items-center">
                                    <div class="account_money">
                                        <ul>
                                            <li class="crypto">
                                                <span>0.0025</span>
                                                <i class="cc BTC-alt"></i>
                                            </li>
                                            <li class="usd">
                                                <span>19.93 USD</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="profile_log dropdown">
                                        <div class="user" data-toggle="dropdown">
                                            <span class="thumb"><i class="la la-user"></i></span>
                                            <span class="name">Maria Pascle</span>
                                            <span class="arrow"><i class="la la-angle-down"></i></span>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="accounts.html" class="dropdown-item">
                                                <i class="la la-user"></i> Account
                                            </a>
                                            <a href="history.html" class="dropdown-item">
                                                <i class="la la-book"></i> History
                                            </a>
                                            <a href="settings.html" class="dropdown-item">
                                                <i class="la la-cog"></i> Setting
                                            </a>
                                            <a href="lock.html" class="dropdown-item">
                                                <i class="la la-lock"></i> Lock
                                            </a>
                                            <a href="signin.html" class="dropdown-item logout">
                                                <i class="la la-sign-out"></i> Logout
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar">
            <div class="menu">
                <ul>
                    <li>
                        <a href="/superdash" data-toggle="tooltip" data-placement="right" title="Home">
                            <span><i class="la la-igloo"></i></span>
                        </a>
                    </li>
                    <li><a href="/transaction" data-toggle="tooltip" data-placement="right" title="Recent Transaction">
                            <span><i class="la la-exchange-alt"></i></span>
                        </a>
                    </li>
                    <li><a href="/settings" data-toggle="tooltip" data-placement="right" title="Setting">
                            <span><i class="la la-tools"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="page_title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page_title-content">
                            <p>Welcome Back,
                                <span> Maria Pascle</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-md-4">
                        <div class="card settings_menu">
                            <div class="card-header">
                                <h4 class="card-title">Settings</h4>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li class="nav-item">
                                        <a href="/settings" class="nav-link active">
                                            <i class="la la-user"></i>
                                            <span>Edit Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/pref" class="nav-link">
                                            <i class="la la-cog"></i>
                                            <span>Preferences</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/linked" class="nav-link">
                                            <i class="la la-university"></i>
                                            <span>Linked Account</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    
                        @yield('content')
                    


                </div>
            </div>
        </div>


        <div class="footer">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="copy_right">
                            Copyright ©
                            <script>
                                var CurrentYear = new Date().getFullYear()
                                document.write(CurrentYear)
                            </script> Quixlab. All Rights Reserved.
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 text-lg-right text-center">
                        <div class="social">
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--removeIf(production)-->
        <!--**********************************
            Right sidebar start
        ***********************************-->
        <div class="sidebar-right">
            <a class="sidebar-right-trigger" href="javascript:void(0)">
                <span><i class="fa fa-cog fa-spin"></i></span>
            </a>
            <div class="sidebar-right-inner">
                <div class="admin-settings">
                    <div class="opt-background">
                        <p>Font Family</p>
                        <select class="form-control" name="theme_font" id="theme_font">
                            <option value="nunito">Nunito</option>
                            <option value="opensans">Open Sans</option>

                        </select>
                    </div>
                    <div>
                        <p>Primary Color</p>
                        <div class="opt-nav-header-color">
                            <span>
                                <input type="radio" name="navigation_header" value="color_1"
                                    class="filled-in chk-col-primary" id="nav_header_color_1" />
                                <label for="nav_header_color_1"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_2"
                                    class="filled-in chk-col-primary" id="nav_header_color_2" />
                                <label for="nav_header_color_2"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_3"
                                    class="filled-in chk-col-primary" id="nav_header_color_3" />
                                <label for="nav_header_color_3"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_4"
                                    class="filled-in chk-col-primary" id="nav_header_color_4" />
                                <label for="nav_header_color_4"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_5"
                                    class="filled-in chk-col-primary" id="nav_header_color_5" />
                                <label for="nav_header_color_5"></label>
                            </span>
                        </div>
                    </div>
                    <div class="opt-header-color">
                        <p>Background Color</p>
                        <div>
                            <span>
                                <input type="radio" name="header_bg" value="color_1" class="filled-in chk-col-primary"
                                    id="header_color_1">
                                <label for="header_color_1"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_2" class="filled-in chk-col-primary"
                                    id="header_color_2">
                                <label for="header_color_2"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_3" class="filled-in chk-col-primary"
                                    id="header_color_3">
                                <label for="header_color_3"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_4" class="filled-in chk-col-primary"
                                    id="header_color_4">
                                <label for="header_color_4"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_5" class="filled-in chk-col-primary"
                                    id="header_color_5">
                                <label for="header_color_5"></label>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Right sidebar end
        ***********************************-->
        <!--endRemoveIf(production)-->
    </div>



    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="admin/vendor/waves/waves.min.js"></script>

    <script src="admin/vendor/toastr/toastr.min.js"></script>
    <script src="admin/vendor/toastr/toastr-init.js"></script>

    <script src="admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="admin/vendor/circle-progress/circle-progress-init.js"></script>


    <!--  flot-chart js -->
    <script src="admin/vendor/apexchart/apexcharts.min.js"></script>
    <script src="admin/vendor/apexchart/apexchart-init.js"></script>

    <script src="admin/js/dashboard.js"></script>


    <script src="admin/js/scripts.js"></script>
    <script src="admin/js/settings.js"></script>
    <script src="admin/js/quixnav-init.js"></script>
    <script src="admin/js/styleSwitcher.js"></script>
</body>


<!-- Mirrored from demo.quixlab.com/elaenia-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Oct 2021 08:58:04 GMT -->
</html>