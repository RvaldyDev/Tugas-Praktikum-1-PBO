<?php
$nama = "Ahmad";
$prodi = "Informatika";

function tampilkanMahasiswa($nama, $prodi) {
    return "Nama: " . $nama . " | Prodi: " . $prodi;
}

echo tampilkanMahasiswa($nama, $prodi);
?>
