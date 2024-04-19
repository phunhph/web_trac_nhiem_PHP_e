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

    <!-- Custom styles for this template-->

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link href="assets/style/sb-admin-2.min.css" rel="stylesheet" />

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
                                <a class="nav-link active" aria-current="index.php"
                                    href="index.php?controller=home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?controller=bangDiem">Bảng điểm</a>
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
            <div id="carouselExampleIndicators" class="carousel  slide mt-3">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://caodang.fpt.edu.vn/wp-content/uploads/Banner1-1.png" class="d-block w-i-100"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://caodang.fpt.edu.vn/wp-content/uploads/Banner-web-Chuyen-truong-Chuyen-hoc-phi-11.jpg"
                            class="d-block w-i-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-jOpy-CeNPrr2rEn1GMbPhqL5JgTnPsZE35SyqJQWpg&s"
                            class="d-block w-i-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </header>

        <div class="card shadow mt-3 min-vh-20">
            <div class="row pl-4 pe-4 pb-4">
                <div class="d-sm-flex align-items-center justify-content-between mt-4">
                    <h1 class="h3 mb-0 text-gray-500 fw-bolder">Danh sách kỳ thi</h1>
                </div>
                <?php foreach ($kythis as $key => $value) : ?>
                <div class="mb-6 col-lg-4 col-md-6 col-sm-6 mt-3">
                    <div class="card shadow mb-0">
                        <div class="card-body">
                            <h5 class="card-title"><?= $value->getTenkythi() ?></h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">1 Bài thi</h6>
                            <p class="card-text">Thời gian bắt đầu: <?= $value->getTgbatdua() ?></p>
                            <p class="card-text">Thời gian kết thúc: <?= $value->getTgketthuc() ?></p>

                            <?php if (strtotime($value->getTgketthuc()) - time() >= 0) : ?>
                            <div class="progress" role="progressbar" aria-label="Info striped example"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-striped bg-info"
                                    style="width:  <?= ((time() - strtotime($value->getTgbatdua())) / (strtotime($value->getTgketthuc()) - strtotime($value->getTgbatdua()))) * 100 ?>%">
                                </div>
                            </div>
                            <p class="d-inline-flex gap-1 mt-3">
                                <button class="btn btn-outline-warning">Vào kỳ thi</button>
                            </p>
                            <?php else : ?>
                            <div class="progress" role="progressbar" aria-label="Info striped example"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-striped bg-info" style="width: 100%">
                                </div>
                            </div>
                            <p class="d-inline-flex gap-1 mt-3">
                                <button class="btn btn-outline-dark" disabled
                                    style="background-color: #f8f9fa; color: #6c757d;">Vào kỳ thi</button>
                            </p>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
            <!-- <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center mt-3">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav> -->
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

<!-- Custom scripts for all pages-->
<script src="assets/js/sb-admin-2.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>