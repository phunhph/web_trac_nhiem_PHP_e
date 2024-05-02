<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <link href="assets/style/sb-admin-2.min.css" rel="stylesheet" />
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <title>Thi Trắc Nghiệm</title>
</head>

<body>
    <div class="container-fluid w-100 mt-2">

        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="index.php" href="index.php?controller=home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php?controller=bangDiem">Bảng điểm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?controller=lichSu">Lịch sử thi</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Tài khoản
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="index.php?controller=thongTin">Thông tin</a></li>
                                    <li><a class="dropdown-item" href="index.php?controller=logout">Đăng xuất</a></li>
                                </ul>
                            </li>

                        </ul>

                    </div>
                </div>
            </nav>
        </header>
        <div class="card shadow mb-4 mt-4 min-vh-80">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Bảng điểm thí sinh
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Mã môn thi</th>
                                <th>Tên môn thi</th>
                                <th>Kỳ thi</th>
                                <th>Thời gian thi</th>
                                <th>Điểm</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Mã môn thi</th>
                                <th>Tên môn thi</th>
                                <th>Kỳ thi</th>
                                <th>Thời gian thi</th>
                                <th>Điểm</th>
                                <th>Trạng thái</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            foreach($diems as $key=>$value):
                            ?>
                            <tr>
                                <th><?= $value->mamodun ?></th>
                                <th><?= $value->tenmodun ?></th>
                                <th><?= $value->tenkythi ?></th>
                                <th><?= $value->thoigianthi ?></th>
                                <th><?= $value->diem ?></th>
                                <th>Trạng thái</th>
                            </tr>
                            <?php
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span> Hệ thống trắc nhiệm &copy; trực tuyến </span>
                </div>
            </div>
        </footer>
    </div>
</body>
<!-- Bootstrap core JavaScript-->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugins -->
<script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="assets/js/demo/datatables-demo.js"></script>
<!-- Custom scripts for all pages-->
<script src="assets/js/sb-admin-2.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>