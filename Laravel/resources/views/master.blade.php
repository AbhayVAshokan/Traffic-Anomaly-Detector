<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/libs/css/style.css">
    <link rel="stylesheet" href="/css/fontawesome-all.css">
    <link rel="stylesheet" href="css/chartist.css">
    <link rel="stylesheet" href="css/morris.css">
    <link rel="stylesheet" href="/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/c3.css">
    <link rel="stylesheet" href="css/flag-icon.min.css">


    @yield('link')

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-gradient-gray-dark fixed-top">
        <a class="navbar-brand" href="#">QResponse</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top">
                <li class="nav-item">
                    <div id="custom-search" class="top-search-bar">
                        <input class="form-control" type="text" placeholder="Search..">
                    </div>
                </li>
                <li class="nav-item dropdown notification">
                    <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span
                                class="indicator"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                        <li>
                            <div class="notification-title"> Notification</div>
                            <div class="notification-list">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="notification-info">
                                            <div class="notification-list-user-img"><img
                                                        src="siren.jpg" alt=""
                                                        class="user-avatar-md rounded-circle"></div>
                                            <div class="notification-list-user-block"><span
                                                        class="notification-list-user-name">Accident</span>at Kalamassery
                                                <div class="notification-date">30 secs ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="list-footer"><a href="#">View all notifications</a></div>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown nav-user">
                    <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"><img src="user.png" alt=""
                                                                       class="user-avatar-md rounded-circle"></a>
                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                         aria-labelledby="navbarDropdownMenuLink2">
                        <div class="nav-user-info">
                            <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                            <span class="status"></span><span class="ml-2">Available</span>
                        </div>
                        <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Sidebar Container -->


    <div class="nav-left-sidebar sidebar-dark-light">
        <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-blue bg-gradient-blue">
                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                            <img src="/emergency.png" alt="QResponse" width="150" height="133" class="elevation-5">
                        </li>
                        <li class="nav-divider">
                            Menu
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active" href="#"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span
                                        class="badge badge-success">3</span></a>
                            <div id="submenu-1" class="collapse submenu" style="">

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                               data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Analytics
                            </a>

                            <div id="submenu-3" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://www.datawrapper.de/_/JoIy7/">Accident Analytics</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://www.datawrapper.de/_/bpYmZ/">Casualty Analytics</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
@yield('content')

<!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- jQuery -->
<script type="text/javascript" src="{{ url('js/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script type="text/javascript" src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
<!-- FastClick -->
<script type="text/javascript" src="{{ url('js/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script type="text/javascript" src="{{ url('js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script type="text/javascript" src="{{ url('js/demo.js') }}"></script>

@yield('footer')
</body>

</html>