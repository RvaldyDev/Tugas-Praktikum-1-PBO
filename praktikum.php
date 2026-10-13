<?php
// 1. Definisi Class
class Karyawan {
    // 3 Atribut / Property
    public $nik;
    public $nama;
    public $email;

    // Constructor untuk inisialisasi object
    public function __construct($nik, $nama, $email) {
        $this->nik = $nik;
        $this->nama = $nama;
        $this->email = $email;
    }

    // Method 1
    public function tampilkanProfil() {
        return "NIK: " . $this->nik . " | Nama: " . $this->nama;
    }

    // Method 2
    public function getEmail() {
        return "Email: " . $this->email;
    }
}

// 2. Membuat Minimal 2 Object
$karyawan1 = new Karyawan("3201012005920002", "Rindaman Pangestu", "rindaman@gmail.com");
$karyawan2 = new Karyawan("3201012005920007", "Nabila Zulasiyah", "nabila@gmail.com");

// 3. Menampilkan Informasi
echo $karyawan1->tampilkanProfil() . "<br>";
echo $karyawan2->tampilkanProfil();
?>