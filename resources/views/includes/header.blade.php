
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Curb360</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="{{ asset('assets/img/logo_main_new.png') }}" alt="" class="logoone">
                </div>
                <div class="sidebar-brand-text mx-3"></div>
            </a>

            <!-- Divider -->
            <br>
            <hr class="sidebar-divider my-0">
            <br>
            <!-- Nav Item - Dashboard -->
            <ul class="sidebar-menu">

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">

                        <i class='bx bxs-dashboard sidebar-text'></i>
                        <span class="sidebar-text">Dashboard</span></a>
                </li>





                <!-- Heading -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('zones') }}">
                        <i class='bx bx-globe'></i>
                        <span class="sidebar-text">Zones</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('services') }}">
                        <i class='bx bxs-brightness'></i>
                        <span class="sidebar-text">Services</span></a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('packages') }}">
                        <i class='bx bx-package'></i>
                        <span class="sidebar-text">Packages</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('coupons') }}">
                        <i class='bx bxs-coupon'></i>
                        <span class="sidebar-text">Coupons</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('addons') }}">
                        <i class='bx bx-message-square-add'></i>
                        <span class="sidebar-text">Addons</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('setting') }}">
                        <i class='bx bxs-cog'></i>
                        <span class="sidebar-text">Setting</span></a>
                </li>



                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                        <li class="nav-item">
                        <button type="submit" class="nav-link">
                            <i class='bx bx-right-arrow-circle'></i>
                            Logout
                        </button>
                    </li>
                    </form>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">
                        <i class='bx bx-right-arrow-circle'></i>
                        <span>sign up</span></a>
                </li> --}}

            </ul>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">



        </ul>
        <!-- End of Sidebar -->


        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow header">
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">


                <!-- Nav Item - Alerts -->

                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">

                        <span class="mr-2 text-dark text-capitalize">
                            admin
                        </span>
                        <img class="img-profile rounded-circle" src="{{ asset('assets/img/undraw_profile.svg') }}">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModalprofile">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>


                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->
        <div id="content-wrapper" class="d-flex flex-column">


            <!-- The Modal profile -->
            <div class="modal" id="myModalprofile">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <div>
                                <h4 class="modal-title">Profile</h4>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-12 pt-3 cls 1">


                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-12 col-lg-12 pt-3 cls 1">

                                                        <div class="upload-form">
                                                            <input name="file1" type="file" class="dropify"
                                                                data-height="100" />

                                                        </div>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-12 pt-3 cls 1">
                                                                <html>

                                                                <head>
                                                                    <title>Read From Local CSV</title>
                                                                    <script
                                                                        src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                                                                    <script type="text/javascript"
                                                                        src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
                                                                    <link rel="stylesheet" type="text/css"
                                                                        href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

                                                                </head>

                                                                <body>
                                                                    <div class="upload-form">
                                                                        <input name="file1" type="file" class="dropify"
                                                                            data-height="100" />

                                                                        <div class="upload-form">
                                                                            <input name="file1" type="file"
                                                                                class="dropify" data-height="100" />
                                                                        </div>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal">&times;</button>

                                                                    </div>

                                                                    <!-- Modal body -->
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-12 col-lg-12 pt-3 cls 1">
                                                                                <html>

                                                                                <head>
                                                                                    <title>Read From Local CSV</title>
                                                                                    <script
                                                                                        src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                                                                                    <script type="text/javascript"
                                                                                        src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
                                                                                    <link rel="stylesheet"
                                                                                        type="text/css"
                                                                                        href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

                                                                                </head>

                                                                                <body>
                                                                                    <div class="upload-form">
                                                                                        <input name="file1" type="file"
                                                                                            class="dropify"
                                                                                            data-height="100" />
                                                                                    </div>

                                                                                    <div class="row d-flex">
                                                                                        <div
                                                                                            class="col-12 col-lg-6 pt-2 profile">
                                                                                            <label for="">User</label>
                                                                                            <input type="text" name=""
                                                                                                id="">
                                                                                        </div>

                                                                                        <div
                                                                                            class="col-12 col-lg-6 pt-2 profile">
                                                                                            <label
                                                                                                for="">Username</label>
                                                                                            <input type="text" name=""
                                                                                                id="">
                                                                                        </div>

                                                                                        <div
                                                                                            class="col-12 col-lg-6 pt-2 profile">
                                                                                            <label for="">Email</label>
                                                                                            <input type="text" name=""
                                                                                                id="">
                                                                                        </div>

                                                                                        <div
                                                                                            class="col-12 col-lg-6 pt-2 profile">
                                                                                            <label
                                                                                                for="">Password</label>
                                                                                            <input type="text" name=""
                                                                                                id="">
                                                                                        </div>
                                                                                    </div>
                                                                                </body>

                                                                                </html>


                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger222"
                                                                            data-dismiss="modal">Update
                                                                            Setting</button>

                                                                    </div>
                                                            </div>

                                                            <div class="col-12 col-lg-6 pt-2 profile">
                                                                <label for="">Username</label>
                                                                <input type="text" name="" id="">
                                                            </div>

                                                            <div class="col-12 col-lg-6 pt-2 profile">
                                                                <label for="">Email</label>
                                                                <input type="text" name="" id="">
                                                            </div>

                                                            <div class="col-12 col-lg-6 pt-2 profile">
                                                                <label for="">Password</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>


                                            <div class="col-12 col-lg-6 pt-2 profile">
                                                <label for="">Username</label>
                                                <input type="text" name="" id="">
                                            </div>

                                            <div class="col-12 col-lg-6 pt-2 profile">
                                                <label for="">Email</label>
                                                <input type="text" name="" id="">
                                            </div>

                                            <div class="col-12 col-lg-6 pt-2 profile">
                                                <label for="">Password</label>
                                                <input type="text" name="" id="">
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

