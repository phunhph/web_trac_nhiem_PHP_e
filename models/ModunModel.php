<?php

class Modun
{
    // Thuộc tính
    public $mamodun;
    public $tenmodun;
    public $batdau;
    public $ketthuc;
    public $loai;

    // Hàm khởi tạo
    public function __construct($mamodun, $tenmodun, $batdau, $ketthuc, $loai)
    {
        $this->mamodun = $mamodun;
        $this->tenmodun = $tenmodun;
        $this->batdau = $batdau;
        $this->ketthuc = $ketthuc;
        $this->loai = $loai;
    }
    public function getLoai()
    {
        return $this->loai;
    }

    // Phương thức Setter cho mamodun
    public function setLoai($loai)
    {
        $this->loai = $loai;
    }
    // Phương thức Getter cho mamodun
    public function getMamodun()
    {
        return $this->mamodun;
    }

    // Phương thức Setter cho mamodun
    public function setMamodun($mamodun)
    {
        $this->mamodun = $mamodun;
    }

    // Phương thức Getter cho tenmodun
    public function getTenmodun()
    {
        return $this->tenmodun;
    }

    // Phương thức Setter cho tenmodun
    public function setTenmodun($tenmodun)
    {
        $this->tenmodun = $tenmodun;
    }

    // Phương thức Getter cho batdau
    public function getBatdau()
    {
        return $this->batdau;
    }

    // Phương thức Setter cho batdau
    public function setBatdau($batdau)
    {
        $this->batdau = $batdau;
    }

    // Phương thức Getter cho ketthuc
    public function getKetthuc()
    {
        return $this->ketthuc;
    }

    // Phương thức Setter cho ketthuc
    public function setKetthuc($ketthuc)
    {
        $this->ketthuc = $ketthuc;
    }
}
