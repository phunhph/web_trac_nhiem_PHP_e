<?php
require_once 'dao/quanlymonthiDAO.php';
class QuanLyMonThiController
{
    private $quanlymonDao;
    private $adminDAO;
    public function __construct()
    {
        $this->quanlymonDao = new QuanLyMonThiDAO();
        $this->adminDAO = new AdminDAO();
    }
    public function index()
    {
        if (!isset($_SESSION['user_info'])) {
            if (!isset($_SESSION['admin'])) {
                header('Location: index.php');
                exit();
            } else {
                $kythi = $this->adminDAO->getNameKyThi();
                require_once 'views/quanlymonthi/admin/quanlymonthi.php';
            }
        } else {
            header('location: index.php?controller=login&action=' . $_SESSION['action_login']);
        }
    }
    // môn thi
    public function getmonthi()
    {
        if (!isset($_SESSION['user_info'])) {
            if (!isset($_SESSION['admin'])) {
                header('Location: index.php');
                exit();
            } else {
                $id = json_decode(file_get_contents("php://input"));
                $monthi = $this->quanlymonDao->getMonthi($id->id); //;
                echo json_encode($monthi, JSON_UNESCAPED_UNICODE);
                exit();
            }
        } else {
            header('location: index.php?controller=login&action=' . $_SESSION['action_login']);
        }
    }
    public function addmonthi()
    {
        if (!isset($_SESSION['user_info'])) {
            if (!isset($_SESSION['admin'])) {
                header('Location: index.php');
                exit();
            } else {
                $data = json_decode(file_get_contents("php://input"));
                $this->quanlymonDao->createMonThi($data->id, $data->name, $data->tgbd, $data->tgkt, $data->id_kt);
                exit();
            }
        } else {
            header('location: index.php?controller=login&action=' . $_SESSION['action_login']);
        }
    }
    public function fixmonthi()
    {
        if (!isset($_SESSION['user_info'])) {
            if (!isset($_SESSION['admin'])) {
                header('Location: index.php');
                exit();
            } else {
                $data = json_decode(file_get_contents("php://input"));
                $this->quanlymonDao->fixmonthi($data->id, $data->name, $data->tgbd, $data->tgkt); //;
                exit();
            }
        } else {
            header('location: index.php?controller=login&action=' . $_SESSION['action_login']);
        }
    }
    public function deletemonthi()
    {
        if (!isset($_SESSION['user_info'])) {
            if (!isset($_SESSION['admin'])) {
                header('Location: index.php');
                exit();
            } else {
                $data = json_decode(file_get_contents("php://input"));

                $this->quanlymonDao->deletediem($data->id);
                $this->quanlymonDao->deleteallowexam($data->id);
                $this->quanlymonDao->deleteremote($data->id);
                $this->quanlymonDao->deletedethisinh($data->id);
                $this->quanlymonDao->deletecauhoi($data->id);
                $this->quanlymonDao->deletebode($data->id);
                $this->quanlymonDao->deletedethiprofilebymodun($data->id);
                $this->quanlymonDao->deletethoigianthi($data->id);
                $this->quanlymonDao->deleteMonThi($data->id); //;
                exit();
            }
        } else {
            header('location: index.php?controller=login&action=' . $_SESSION['action_login']);
        }
    }
    // nội dung thi
    public function getnoidungthi()
    {
        if (!isset($_SESSION['user_info'])) {
            if (!isset($_SESSION['admin'])) {
                header('Location: index.php');
                exit();
            } else {
                $id = json_decode(file_get_contents("php://input"));
                $noidungthi = $this->quanlymonDao->getNoiDungThi($id->id); //;
                echo json_encode($noidungthi, JSON_UNESCAPED_UNICODE);
                exit();
            }
        } else {
            header('location: index.php?controller=login&action=' . $_SESSION['action_login']);
        }
    }
    public function addnoidungthi()
    {
        if (!isset($_SESSION['user_info'])) {
            if (!isset($_SESSION['admin'])) {
                header('Location: index.php');
                exit();
            } else {
                $data = json_decode(file_get_contents("php://input"));
                $this->quanlymonDao->createNoiDungThi($data->id, $data->name, $data->mamon); //;
                exit();
            }
        } else {
            header('location: index.php?controller=login&action=' . $_SESSION['action_login']);
        }
    }
    public function fixnoidungthi()
    {
        if (!isset($_SESSION['user_info'])) {
            if (!isset($_SESSION['admin'])) {
                header('Location: index.php');
                exit();
            } else {
                $data = json_decode(file_get_contents("php://input"));
                $this->quanlymonDao->fixNoiDungThi($data->id, $data->name, $data->mamon); //;
                exit();
            }
        } else {
            header('location: index.php?controller=login&action=' . $_SESSION['action_login']);
        }
    }
    public function deletenoidungthi()
    {
        if (!isset($_SESSION['user_info'])) {
            if (!isset($_SESSION['admin'])) {
                header('Location: index.php');
                exit();
            } else {
                $data = json_decode(file_get_contents("php://input"));
                $this->quanlymonDao->deletedethisinhbymabode($data->id);
                $this->quanlymonDao->deletecauhoibymabode($data->id);
                $this->quanlymonDao->deleteNoiDungThi($data->id); //;
                exit();
            }
        } else {
            header('location: index.php?controller=login&action=' . $_SESSION['action_login']);
        }
    }
}