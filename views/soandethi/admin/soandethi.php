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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <link rel="stylesheet" href="assets/style/taodethi.css">
    <!-- Custom styles for this template-->
    <link href="assets/style/sb-admin-2.min.css" rel="stylesheet" />
</head>

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
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=quanlythisinh">
                    <i class="fas fa-user"></i>
                    <span>Quản lý thí sinh</span></a>
            </li>
            <!-- Soạn đề thi -->
            <!-- Divider -->
            <hr class="sidebar-divider" />
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
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
                        <h1 class="h3 mb-0 text-gray-800">Soạn đề thi</h1>
                    </div>
                    <div class="card shadow">
                        <div class="card-body">
                            <p class="h5 ml-0 text-primary fw-bolder">Thông tin tìm kiếm</p>
                            <label class="form-label h6 fw-bolder">Danh mục kỳ thi</label>
                            <select name="kythi" id="kythi" class="form-control">
                                <option>--Chọn kỳ thi--</option>
                                <?php foreach ($kythi as $key => $value) : ?>
                                <option value="<?= $value->getMaKyThi() ?>">
                                    <?= $value->getTenKyThi() ?>
                                </option>
                                <?php endforeach; ?>
                            </select>

                            <div class=" mt-2">
                                <label class="form-label h6 fw-bolder">Danh mục môn thi</label>
                                <select id="monthi" class="form-control" name="monthi">
                                    <option value="all">--Chọn môn thi--</option>
                                </select>
                            </div>
                            <div class="mt-2">
                                <label class="form-label h6 fw-bolder">Bộ đề</label>

                                <select id="pthi" class="form-control" name="pthi">
                                    <option value="all">--Chọn phần thi--</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow mt-3">
                        <div class="card-body">

                            <div class="d-flex justify-content-between mb-2">
                                <p class="h5 ml-0 text-primary fw-bolder">Kết quả tìm kiếm</p>
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
                                            <h5 class="modal-title" id="exampleModalLabel">Câu hỏi</h5>
                                            <button type="button" onclick="reload()" class="btn-close"
                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form name="update" id="update" class="w-100 text-black g-3" method="POST"
                                                enctype="multipart/form-data">
                                                <div class="row ">
                                                    <div class="mb-12 col-lg-3 col-md-3 col-sm-3 col-xs-12 ">
                                                        <label class="form-label h5 fw-bolder">Mã câu hỏi</label>
                                                        <input type="text" name="macauhoi" id="macauhoi"
                                                            class="form-control text-dark border-dark-subtle" value="">
                                                    </div>
                                                    <div class="mb-12 col-lg-7 col-md-7 col-sm-7 col-xs-12 ">
                                                        <label class="form-label h5 fw-bolder">Tên câu hỏi</label>
                                                        <input type="text" name="tencauhoi" id="tencauhoi"
                                                            class="form-control text-dark border-dark-subtle" value="">
                                                    </div>
                                                    <div class="mb-12 col-lg-2 col-md-2 col-sm-2 col-xs-12 ">
                                                        <label class="form-label h7 fw-bolder">Mức độ</label>
                                                        <select type="text" class="form-control" name="tl" id="tl">
                                                            <option value="Dễ">Dễ</option>
                                                            <option value="Trung bình">Trung bình</option>
                                                            <option value="Khó">Khó</option>
                                                        </select>

                                                    </div>
                                                    <div class="mb-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                        <div class="custom-file w-100 mt-2">
                                                            <input type="file" name="file1" id="file1"
                                                                title="Chọn file ảnh, audio, hoặc video"
                                                                class="custom-file-input">
                                                            <label class="custom-file-label" for="file1">Thêm hình ảnh,
                                                                âm thanh hoặc video <i
                                                                    class="fas fa-upload ml-1"></i></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">

                                                    <div class="mb-12 col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                                        <label class="form-label h5 fw-bolder">Phương án đúng</label>
                                                        <input type="text" name="padung" id="padung"
                                                            class="form-control text-dark border-dark-subtle" value="">
                                                        <div class="custom-file w-100 mt-2">
                                                            <input type="file" name="file2" id="file2"
                                                                title="Chọn file ảnh, audio, hoặc video">
                                                            <label class="custom-file-label" for="file2">Thêm hình ảnh,
                                                                âm thanh hoặc video <i
                                                                    class="fas fa-upload ml-1"></i></label>
                                                        </div>
                                                    </div>
                                                    <div class="mb-12 col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                                        <label class="form-label h5 fw-bolder">Phương án sai 1</label>
                                                        <input type="text" name="pasai1" id="pasai1"
                                                            class="form-control text-dark border-dark-subtle" value="">
                                                        <div class="custom-file w-100 mt-2">
                                                            <input type="file" name="file3" id="file3"
                                                                title="Chọn file ảnh, audio, hoặc video">
                                                            <label class="custom-file-label" for="file3">Thêm hình ảnh,
                                                                âm thanh hoặc video <i
                                                                    class="fas fa-upload ml-1"></i></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">

                                                    <div class="mb-12 col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                                        <label class="form-label h5 fw-bolder">Phương án sai 2</label>
                                                        <input type="text" name="pasai2" id="pasai2"
                                                            class="form-control text-dark border-dark-subtle" value="">
                                                        <div class="custom-file w-100 mt-2">
                                                            <input type="file" name="file4" id="file4"
                                                                title="Chọn file ảnh, audio, hoặc video">
                                                            <label class="custom-file-label" for="file4">Thêm hình ảnh,
                                                                âm thanh hoặc video <i
                                                                    class="fas fa-upload ml-1"></i></label>
                                                        </div>
                                                    </div>
                                                    <div class="mb-12 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <label class="form-label h5 fw-bolder">Phương án sai 3</label>
                                                        <input type="text" name="pasai3" id="pasai3"
                                                            class="form-control text-dark border-dark-subtle" value="">
                                                        <div class="custom-file w-100 mt-2">
                                                            <input type="file" name="file5" id="file5"
                                                                title="Chọn file ảnh, audio, hoặc video">
                                                            <label class="custom-file-label" for="file5">Thêm hình ảnh,
                                                                âm thanh hoặc video <i
                                                                    class="fas fa-upload ml-1"></i></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- <div class="add">
                                                <img id="add" src="assets/image/add.png" width="30" height="30"
                                                    title="Thêm câu hỏi mới"
                                                    style="margin-left:4em;margin-top:1em; cursor:pointer;">
                                                <img id="edit" src="assets/image/edit.ico" width="30" height="30"
                                                    title="Sửa câu hỏi"
                                                    style="margin-left:1em;margin-top:1em; cursor:pointer;">
                                                <img id="delete" src="assets/image/delete.png" width="30" height="30"
                                                    title="Xóa câu hỏi"
                                                    style="margin-left:1em;margin-top:1em; cursor:pointer;">
                                                <img id="refresh" src="assets/image/refresh-icon.png" width="30"
                                                    height="30" title="Refresh"
                                                    style="margin-left:1em;margin-top:1em; cursor:pointer;">
                                            </div> -->
                                        </div>
                                        <div class="modal-footer" id='control_thisinh'>
                                            <button type="button" onclick="reload()" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" id="add" class="btn btn-success"
                                                data-bs-dismiss="modal">Add</button>
                                            <button type="button" id="edit" class="btn btn-warning"
                                                data-bs-dismiss="modal">Update</button>
                                            <button type="button" id="delete" class="btn btn-danger"
                                                data-bs-dismiss="modal">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive" id="loadndch">
                                <form method="post" action="" name='f'>
                                    <table class="table table-bordered" id="">
                                        <thead>
                                            <tr>
                                                <th style='width:7%;'>Mã câu hỏi</th>
                                                <th style='width:20%;'>Tên câu hỏi</th>
                                                <th style='width:15%;'>Phương án đúng</th>
                                                <th style='width:15%;'>Phương án sai 1</th>
                                                <th style='width:15%;'>Phương án sai 2</th>
                                                <th style='width:15%;'>Phương án sai 3</th>
                                                <th style='width:5%;'>Mức độ</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th style='width:7%;'>Mã câu hỏi</th>
                                                <th style='width:20%;'>Tên câu hỏi</th>
                                                <th style='width:15%;'>Phương án đúng</th>
                                                <th style='width:15%;'>Phương án sai 1</th>
                                                <th style='width:15%;'>Phương án sai 2</th>
                                                <th style='width:15%;'>Phương án sai 3</th>
                                                <th style='width:5%;'>Mức độ</th>
                                            </tr>
                                        </tfoot>
                                        <tbody class="thb" id="cauhoilist">

                                            <td valign="top" style="text-align: center;" colspan="8"
                                                class="dataTables_empty">
                                                No data available in table</td>
                                        </tbody>
                                    </table>
                                </form>
                            </div>


                        </div>
                    </div>
                    <div class="card shadow mt-3">
                        <div class="card-body">
                            <label for="uploads" class="form-label h5 fw-bolder">
                                Thêm câu hỏi bằng file excel
                            </label>
                            <form id="upcauhoi" class="row d-flex justify-content-center" method="post"
                                enctype="multipart/form-data" style="margin-top:-2.6em;">
                                <div class="custom-file w-25">
                                    <input type="file" id="uploacauhoi" name="upch" title="Click chọn file excel">
                                    <label class="custom-file-label" for="uploacauhoi">
                                        Tải file excel <i class="fas fa-upload ml-1"></i>
                                    </label>
                                </div>
                                <button type="submit" class="ml-3 btn btn-warning" id="Submit">Tải lên</button>
                            </form>
                            <script>
                            document.getElementById("upcauhoi").addEventListener("submit", function(e) {
                                e.preventDefault();

                                var fileInput = document.getElementById("uploacauhoi");
                                var file = fileInput.files[0];

                                var modun = document.getElementById("pthi").value;

                                if (file && modun !== "all") {
                                    var formData = new FormData();
                                    formData.append("upf", file);
                                    formData.append("modun", modun);

                                    var xhr = new XMLHttpRequest();
                                    xhr.open("POST", "index.php?controller=createthisinhByexcel",
                                        true);

                                    xhr.onload = function() {
                                        if (xhr.status >= 200 && xhr.status < 300) {
                                            var responseData = xhr.responseText;
                                            var data = JSON.parse(responseData);
                                            // Kiểm tra xem có lỗi không
                                            if (data.error) {
                                                alert("Lỗi từ máy chủ: " + data.error);
                                            } else {
                                                // Thực hiện các hành động khác dựa trên dữ liệu nhận được
                                                renderExcel(data.success, data.phong);
                                            }
                                        } else {
                                            console.error("Có lỗi xảy ra khi gửi yêu cầu.");
                                        }
                                    };

                                    xhr.onerror = function() {
                                        console.error(
                                            "Đã xảy ra lỗi trong quá trình gửi yêu cầu.");
                                    };

                                    xhr.send(formData);
                                } else {
                                    if (file) {
                                        alert("Vui lòng nhập bộ đề.");
                                    } else if (modun !== "all") {
                                        alert("Vui lòng chọn file.");
                                    } else {
                                        alert("Vui lòng chọn file và nhập bộ đề.");
                                    }
                                }
                            });
                            </script>

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
    <script src="assets/js/taodethi.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>