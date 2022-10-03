<?php
    include 'koneksi.php';
?>

<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Kasir Koperasi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- plugin css -->
        <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

        <!-- swiper css -->
        <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

        <!-- Font Awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    </head>

    <body data-topbar="dark" data-sidebar="dark" data-layout-mode="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                   <!-- LOGO -->
                   <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.svg" alt="" height="26">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-sm.svg" alt="" height="26"> <span class="logo-txt">Vuesy</span>
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.svg" alt="" height="26">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-sm.svg" alt="" height="26"> <span class="logo-txt">Vuesy</span>
                        </span>
                    </a>

                </div>

                    <button type="button" class="btn btn-sm px-3 header-item vertical-menu-btn noti-icon">
                        <i class="fa fa-fw fa-bars font-size-16"></i>
                    </button>

                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="bx bx-search icon-sm"></span>
                        </div>
                    </form>

         
                </div>

                <div class="d-flex">
                    <div class="dropdown d-inline-block d-block d-lg-none">
                        <button type="button" class="btn header-item noti-icon"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-search icon-sm"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                            <form class="p-2">
                                <div class="search-box">
                                    <div class="position-relative">
                                        <input type="text" class="form-control rounded bg-light border-0" placeholder="Search...">
                                        <i class="bx bx-search search-icon"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                   <div class="dropdown d-inline-block language-switch">
                        <button type="button" class="btn header-item noti-icon"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img id="header-lang-img" src="assets/images/flags/us.jpg" alt="Header Language" height="16">
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="eng">
                                <img src="assets/images/flags/us.jpg" alt="user-image" class="me-2" height="12"> <span class="align-middle">English</span>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                                <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-2" height="12"> <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                                <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-2" height="12"> <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                                <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-2" height="12"> <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                                <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-2" height="12"> <span class="align-middle">Russian</span>
                            </a>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-bell icon-sm"></i>
                            <span class="noti-dot bg-danger rounded-pill">3</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="m-0 font-size-15"> Notifications </h5>
                                    </div>
                                    <div class="col-auto">
                                        <a href="javascript:void(0);" class="small"> Mark all as read</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 250px;">
                                <h6 class="dropdown-header bg-light">New</h6>
                                <a href="" class="text-reset notification-item">
                                    <div class="d-flex border-bottom align-items-start">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/users/avatar-3.jpg"
                                            class="me-3 rounded-circle avatar-sm" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Justin Verduzco</h6>
                                            <div class="text-muted">
                                                <p class="mb-1 font-size-13">Your task changed an issue from "In Progress" to <span class="badge badge-soft-success">Review</span></p>
                                                <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="text-reset notification-item">
                                    <div class="d-flex border-bottom align-items-start">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-sm me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="uil-shopping-basket"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">New order has been placed</h6>
                                            <div class="text-muted">
                                                <p class="mb-1 font-size-13">Open the order confirmation or shipment confirmation.</p>
                                                <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 5 hours ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <h6 class="dropdown-header bg-light">Earlier</h6>
                                <a href="" class="text-reset notification-item">
                                    <div class="d-flex border-bottom align-items-start">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-sm me-3">
                                                <span class="avatar-title bg-soft-success text-success rounded-circle font-size-16">
                                                    <i class="uil-truck"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Your item is shipped</h6>
                                            <div class="text-muted">
                                                <p class="mb-1 font-size-13">Here is somthing that you might light like to know.</p>
                                                <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 1 day ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="" class="text-reset notification-item">
                                    <div class="d-flex border-bottom align-items-start">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/users/avatar-4.jpg"
                                                class="me-3 rounded-circle avatar-sm" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Salena Layfield</h6>
                                            <div class="text-muted">
                                                <p class="mb-1 font-size-13">Yay ! Everything worked!</p>
                                                <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 3 days ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top d-grid">
                                <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                    <i class="uil-arrow-circle-right me-1"></i> <span>View More..</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle" id="right-bar-toggle">
                            <i class="bx bx-cog icon-sm"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-3.jpg"
                            alt="Header Avatar">
                            <span class="ms-2 d-none d-xl-inline-block user-item-desc">
                                <span class="user-name">Marie N. <i class="mdi mdi-chevron-down"></i></span>
                            </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <h6 class="dropdown-header">Welcome Marie N!</h6>
                            <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                            <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                            <a class="dropdown-item" href="apps-kanban-board.html"><i class="mdi mdi-calendar-check-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
                            <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-wallet text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$6951.02</b></span></a>
                            <a class="dropdown-item d-flex align-items-center" href="contacts-settings.html"><i class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Settings</span><span class="badge badge-soft-success ms-auto">New</span></a>
                            <a class="dropdown-item" href="auth-lockscreen-cover.html"><i class="mdi mdi-lock text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                            <a class="dropdown-item" href="auth-signout-cover.html"><i class="mdi mdi-logout text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Logout</span></a>
                        </div>
                    </div>
                </div>
            </div>
  
        </header>
    
    <div class="vertical-menu">


        <!-- LOGO -->
        <div class="navbar-brand-box">
           <a href="index.html" class="logo logo-dark">
               <span class="logo-sm">
                   <img src="assets/images/logo-sm.svg" alt="" height="26">
               </span>
               <span class="logo-lg">
                   <img src="assets/images/logo-sm.svg" alt="" height="26"> <span class="logo-txt">Vuesy</span>
               </span>
           </a>

           <a href="index.html" class="logo logo-light">
               <span class="logo-sm">
                   <img src="assets/images/logo-sm.svg" alt="" height="26">
               </span>
               <span class="logo-lg">
                   <img src="assets/images/logo-sm.svg" alt="" height="26"> <span class="logo-txt">Vuesy</span>
               </span>
           </a>
       </div>

       <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
           <i class="fa fa-fw fa-bars"></i>
       </button>

       <div data-simplebar class="sidebar-menu-scroll">

           <!--- Sidemenu -->
           <div id="sidebar-menu">
               <!-- Left Menu Start -->
               <ul class="metismenu list-unstyled" id="side-menu">
                   <li class="menu-title" data-key="t-menu">Menu</li>

                   <<li class="mm-active">
                        <a href="index.php">
                            <i class="bx bx-home-circle nav-icon"></i>
                            <span class="menu-item" data-key="t-dashboard">Dashboard</span>
                        </a>
                    </li>

                   <li class="menu-title" data-key="t-applications">General</li>

                   <li>
                       <a href="transaksi.php">
                           <i class="fa-solid fa-money-bill-transfer nav-icon"></i>
                           <span class="menu-item" data-key="t-calendar">Transaksi</span>
                       </a>
                   </li>

                   <li>
                       <a href="barang.php">
                           <i class="fa-solid fa-boxes-stacked nav-icon"></i>
                           <span class="menu-item" data-key="t-chat">Barang</span>
                       </a>
                   </li>

                   <li>
                       <a href="penjualan.php">
                           <i class="fa-solid fa-box-open nav-icon"></i>
                           <span class="menu-item" data-key="t-kanban">Penjualan</span>
                       </a>
                   </li>

                   <li>
                       <a href="datauser.php">
                           <i class="fa-solid fa-users nav-icon"></i>
                           <span class="menu-item" data-key="t-filemanager">List User</span>
                       </a>
                   </li>
           </div>
           <!-- Sidebar -->
       </div>
   </div>
   <!-- Left Sidebar End -->

   <footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> &copy; Taruna Bhakti.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Created by <a href= "https://www.facebook.com/yudiya.ahrian.7" target="_blank" class="text-reset">Yudiya Ahrian</a>
                </div>
            </div>
        </div>
    </div>
    </footer>
</div>
</body>
</html>