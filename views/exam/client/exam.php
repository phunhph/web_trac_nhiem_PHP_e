<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title for="">Thi trắc nhiêm trực tuyến</title>
    <link rel="shortcut icon" href="assets/image/icon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/style/exam.css" type="text/css" />
    <script src="assets/js/jquery-3.1.1.js"></script>
    <script src="assets/js/exam.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link href="assets/style/sb-admin-2.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container-fluid">
        <div class="row">

            <div class="mb-9 col-lg-9 col-md-9 col-sm-9 col-xs-9 mt-4 mb-4">
                <form method='post' class="card shadow" name='examtest' action="index.php?controller=reportExam">
                    <?php
                    foreach ($bode as $k => $v) : ?>
                    <?php if ($v->getTemp() == null) : ?>
                    <div class='card-body'>
                        <div class='' id='ch<?= $k + 1 ?>'>
                            Câu hỏi
                            <b>
                                <?= $k + 1 ?>
                            </b>:
                            <?= $v->getCauhoi() ?>
                            <div class=''>
                                <div class="choose<?= $j ?>" onclick=" writechoose('choose<?php echo $j; ?>')"
                                    style="margin-bottom:0.6em;">
                                    <label onclick="fillBackground('s<?= $k + 1 ?>')">
                                        <input type="radio" id="tcau<?= $k + 1 ?>" name="cau<?= $k + 1 ?>"
                                            value="A">&nbsp;A. <?= $v->getPaA() ?>
                                    </label><br>
                                </div>
                                <?php $j++ ?>
                                <div class='choose<?= $j ?>' onclick=" writechoose('choose<?php echo $j; ?>')"
                                    style='margin-bottom:0.6em;'>
                                    <label onclick="fillBackground('s<?= $k + 1 ?>')">
                                        <input type='radio' id='tcau<?= $k + 1 ?>' name='cau<?= $k + 1 ?>'
                                            value='B'>&nbsp;B
                                        <?= $v->getPaB() ?>
                                    </label><br>

                                </div>
                                <div class='choose<?= $j ?>' onclick=" writechoose('choose<?php echo $j; ?>')"
                                    style='margin-bottom:0.6em;'>
                                    <label onclick="fillBackground('s<?= $k + 1 ?>')"">
                                        <input type='radio' id='tcau<?= $k + 1 ?>' name='cau<?= $k + 1 ?>' value='C'>&nbsp;C
                                        <?= $v->getPaC() ?>
                                    </label><br>
                                   
                                </div>
                                <div class='choose<?= $j ?>'onclick=" writechoose('choose<?php echo $j; ?>')"
                                        style='margin-bottom:0.6em;'>
                                        <label onclick="fillBackground('s<?= $k + 1 ?>')"">
                                    <input type='radio' id='tcau<?= $k + 1 ?>' name='cau<?= $k + 1 ?>' value='D'>&nbsp;D
                                    <?= $v->getPaD() ?>
                                </label><br>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <?php else :
                            switch ($v->getTemp()) {
                                case 'A':
                ?>
                <div class='card-body'>
                            <div class='' id='ch<?= $k + 1 ?>'>
                                Câu hỏi
                                <b>
                                    <?= $k + 1 ?>
                                </b>:
                               
                                    <?= $v->getCauhoi() ?>
                                   
                                
                                <script>fillBackground('s<?php echo ($k + 1); ?>');</script>
                                <div class=''>
                                <div class='choose<?php echo $j; ?>' onclick=" writechoose('choose<?php echo $j; ?>')"
                                            style='margin-bottom:0.6em;'>
                                            <label onClick="fillBackground('s<?php echo ($k + 1); ?>')">
                                                <input type='radio' id='tcau<?php echo ($k + 1); ?>'
                                                    name='cau<?php echo ($k + 1); ?>' value='A' checked>
                                                &nbsp;A. <?php echo $v->getPaA(); ?>
                                            </label><br>

                                </div>
                                <?php
                                        $j++;
                                        ?>
                                <div class='choose<?php echo $j; ?>' onclick=" writechoose('choose<?php echo $j; ?>')"
                                    style='margin-bottom:0.6em;'>
                                    <label onClick=" fillBackground('s<?php echo ($k + 1); ?>')">
                                        <input class='choose<?php echo ($k + 1); ?>' type='radio'
                                            id='tcau<?php echo ($k + 1); ?>' name='cau<?php echo ($k + 1); ?>'
                                            value='B'>&nbsp;B. <?php echo $v->getPaB(); ?> </label><br>

                                </div>
                                <?php
                                        $j++;
                                        ?>
                                <div class='choose<?php echo $j; ?>' onclick=" writechoose('choose<?php echo $j; ?>')"
                                    style='margin-bottom:0.6em;'>
                                    <label onClick="fillBackground('s<?php echo ($k + 1); ?>')">
                                        <input type='radio' id='tcau<?php echo ($k + 1); ?>'
                                            name='cau<?php echo ($k + 1); ?>' value='C'>
                                        &nbsp;C. <?php echo $v->getPaC(); ?>
                                    </label><br>

                                </div>
                                <?php
                                        $j++;
                                        ?>
                                <div class='choose<?php echo $j; ?>' onclick=" writechoose('choose<?php echo $j; ?>')"
                                    style='margin-bottom:0.6em;'>
                                    <label onClick="fillBackground('s<?php echo ($k + 1); ?>')">
                                        <input type='radio' id='tcau<?php echo ($k + 1); ?>'
                                            name='cau<?php echo ($k + 1); ?>' value='D'>
                                        &nbsp;D. <?php echo $v->getPaD(); ?>
                                    </label>

                                </div>
                            </div>
                            <?php

                                    $j++;
                                    break;
                                case 'B':
                                ?>
                            <div class='card-body'>
                                <div class='' id='ch<?= $k + 1 ?>'>
                                    Câu hỏi
                                    <b>
                                        <?= $k + 1 ?>
                                    </b>:

                                    <?= $v->getCauhoi() ?>


                                    <script>
                                    fillBackground('s<?php echo ($k + 1); ?>');
                                    </script>
                                    <div class=''>
                                        <div class='choose<?php echo $j; ?>'
                                            onclick="writechoose('choose<?php echo $j; ?>')"
                                            style='margin-bottom:0.6em;'>
                                            <label onClick="fillBackground('s<?php echo ($k + 1); ?>')">
                                                <input type='radio' id='tcau<?php echo ($k + 1); ?>'
                                                    name='cau<?php echo ($k + 1); ?>' value='A'>
                                                &nbsp;A. <?php echo $v->getPaA(); ?>
                                            </label><br>

                                        </div>
                                        <?php
                                                $j++;
                                                ?>
                                        <div class='choose<?php echo $j; ?>'
                                            onclick=" writechoose('choose<?php echo $j; ?>')"
                                            style='margin-bottom:0.6em;'>
                                            <label onClick="fillBackground('s<?php echo ($k + 1); ?>')">
                                                <input class='choose<?php echo ($k + 1); ?>' type='radio'
                                                    id='tcau<?php echo ($k + 1); ?>' name='cau<?php echo ($k + 1); ?>'
                                                    value='B' checked>
                                                &nbsp;B. <?php echo $v->getPaB(); ?>
                                            </label><br>

                                        </div>
                                        <?php
                                                $j++;
                                                ?>
                                        <div class='choose<?php echo $j; ?>'
                                            onclick=" writechoose('choose<?php echo $j; ?>')"
                                            style='margin-bottom:0.6em;'>
                                            <label onClick="fillBackground('s<?php echo ($k + 1); ?>')">
                                                <input type='radio' id='tcau<?php echo ($k + 1); ?>'
                                                    name='cau<?php echo ($k + 1); ?>' value='C'>
                                                &nbsp;C. <?php echo $v->getPaC(); ?>
                                            </label><br>

                                        </div>
                                        <?php
                                                $j++;
                                                ?>
                                        <div class='choose<?php echo $j; ?>'
                                            onclick=" writechoose('choose<?php echo $j; ?>')"
                                            style='margin-bottom:0.6em;'>
                                            <label onClick="fillBackground('s<?php echo ($k + 1); ?>')">
                                                <input type='radio' id='tcau<?php echo ($k + 1); ?>'
                                                    name='cau<?php echo ($k + 1); ?>' value='D'>
                                                &nbsp;D. <?php echo $v->getPaD(); ?>
                                            </label>

                                        </div>
                                    </div>
                                    <?php

                                        $j++;
                                        break;
                                    case 'C':
                                        ?>
                                    <div class='card-body'>
                                        <div class='' id='ch<?= $k + 1 ?>'>
                                            Câu hỏi
                                            <b>
                                                <?= $k + 1 ?>
                                            </b>:

                                            <?= $v->getCauhoi() ?>


                                            <script>
                                            fillBackground('s<?php echo ($k + 1); ?>');
                                            </script>
                                            <div class=''>
                                                <div class='choose<?php echo $j; ?>'
                                                    onclick="writechoose('choose<?php echo $j; ?>')"
                                                    style='margin-bottom:0.6em;'>
                                                    <label onClick="fillBackground('s<?php echo ($k + 1); ?>')">
                                                        <input type='radio' id='tcau<?php echo ($k + 1); ?>'
                                                            name='cau<?php echo ($k + 1); ?>' value='A'>
                                                        &nbsp;A. <?php echo $v->getPaA(); ?>
                                                    </label><br>

                                                </div>
                                                <?php
                                                        $j++;
                                                        ?>
                                                <div class='choose<?php echo $j; ?>'
                                                    onclick=" writechoose('choose<?php echo $j; ?>')"
                                                    style='margin-bottom:0.6em;'>
                                                    <label onClick="fillBackground('s<?php echo ($k + 1); ?>')">
                                                        <input class='choose<?php echo ($k + 1); ?>' type='radio'
                                                            id='tcau<?php echo ($k + 1); ?>'
                                                            name='cau<?php echo ($k + 1); ?>' value='B'> &nbsp;B.
                                                        <?php echo $v->getPaB(); ?> </label><br>

                                                </div>
                                                <?php
                                                        $j++;
                                                        ?>
                                                <div class='choose<?php echo $j; ?>'
                                                    onclick=" writechoose('choose<?php echo $j; ?>')"
                                                    style='margin-bottom:0.6em;'>
                                                    <label onClick="fillBackground('s<?php echo ($k + 1); ?>')">
                                                        <input type='radio' id='tcau<?php echo ($k + 1); ?>'
                                                            name='cau<?php echo ($k + 1); ?>' value='C' checked>
                                                        &nbsp;C. <?php echo $v->getPaC(); ?>
                                                    </label><br>

                                                </div>
                                                <?php
                                                        $j++;
                                                        ?>
                                                <div class='choose<?php echo $j; ?>'
                                                    onclick=" writechoose('choose<?php echo $j; ?>')"
                                                    style='margin-bottom:0.6em;'>
                                                    <label onClick="fillBackground('s<?php echo ($k + 1); ?>')">
                                                        <input type='radio' id='tcau<?php echo ($k + 1); ?>'
                                                            name='cau<?php echo ($k + 1); ?>' value='D'>
                                                        &nbsp;D. <?php echo $v->getPaD(); ?>
                                                    </label>

                                                </div>
                                            </div>
                                            <?php

                                                $j++;
                                                break;
                                            case 'D':
                                                ?>
                                            <div class='card-body'>
                                                <div class='' id='ch<?= $k + 1 ?>'>
                                                    Câu hỏi
                                                    <b>
                                                        <?= $k + 1 ?>
                                                    </b>:

                                                    <?= $v->getCauhoi() ?>


                                                    <script>
                                                    fillBackground('s<?php echo ($k + 1); ?>');
                                                    </script>
                                                    <div class=''>
                                                        <div class='choose<?php echo $j; ?>'
                                                            onclick="writechoose('choose<?php echo $j; ?>')"
                                                            style='margin-bottom:0.6em;'>
                                                            <label onClick="fillBackground('s<?php echo ($k + 1); ?>')">
                                                                <input type='radio' id='tcau<?php echo ($k + 1); ?>'
                                                                    name='cau<?php echo ($k + 1); ?>' value='A'>
                                                                &nbsp;A. <?php echo $v->getPaA(); ?>
                                                            </label><br>

                                                        </div>
                                                        <?php
                                                                $j++;
                                                                ?>
                                                        <div class='choose<?php echo $j; ?>'
                                                            onclick=" writechoose('choose<?php echo $j; ?>')"
                                                            style='margin-bottom:0.6em;'>
                                                            <label onClick="fillBackground('s<?php echo ($k + 1); ?>')">
                                                                <input class='choose<?php echo ($k + 1); ?>'
                                                                    type='radio' id='tcau<?php echo ($k + 1); ?>'
                                                                    name='cau<?php echo ($k + 1); ?>' value='B'>
                                                                &nbsp;B.
                                                                <?php echo $v->getPaB(); ?> </label><br>

                                                        </div>
                                                        <?php
                                                                $j++;
                                                                ?>
                                                        <div class='choose<?php echo $j; ?>'
                                                            onclick=" writechoose('choose<?php echo $j; ?>')"
                                                            style='margin-bottom:0.6em;'>
                                                            <label onClick="fillBackground('s<?php echo ($k + 1); ?>')">
                                                                <input type='radio' id='tcau<?php echo ($k + 1); ?>'
                                                                    name='cau<?php echo ($k + 1); ?>' value='C'>
                                                                &nbsp;C. <?php echo $v->getPaC(); ?>
                                                            </label><br>

                                                        </div>
                                                        <?php
                                                                $j++;
                                                                ?>
                                                        <div class='choose<?php echo $j; ?>'
                                                            onclick=" writechoose('choose<?php echo $j; ?>')"
                                                            style='margin-bottom:0.6em;'>
                                                            <label onClick="fillBackground('s<?php echo ($k + 1); ?>')">
                                                                <input type='radio' id='tcau<?php echo ($k + 1); ?>'
                                                                    name='cau<?php echo ($k + 1); ?>' value='D' checked>
                                                                &nbsp;D. <?php echo $v->getPaD(); ?>
                                                            </label>

                                                        </div>
                                                    </div>
                                                    <?php

                                                    $j++;
                                                    break;
                                            } ?>
                                                </div>
                                            </div>
                                            <?php endif ?>
                                            <?php endforeach; ?>

                </form>

            </div>

            <div class="mb-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 mt-4 fixed-right">
                <div class="card shadow">
                    <script>
                    var hour, minute, second, temp1, temp = <?= $time ?>;
                    </script>
                    <div id="timer" class="d-flex justify-content-start">
                        <img src="assets/image/clock.png" height="38" width="38" />
                        <div id="clock" class="text-success fs-3 fw-bold ms-2">
                        </div>
                        <!--Hiển thị thời gian còn lại-->
                    </div>
                    <div class="dscauhoi">
                        <div class='hellomem' style='width:100%; height:2em;'>
                            <div
                                style='padding-top:0.5em;padding-left:0.5em;font-size:14px;color:orangered;width:97.5%; height:1.8em;'>
                                Danh sách câu hỏi</div>
                        </div>
                        <div class="maincauhoi" style="width:100%;height:8em;overflow:auto;">
                            <?php
                            for ($i = 1; $i <= $_SESSION['tongcauhoi']; $i++) {
                                echo "<div class='socau' id='s" . $i . "' onClick=\"scrollToAnchor('ch" . $i . "');\">" . $i . "
                		</div>";
                            }
                            ?>
                        </div>
                        <br>
                        <div style="font-weight:bold; font-size:14px;margin-bottom:0.8em; margin-left:0.6em;"><i><u>Chú
                                    ý:</u></i></div>
                        <div style="font-size:13px;margin-left:0.6em;">- Màu đen: Câu hỏi chưa trả lời.</div>
                        <div style="font-size:13px;margin-left:0.6em;">- Màu xanh: Câu hỏi đã trả lời.</div>
                    </div>

                    <div class="card-body">
                        <div class='hoten' style='width:100%;font-size:14px;'>
                            <span>Họ và tên:&nbsp;</span>
                            <span style="color:rgba(255,102,51,1);"><b>
                                    <?= $_SESSION['user_info']['hodem'] . " " . $_SESSION['user_info']['ten'] ?>
                                </b></span>
                        </div>
                        <div class='sobd' style='width:100%;font-size:14px;'>
                            <span>Số báo danh:&nbsp;</span>
                            <span style="color:rgba(255,102,51,1);"><b>
                                    <?php echo $sbd; ?>
                                </b></span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mb-4">
                        <input id="submit" class="btn btn-success w-50" type="submit" value="Nộp bài"
                            onClick="chamdiem();">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>