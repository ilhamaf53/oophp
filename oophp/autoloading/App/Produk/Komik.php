<?php 
class Komik extends Produk implements InfoProduk
{
    // membuat variabel jmlHalaman secara public
    public $jmlHalaman;

    public function getInfo()
    {
        $str = "{$this->judul} | 
        {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    // inisiasi construct
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        // $this->judul di dapat dari property yang berada
        // di class produk
        parent::__construct($judul, $penulis, $penerbit, $harga);

        // $this->jmlHalaman di isi dengan $jmlHalaman
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}
