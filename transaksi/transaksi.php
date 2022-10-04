<?php
    include '../koneksi.php';
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
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- plugin css -->
        <link href="../assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

        <!-- swiper css -->
        <link rel="stylesheet" href="../assets/libs/swiper/swiper-bundle.min.css">

        <!-- Bootstrap Css -->
        <link href="../assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="../assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

        <link rel="stylesheet" type="text/css" href="../style.css?<?php echo time(); ?>" />

        <!-- Nunito Sans -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">

    </head>

    <body data-topbar="info" data-sidebar="light" data-layout-mode="light">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar" class="text-white" style="background-color: #375b69">
            <div class="navbar-header">
                <div class="d-flex">
                   <!-- LOGO -->
                   <div class="navbar-brand-box">
                    <a href="../index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="../assets/images/logo-sm.svg" alt="" height="26">
                        </span>
                        <span class="logo-lg">
                            <img src="../assets/images/logo-sm.svg" alt="" height="26"> <span class="logo-txt">Koperasi</span>
                        </span>
                    </a>

                    <a href="../index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="../assets/images/logo-sm.svg" alt="" height="26">
                        </span>
                        <span class="logo-lg">
                            <img src="../assets/images/logo-sm.svg" alt="" height="26"> <span class="logo-txt">Koperasi</span>
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

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="../assets/images/users/avatar-3.jpg"
                            alt="Header Avatar">
                            <span class="ms-2 d-none d-xl-inline-block user-item-desc">
                                <span class="user-name text-white">Rizky Adytia <i class="mdi mdi-chevron-down"></i></span>
                            </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <h6 class="dropdown-header">Welcome Rizky Adytia!</h6>
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
           <a href="../index.html" class="logo logo-dark">
               <span class="logo-sm">
                   <img src="../assets/images/logo-sm.svg" alt="" height="26">
               </span>
               <span class="logo-lg">
                   <img src="../assets/images/logo-sm.svg" alt="" height="26"> <span class="logo-txt">Vuesy</span>
               </span>
           </a>

           <a href="../index.html" class="logo logo-light">
               <span class="logo-sm">
                   <img src="../assets/images/logo-sm.svg" alt="" height="26">
               </span>
               <span class="logo-lg">
                   <img src="../assets/images/logo-sm.svg" alt="" height="26"> <span class="logo-txt">TB</span>
               </span>
           </a>
       </div>

       <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
           <i class="fa fa-fw fa-bars"></i>
       </button>

       <div data-simplebar class="sidebar-menu-scroll ">

           <!--- Sidemenu -->
           <div id="sidebar-menu">
               <!-- Left Menu Start -->
               <ul class="metismenu list-unstyled" id="side-menu">
                   <li class="menu-title" data-key="t-menu">Menu</li>

                   <li>
                        <a href="../index.php">
                            <i class="bx bx-home-circle nav-icon"></i>
                            <span class="menu-item" data-key="t-dashboard">Dashboard</span>
                        </a>
                    </li>

                   <li class="menu-title" data-key="t-applications">General</li>

                   <li class="mm-active text-info">
                       <a href="../transaksi.php">
                           <i class="fa-solid fa-money-bill-transfer nav-icon"></i>
                           <span class="menu-item" data-key="t-calendar">Transaksi</span>
                       </a>
                   </li>

                   <li>
                       <a href="../barang.html">
                           <i class="fa-solid fa-boxes-stacked nav-icon"></i>
                           <span class="menu-item" data-key="t-chat">Barang</span>
                       </a>
                   </li>

                   <li>
                       <a href="../datauser.php">
                           <i class="fa-solid fa-users nav-icon"></i>
                           <span class="menu-item" data-key="t-filemanager">List User</span>
                       </a>
                   </li>
           </div>
           <!-- Sidebar -->
       </div>
   </div>
   <!-- Left Sidebar End -->

   <div class="main-content">
                <div class="container" style="overflow: auto;">
                <a class="btn btn-info ml-0 mt-5 mb-2 create-btn " href="createform.html">Create</a>
                <table class="table table_saya">
                    <thead>
                      <tr class="shadow p-3 mb-5 text-center ">
                        <th scope="col">ID Transaksi</th>
                        <th scope="col">ID Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah Beli</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                <?php
                    $sql = "SELECT * FROM transaksi";
                    $query = mysqli_query($connect,$sql);
                    while($transaksi = mysqli_fetch_array($query)){
                        echo "<tr class='text-center '>";
                        echo "<td>".$transaksi['id_transaksi']."</td>";
                        echo "<td>".$transaksi['id_barang']."</td>";
                        echo "<td>".$transaksi['nama_barang']."</td>";
                        echo "<td>".$transaksi['harga']."</td>";
                        echo "<td>".$transaksi['jml_beli']."</td>";
                        echo "<td>".$transaksi['total']."</td>";

                        echo "<td style='width:20%'>";
                        echo "<a class='btn btn-outline-info action-btn' href=formedit.php?id_transaksi=".$transaksi['id_transaksi'].">Edit</a> | ";
                        echo "<a class='btn btn-outline-danger action-btn' href=delete.php?id_transaksi=".$transaksi['id_transaksi'].">Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                  </table>
                  </div>
                
                <!-- End Page-content -->

            <!-- end main content-->

            <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                </div>
            </div>
            </div>

        </div>

        <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>

    <!-- swiper js -->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>
    
    <script src="assets/js/pages/dashboard.init.js"></script>

    <script src="assets/js/app.js"></script>

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