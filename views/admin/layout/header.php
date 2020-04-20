<!DOCTYPE html>
<html lang="en">
      <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="public/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="public/css/admin.css">
        <script src="public/ckeditor/ckeditor.js"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Shop NQC</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
           <div id="layoutSidenav_nav">
               
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a
                            >
                            <div class="sb-sidenav-menu-heading">Managerment</div>
                            
                        <!-- List-menu-managament -->
                            <!-- One-managament -->
                             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon">
                                   <i class="fas fa-cart-plus"></i>
                                </div> Đơn hàng
                                <div class="sb-sidenav-collapse-arrow">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a href="?controller=admin&action=don-hang-moi" class="nav-link">Đơn hàng mới</a>
                                    <a href="?controller=admin&action=dang-gui" class="nav-link">Đang gửi</a>
                                    <a href="?controller=admin&action=da-nhan" class="nav-link">Đã gửi</a>
                                </nav>
                            </div>
                            <!-- End-One-managament -->
                              <!-- One-managament -->
                             <a class="nav-link collapsed" href="?controller=admin&action=show-product">
                                <div class="sb-nav-link-icon">
                                   <i class="fas fa-tshirt"></i>
                                </div> Mặt hàng
                                <div class="sb-sidenav-collapse-arrow">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                           <!--  <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                              <nav class="sb-sidenav-menu-nested nav">
                                  <a class="nav-link" href="?controller=admin&action=show-product">Danh sách</a>
                                  <a class="nav-link" href="monhoc/them">Thêm</a>
                              
                              </nav>
                           </div> -->
                            <!-- End-One-managament -->
                               <!-- One-managament -->
                             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts5" aria-expanded="false" aria-controls="collapseLayouts5">
                                <div class="sb-nav-link-icon">
                                   <i class="fas fa-baby-carriage"></i>
                                </div> Danh mục
                                <div class="sb-sidenav-collapse-arrow">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="collapseLayouts5" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="diem/danhsach">Danh sách</a>
                                    <a class="nav-link" href="diem/them">Thêm</a>
                               
                                </nav>
                            </div>
                            <!-- End-One-managament -->
                              <!-- One-managament -->
                             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts3">
                                <div class="sb-nav-link-icon">
                                   <i class="fas fa-file-signature"></i>
                                </div> Phản hồi
                                <div class="sb-sidenav-collapse-arrow">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="lop/danhsach">Danh sách</a>
                               
                                </nav>
                            </div>
                            <!-- End-One-managament -->
                                    
                             <!-- One-managament -->
                             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts6" aria-expanded="false" aria-controls="collapseLayouts3">
                                <div class="sb-nav-link-icon">
                                   <i class="fas fa-users-cog"></i>
                                </div> Tài khoản
                                <div class="sb-sidenav-collapse-arrow">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="collapseLayouts6" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="lop/danhsach">Danh sách</a>
                                     <a class="nav-link" href="lop/danhsach">Thêm</a>
                                </nav>
                            </div>
                            <!-- End-One-managament -->
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                       <?=isset($_SESSION['user'])?$_SESSION['user']['username']:'Admin'?>
                    </div>
                </nav>
        
           </div>
            <div id="layoutSidenav_content">
                <main id="contents">             
