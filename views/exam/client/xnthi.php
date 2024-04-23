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
    <script src="./assets/js/jquery-3.1.1.js"></script>
    <script src="./assets/js/xnthi.js"></script>
    <script>
    setInterval(timer, 1000);
    var mins = 1,
        second = 0,
        m, s;
    var a = "<?php echo $_GET['ID']; ?>";

    function timer() {
        if (second == 0) {
            mins--, second = 60;
        }
        second--;
        if (second < 10) s = '0' + second;
        else s = second;
        m = '0' + mins;
        if (second == 0 && mins == 0) window.location = 'index.php?controller=exam&ID=' + a + "&" + "fx=" +
            parseInt(new Date()
                .getTime() / 1000);
    }
    $(document).ready(function(e) {
        var a = "<?php echo $_GET['ID']; ?>";
        $("#btn").click(function(e) {
            window.location = 'index.php?controller=exam&ID=' + a + "&" + "fx=" + parseInt(
                new Date().getTime() / 1000);
        });
    });
    </script>
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
        </header>

        <div class="card shadow mt-3 min-vh-80">
            <div class="row pl-4 pe-4 pb-4">
                <div class="d-sm-flex align-items-center justify-content-between mt-4">
                    <h1 class="h3 mb-0 text-dark-500 fw-bolder">Xác nhận thi</h1>
                </div>
                <div class="d-sm-flex align-items-center justify-content-between mt-4">
                    <h1 class="h5 mb-0 text-dark fw-bolder">Kỳ thi: <?= $names->tenkythi ?> </h1>
                </div>
                <div class="d-sm-flex align-items-center justify-content-between mt-4">
                    <h1 class="h5 mb-0 text-dark  fw-bolder">Môn thi: <?= $names->tenmodun ?> </h1>
                </div>
            </div>
            <div class="row pl-4 pe-4 pb-4">
                <?php if (isset($error)) : ?>
                <div class="Aavatar">
                    <?= $error; ?>
                </div>
                <?php else : ?>
                <div class="bg-gradient-warning text-dark border border-secondary card shadow pt-2">
                    <p>
                        Số lượng câu hỏi: <?= $tongch ?>
                        <span style="color:red; font-size:17px;"></span> câu
                    </p>
                    <p>Thời gian làm bài: <?= $ttime ?> <span style="color:red; font-size:17px;"></span> phút</p>
                    <span>Lưu ý:</span><br>
                    <p>Sau 1 phút thí sinh không nhấp chuột vào nút "Bắt đầu làm bài", hệ thống sẽ tự động chuyển đến
                        bài thi.</p>
                    <p>Khi thí sinh bắt đầu làm bài thi, thời gian sẽ được tính. Thí sinh bắt buộc phải hoàn thành bài
                        thi của mình trong thời gian cho phép, quá thời gian quy định hệ thống sẽ tự động dừng bài làm
                        của bạn và trả kết quả</p>
                    <div class="d-flex justify-content-center mb-4">
                        <button class="btn btn-outline-warning" id="btn">Bắt đầu làm bài</button>
                    </div>
                </div>
                <?php endif; ?>
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

<!-- Custom scripts for all pages-->
<script src="assets/js/sb-admin-2.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>