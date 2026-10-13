<?php
class Produk {
    public $nama;
    public $harga;

    public function tampilProduk() {
        return $this->nama . " - Rp" . $this->harga;
    }
}

$produk = new Produk();
$produk->nama = "Buku Modul OOP";
$produk->harga = 90000;
echo $produk->tampilProduk();
?>
