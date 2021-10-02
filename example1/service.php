<?php
include "koneksi.php";
switch ($_GET['action'])
{
    case 'save':
        $Nama = $_POST['Nama'];
        $JenisKelamin = $_POST['JenisKelamin'];
        $Alamat = $_POST['Alamat'];
        $Agama = $_POST['Agama'];
        $NoHP = $_POST['NoHP'];
        $Email = $_POST['Email'];

        $query = mysqli_query($koneksi, "INSERT INTO Mahasiswa(Nama, JenisKelamin, Alamat, Agama, NoHp, Email) VALUES('$Nama', '$JenisKelamin', '$Alamat', '$Agama', '$NoHP', '$Email')");
        if ($query)
        {
            echo "Simpan Data Berhasil";
        }
        else
        {
            echo "Simpan Data Gagal :" . mysqli_error($koneksi);
        }
    break;
    case 'edit':
        $IdMhsw = $_POST['IdMhsw'];
        $Nama = $_POST['Nama'];
        $JenisKelamin = $_POST['JenisKelamin'];
        $Alamat = $_POST['Alamat'];
        $Agama = $_POST['Agama'];
        $NoHP = $_POST['NoHP'];
        $Email = $_POST['Email'];

        $query = mysqli_query($koneksi, "UPDATE Mahasiswa SET Nama='$Nama', JenisKelamin='$JenisKelamin', Alamat='$Alamat', Agama='$Agama', NoHp='$NoHP', Email='$Email' WHERE IdMhsw='$IdMhsw'");
        if ($query)
        {
            echo "Edit Data Berhasil";
        }
        else
        {
            echo "Edit Data Gagal :" . mysqli_error($koneksi);
        }
    break;
    case 'delete':
        $IdMhsw = $_POST['IdMhsw'];
        $query = mysqli_query($koneksi, "DELETE FROM Mahasiswa WHERE IdMhsw='$IdMhsw'");
        if ($query)
        {
            echo "Hapus Data Berhasil";
        }
        else
        {
            echo "Hapus Data Gagal :" . mysqli_error($koneksi);
        }
    break;
}
?>