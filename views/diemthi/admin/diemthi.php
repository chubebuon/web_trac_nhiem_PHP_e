<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title for="">Thi trắc nhiêm trực tuyến</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="assets/style/sb-admin-2.min.css" rel="stylesheet" />
</head>
<!-- <style>
.tabt1,
.tabt1 td,
.tabt1 th {
    border: 1px solid rgba(187, 187, 187, 1);
}

.tabt1 {
    border-collapse: collapse;
    width: 98%;
    font-size: 14px;
    display: block;
    margin: auto;
}

.tabt1 tr:hover {
    cursor: default;
    background: rgba(0, 102, 153, 0.1);
}

.tabt1 th {
    height: 22px;
    background: #4267b2;
    color: white;
}

.tabt1 tr:nth-child(even) {
    background-color: white;
}

.tabt1 tr:nth-child(odd) {
    background-color: #f1f1f1;
}

.tabt1 td,
.tabt1 th {
    padding: 0.2em 0.3em;
}

.download {
    background: rgba(204, 204, 204, 0.5);
    font-size: 18px;
    text-decoration: none;
    text-align: center;
    width: 10%;
    margin-left: 0.56em;
}

.download a {
    text-decoration: none;
    color: rgba(204, 51, 51, 1);
}

.download:hover {
    cursor: pointer;
}
</style> -->

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php?controller=homeAdmin">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-user-cog"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>
            <!-- Trang chủ -->
            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=homeAdmin">
                    <i class="fas fa-home"></i>
                    <span>Trang chủ</span></a>
            </li>
            <!-- Quản lý môn thi -->
            <!-- Divider -->
            <hr class="sidebar-divider" />
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=quanlymonthi">
                    <i class="fas fa-book"></i>
                    <span>Quản Lý môn thi</span></a>
            </li>
            <!-- Quản lý thí sinh -->
            <!-- Divider -->
            <hr class="sidebar-divider" />
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=quanlythisinh">
                    <i class="fas fa-user"></i>
                    <span>Quản lý thí sinh</span></a>
            </li>
            <!-- Soạn đề thi -->
            <!-- Divider -->
            <hr class="sidebar-divider" />
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=soandethi">
                    <i class="fas fa-edit"></i>
                    <span>Soạn đề thi</span></a>
            </li>
            <!-- Phân quyền thí sinh -->
            <!-- Divider -->
            <hr class="sidebar-divider" />
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=phanquyenthi">
                    <i class="fas fa-lock"></i>
                    <span>Phân quyền thi</span></a>
            </li>

            <!-- Cấu trúc đề -->
            <!-- Divider -->
            <hr class="sidebar-divider" />
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=soancautrucde">
                    <i class="fas fa-sitemap"></i>
                    <span>Soạn cấu trúc đề</span></a>
            </li>
            <!-- Điểm thi -->
            <!-- Divider -->
            <hr class="sidebar-divider" />
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php?controller=diemthi">
                    <i class="fas fa-graduation-cap"></i>
                    <span>Điểm thi</span></a>
            </li>
            <!-- Chi tiết bài thi -->
            <!-- Divider -->
            <hr class="sidebar-divider" />
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=chitietbaithi">
                    <i class="fas fa-file"></i>
                    <span>Chi tiết bài thi</span></a>
            </li>
            <!-- Tình trạng thi -->
            <!-- Divider -->
            <hr class="sidebar-divider" />
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=tinhtrangthi">
                    <i class="fas fa-chart-line"></i>
                    <span>Tình trạng thi</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
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

                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->

                        <!-- Nav Item - Alerts -->

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 lead">
                                    <?php print_r($_SESSION['admin']['maadmin']) ?>
                                </span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Điểm thi</h1>
                    </div>

                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <p class="h5 ml-0 text-gray-500">CHỌN KỲ THI</p>
                            <select class="form-control" name="kythi" id="kythi">
                                <option value="...">...</option>
                                <?php foreach ($kythi as $key => $value) : ?>
                                    <option value="<?= $value->getMaKyThi() ?>">
                                        <?= $value->getTenKyThi() ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="card-body">
                            <p class="h5 ml-0 text-gray-500">Chọn phòng</p>
                            <form method='post' class="" id='loaddshvphong' style='margin-top:1em;'>
                                <select class="form-control" id='phong' name='phong'>
                                    <option value='....'>...</option>";
                                </select>
                            </form>
                        </div>
                        <div class="card-body ">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <p class="h5 ml-0 text-gray-500">Danh sách điểm thi
                                        phòng:&nbsp;<span class="h5 ml-0 text-danger" id="spanPhong"></span></p>

                                </div>

                                <div class="download">
                                    <samp><button id="dldiem" class="btn  btn-outline-warning">Tải danh
                                            sách</button></samp>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="danhsachdiem" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>SBD</th>
                                            <th>Tên đệm</th>
                                            <th>Tên</th>
                                            <th>Nơi sinh</th>
                                            <th>Ngày sinh</th>
                                            <th>Môn thi</th>
                                            <th>Số câu đúng</th>
                                            <th>Điểm</th>
                                            <th>Bắt đầu</th>
                                            <th>Kết thúc</th>
                                        </tr>
                                    </thead>
                                    <tbody id="renderkqthi">

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span> Hệ thống trắc nhiệm &copy; trực tuyến </span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Select "Logout" below if you are ready to end your current session.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">
                        Cancel
                    </button>
                    <a class="btn btn-warning" href="index.php?controller=logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
    <script src="assets/js/diemthi.js"></script>
</body>

</html>