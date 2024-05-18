<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title for="">Thi trắc nhiêm trực tuyến</title>

    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/style/sb-admin-2.min.css" rel="stylesheet" />
    <script src="assets/js/jquery-3.1.1.js"></script>

</head>
<style>
.thb {
    border: 1px solid rgba(136, 136, 136, 0.8);
    border-collapse: collapse;
    width: 99%;
    margin: auto;
    margin-top: 1em;
}

.thb td {
    padding: 0.5em 0.5em;
    text-align: left;
}

.thb tr:nth-child(even) {
    background-color: white;
}

.thb tr:nth-child(odd) {
    background-color: #f1f1f1;
}

.thb tr:hover {
    cursor: default;
    background: rgba(0, 102, 153, 0.1);
}

.thb th {
    height: 22px;
    padding: 0.1em;
    background: #4267b2;
    color: white;
    font-size: 14px;
}

#update {
    width: 90%;
    margin: auto;
    display: block;
    margin-top: 2em;
    padding-bottom: 1em;
}

.over {
    position: fixed;
    display: none;
    background: rgba(0, 0, 0, 0.8);
    width: 100%;
    height: 100%;
}

.show1 {
    width: 23%;
    height: 7em;
    position: fixed;
    display: block;
    margin: auto;
    margin-top: 8em;
    margin-left: 3em;
    background: rgba(255, 255, 255, 0.7);
}

.csbd {
    margin-top: 0.5em;
}

input {
    height: 1.5em;
    width: 80%;
    display: block;
    margin: auto;
    margin-bottom: 0;
    margin-top: 0.5em;
    padding: 0 0.5em;
}

#li1 {
    color: rgba(255, 204, 0, 1);
    font-weight: bolder;
}

span {
    margin: 0;
}
</style>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="index.php?controller=homeAdmin">
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
            <li class="nav-item active">
                <a class="nav-link" href="index.php?controller=quanlythisinh">
                    <i class="fas fa-user"></i>
                    <span>Quản lý thí sinh</span></a>
            </li>
            <!-- Soạn đề thi -->
            <!-- Divider -->
            <hr class="sidebar-divider" />
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Soạn đề thi</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Soạn đề thi:</h6>
                        <a class="collapse-item" href="index.php?controller=soandethi">Soạn đề thi</a>
                        <a class="collapse-item" href="index.php?controller=soandethil">Soạn đề thi tiếng anh</a>
                    </div>
                </div>
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
            <li class="nav-item">
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
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 lead">
                                    <?php print_r($_SESSION['admin']['maadmin']) ?>
                                </span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
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
                        <h1 class="h3 mb-0 text-gray-800">Quản lý thí sinh</h1>
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
                    </div>
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <p class="h5 text-gray-600">DANH MỤC MÔN THI</p>
                            <div class="d-flex justify-content-between mb-2">
                                <button class="btn btn-outline-warning" id="dlpassword">
                                    Tải mật khẩu các thí sinh trong phòng
                                </button>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    THÊM MỚI
                                </button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Thí sinh</h5>
                                            <button type="button" onclick="reload()" class="btn-close"
                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form name="update" class="w-100 text-black g-3" id="update" method="post">
                                                <div class="row ">
                                                    <div class="mb-12 col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                                        <label class="form-label h5 fw-bolder">Số báo danh</label>
                                                        <input type="text" name="sbd" id="sbd"
                                                            class="form-control text-dark border-dark-subtle" value="">
                                                    </div>
                                                    <div class="mb-12 col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                                        <label class="form-label h5 fw-bolder">Tên phòng thi</label>
                                                        <input type="text" name="phongthi" id="phongthi"
                                                            class="form-control text-dark border-dark-subtle" value="">
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="mb-12 col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                                        <label class="form-label h5 fw-bolder">Họ, tên đệm</label>
                                                        <input type="text" name="hodem" id="hodem"
                                                            class="form-control text-dark border-dark-subtle" value="">
                                                    </div>
                                                    <div class="mb-12 col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                                        <label class="form-label h5 fw-bolder">Tên học viên</label>
                                                        <input type="text" name="ten" id="ten"
                                                            class="form-control text-dark border-dark-subtle" value="">
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="mb-12 col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                                        <label class="form-label h5 fw-bolder">Ngày sinh</label>
                                                        <input type="text" name="ns" id="ns"
                                                            class="form-control text-dark border-dark-subtle" value="">
                                                    </div>
                                                    <div class="mb-12 col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                                        <label class="form-label h5 fw-bolder">Nơi sinh</label>
                                                        <input type="text" name="noisinh" id="noisinh"
                                                            class="form-control text-dark border-dark-subtle" value="">
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="mb-12 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <label class="form-label h5 fw-bolder">Mã đơn vị</label>
                                                        <input type="text" name="madonvi" id="madonvi"
                                                            class="form-control text-dark border-dark-subtle" value="">
                                                    </div>
                                                    <div class="mb-12 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <label class="form-label h5 fw-bolder">Tên đơn vị</label>
                                                        <input type="text" name="tendonvi" id="tendonvi"
                                                            class="form-control text-dark border-dark-subtle" value="">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row d-flex justify-content-center">

                                                    <div class="custom-file w-25">
                                                        <input type="file" class="custom-file-input" id="pictureprofile"
                                                            name="pictureprofile" accept="image/jpeg, image/png">
                                                        <label class="custom-file-label" for="pictureprofile">
                                                            Ảnh đại diện <i class="fas fa-upload"></i>
                                                        </label>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- <div class="row">
                                                <div class="mb-3 col-lg-3 col-md-3 col-sm-3">
                                                    <img id="add" src="assets/image/add.png" width="40" height="40" title="Thêm học viên mới" style="margin-top:1em; cursor:pointer;">
                                                    <img id="edit" src="assets/image/edit.ico" width="40" height="40" title="Sửa thông tin học viên" style="margin-left:1em;margin-top:1em; cursor:pointer;">
                                                    <img id="delete" src="assets/image/delete.png" width="43" height="40" title="Xóa học viên" style="margin-left:1em;margin-top:1em; cursor:pointer;">
                                                    <img id="refresh" src="assets/image/refresh-icon.png" width="43" height="40" title="Refresh" style="margin-left:1em;margin-top:1em; cursor:pointer;">
                                                </div>
                                            </div> -->

                                        </div>
                                        <div class="modal-footer" id='control_thisinh'>
                                            <button type="button" onclick="reload()" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" id="add" class="btn btn-success"
                                                data-bs-dismiss="modal">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style='width:7%;'>SBD</th>
                                            <th style='width:13%;'>Họ đệm</th>
                                            <th style='width:7%;'>Tên</th>
                                            <th style='width:11%;'>Ngày sinh</th>
                                            <th style='width:15%;'>Nơi sinh</th>
                                            <th style='width:10%;'>Mã đơn vị</th>
                                            <th style='width:27%;'>Tên đơn vị</th>
                                            <th style='width:13%;'>Tên PT</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th style='width:7%;'>SBD</th>
                                            <th style='width:13%;'>Họ đệm</th>
                                            <th style='width:7%;'>Tên</th>
                                            <th style='width:11%;'>Ngày sinh</th>
                                            <th style='width:15%;'>Nơi sinh</th>
                                            <th style='width:10%;'>Mã đơn vị</th>
                                            <th style='width:27%;'>Tên đơn vị</th>
                                            <th style='width:13%;'>Tên PT</th>
                                        </tr>
                                    </tfoot>
                                    <tbody class="thb" id="thisinh">

                                        <td valign="top" style="text-align: center;" colspan="8"
                                            class="dataTables_empty">
                                            No data available in table</td>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-3">
                        <div class="card-body">


                            <!-- <form id="upload" method="post" enctype="multipart/form-data">
                                <label class="form-label h5 fw-bolder">Thêm danh sách học viên bằng file excel</label>
                                <input type="file" id="uploads" name="upf" title="Chọn file Excel"
                                    style="background:blue;cursor:pointer;border-radius:1px;width:30%;height:1.8em;color:white;z-index:1000;opacity:0;">
                                <p
                                    style="background:rgba(100%,40%,20%,1);cursor:pointer;border-radius:1px;width:31.5%;height:1.8em;color:white;display:block;margin:auto;margin-top:-1.8em; text-align:center;">
                                    Chọn tệp</p>
                                <input type="submit" name="clickup" id="Submit" value="Tải lên" title="Nhấn để tải lên"
                                    style="margin-top:2em; border:none; background:blue;cursor:pointer; color:white; width:80%; height:1.5em;">
                            </form> -->
                            <form id="upload" method="post" enctype="multipart/form-data">

                                <label for="uploads" class="form-label h5 fw-bolder">
                                    Thêm danh sách học viên bằng file excel
                                </label>
                                <div class="row d-flex justify-content-center">
                                    <div class="custom-file w-25">
                                        <input type="file" class="custom-file-input" id="uploads" name="upf"
                                            accept=".xlsx, .xls, .csv">
                                        <label class="custom-file-label" for="pictureprofile">
                                            Tải file excel <i class="fas fa-upload ml-1"></i>
                                        </label>
                                    </div>
                                    <button type="submit" class="ml-3 btn btn-warning" id="Submit">Tải lên</button>
                                </div>

                            </form>

                            <!-- <script>
                                document.getElementById('upload').addEventListener('submit', function(e) {
                                    e.preventDefault();
                                    var fileInput = document.getElementById('uploads');
                                    var file = fileInput.files[0];

                                    if (file) {
                                        var formData = new FormData();
                                        formData.append('upf', file);

                                        var xhr = new XMLHttpRequest();
                                        xhr.open('POST', 'index.php?controller=createthisinhByexcel',
                                            true);

                                        xhr.onload = function() {
                                            if (xhr.status >= 200 && xhr.status < 300) {
                                                var responseData = xhr.responseText;
                                                var data = JSON.parse(responseData);
                                                // Kiểm tra xem có lỗi không
                                                if (data.error) {
                                                    alert('Lỗi từ máy chủ: ' + data.error);
                                                } else {
                                                    // Xử lý dữ liệu thành công
                                                    console.log('Thành công:', data.success);
                                                    // Thực hiện các hành động khác dựa trên dữ liệu nhận được
                                                }
                                            } else {
                                                console.error('Có lỗi xảy ra khi gửi yêu cầu.');
                                            }
                                        };

                                        xhr.onerror = function() {
                                            console.error(
                                                'Đã xảy ra lỗi trong quá trình gửi yêu cầu.');
                                        };

                                        xhr.send(formData);
                                    } else {
                                        alert('Không có file được chọn');
                                    }
                                });
                            </script> -->



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

    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>
    <script src="assets/js/quanlythisinh.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>