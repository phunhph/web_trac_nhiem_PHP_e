<?php
require_once 'dao/soandethiDAO.php';
class SoanDeThiController
{
    private $adminDAO;
    private $soandethiDAO;
    public function __construct()
    {
        $this->adminDAO = new AdminDAO();
        $this->soandethiDAO = new SoanDeThiDAO();
    }
    public function index()
    {
        if (!isset($_SESSION['user_info'])) {
            if (!isset($_SESSION['admin'])) {
                header('Location: index.php');
                exit();
            } else {
                $kythi = $this->adminDAO->getKythi();
                require_once 'views/soandethi/admin/soandethi.php';
            }
        } else {
            header('location: index.php?controller=login&action=' . $_SESSION['action_login']);
        }
    }
    public function getcauhoibybode()
    {
        if (!isset($_SESSION['user_info'])) {
            if (!isset($_SESSION['admin'])) {
                header('Location: index.php');
                exit();
            } else {
                $data = json_decode(file_get_contents("php://input"));
                $cauhois = $this->soandethiDAO->getcauhoi($data->id); //;
                echo json_encode($cauhois, JSON_UNESCAPED_UNICODE);
                exit();
            }
        } else {
            header('location: index.php?controller=login&action=' . $_SESSION['action_login']);
        }
    }
    public function deletecauhoi()
    {
        if (!isset($_SESSION['user_info'])) {
            if (!isset($_SESSION['admin'])) {
                header('Location: index.php');
                exit();
            } else {
                $data = json_decode(file_get_contents("php://input"));
                $this->soandethiDAO->deletedethisinh($data->macauhoi);
                $this->soandethiDAO->deletecauhoi($data->macauhoi); //;
                exit();
            }
        } else {
            header('location: index.php?controller=login&action=' . $_SESSION['action_login']);
        }
    }
    public function updatecauhoi()
    {
        if (!isset($_SESSION['user_info'])) {
            if (!isset($_SESSION['admin'])) {
                header('Location: index.php');
                exit();
            } else {
                $data = json_decode(file_get_contents("php://input"));
                $this->soandethiDAO->updatecauhoi($data->macauhoi, $data->tencauhoi, $data->padung, $data->pasai1, $data->pasai2, $data->pasai3, $data->tl);
                exit();
            }
        } else {
            header('location: index.php?controller=login&action=' . $_SESSION['action_login']);
        }
    }
    public function createcauhoi()
    {
        if (!isset($_SESSION['user_info'])) {
            if (!isset($_SESSION['admin'])) {
                header('Location: index.php');
                exit();
            } else {
                $data = json_decode(file_get_contents("php://input"));
                $this->soandethiDAO->createcauhoi($data->macauhoi, $data->tencauhoi, $data->padung, $data->pasai1, $data->pasai2, $data->pasai3, $data->tl, $data->mabode); //;
                exit();
            }
        } else {
            header('location: index.php?controller=login&action=' . $_SESSION['action_login']);
        }
    }
}
