<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Discover a one-stop solution for all your event needs at Bilbol Kitchen. We specialize in providing top-notch equipment rentals for cooking and events, ensuring you have the tools you need to make your celebration a success. From elegant decorations that set the ambiance to professional catering services that delight the palate, our team excels in creating memorable experiences. Entrust us with your event management, and watch as we turn your vision into reality. With our culinary expertise, we also offer event cooking services, crafting delectable dishes that leave a lasting impression on your guests. Elevate your events with Bilbol Kitchen – where every detail matters, and every moment is unforgettable.">
    <meta name="author" content="Bolaji Teslim Olabode">
    <meta name="keywords"
        content="event equipment rental, decorations, catering services, event management, event planning, event cooking, culinary services, party supplies, celebration essentials, catering equipment, event coordination, professional catering, event logistics, party planning, event services, celebration management">
    <link rel="apple-touch-icon-precomposed" sizes="57x57"
        href="{{ URL::to('assets/images/favicon/apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ URL::to('assets/images/favicon/apple-touch-icon-114x114.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{ URL::to('assets/images/favicon/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ URL::to('assets/images/favicon/apple-touch-icon-144x144.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60"
        href="{{ URL::to('assets/images/favicon/apple-touch-icon-60x60.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120"
        href="{{ URL::to('assets/images/favicon/apple-touch-icon-120x120.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76"
        href="{{ URL::to('assets/images/favicon/apple-touch-icon-76x76.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152"
        href="{{ URL::to('assets/images/favicon/apple-touch-icon-152x152.png') }}" />
    <link rel="icon" type="image/png') }}" href="{{ URL::to('assets/images/favicon/favicon-196x196.png') }}"
        sizes="196x196" />
    <link rel="icon" type="image/png') }}" href="{{ URL::to('assets/images/favicon/favicon-96x96.png') }}"
        sizes="96x96" />
    <link rel="icon" type="image/png') }}" href="{{ URL::to('assets/images/favicon/favicon-32x32.png') }}"
        sizes="32x32" />
    <link rel="icon" type="image/png') }}" href="{{ URL::to('assets/images/favicon/favicon-16x16.png') }}"
        sizes="16x16" />
    <link rel="icon" type="image/png') }}" href="{{ URL::to('assets/images/favicon/favicon-128.png') }}"
        sizes="128x128" />
    <meta name="application-name" content="Bilbol Kitchen" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="{{ URL::to('assets/images/favicon/mstile-144x144.png') }}" />
    <meta name="msapplication-square70x70logo" content="{{ URL::to('assets/images/favicon/mstile-70x70.png') }}" />
    <meta name="msapplication-square150x150logo" content="{{ URL::to('assets/images/favicon/mstile-150x150.png') }}" />
    <meta name="msapplication-wide310x150logo" content="{{ URL::to('assets/images/favicon/mstile-310x150.png') }}" />
    <meta name="msapplication-square310x310logo" content="{{ URL::to('assets/images/favicon/mstile-310x310.png') }}" />

    <title>@yield('title') Bilbol Kitchen</title>

    <!-- Custom fonts for this template-->
    <link href="{{ URL::to('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ URL::to('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    {{-- message toastr --}}
    <link rel="stylesheet" href="{{ URL::to('assets/css/toastr.min.css') }}">
    {{-- message toastr --}}
    <link href="{{ URL::to('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <script src="{{ URL::to('assets/js/toastr_jquery.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/toastr.min.js') }}"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Users -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('add_fund') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Fund Wallet</span></a>
            </li>
            <!-- Nav Item - category -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('buy_airtime') }}">
                    <i class="fas fa-fw fa-tags"></i>
                    <span>Buy Airtime</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('transaction') }}">
                    <i class="fas fa-fw fa-tags"></i>
                    <span>Transactions</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ URL::to('assets/images/admin/' . Auth::user()->image) }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                {{-- message --}}
                {{-- {!! Toastr::message() !!} --}}
                <!-- Begin Page Content -->
                @yield('content')

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Bilbol {{ date('Y') }}</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}" data-toggle="modal"
                        data-target="#logoutModal"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5> --}}
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="@yield('delete')" method="POST">
                        {{-- <form action="{{ route('inventory.delete') }}" method="POST"> --}}
                        @csrf
                        <div class="delete-wrap text-center">
                            <div class="del-icon">
                                <i class="feather-x-circle"></i>
                            </div>
                            <input type="hidden" name="id" class="e_id" value="">
                            <h2>Sure you want to delete</h2>
                        </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Yes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ URL::to('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::to('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ URL::to('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ URL::to('assets/js/sb-admin-2.min.js') }}"></script>
    <script>
        $(document).on('click', '.delete_modal', function() {
            var _this = $(this).parents('tr');
            $('.e_id').val(_this.find('.id').text());

        });
    </script>
    @yield('script')
</body>

</html>
