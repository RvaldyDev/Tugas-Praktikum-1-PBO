<!-- Membuat Lebih dari Satu Object -->
<?php
class Mahasiswa {
    public $nama;
    public function sapa() { return "Halo, " . $this->nama; }
}
$mhs1 = new Mahasiswa(); $mhs1->nama = "Alya";
$mhs2 = new Mahasiswa(); $mhs2->nama = "Budi";
echo $mhs1->sapa() . "<br>" . $mhs2->sapa();
?>
