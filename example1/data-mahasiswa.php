
<button id="addButton" class="btn btn-primary">Tambah Data</button>
<br>
<br>
<table border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>No. HP</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
   include "koneksi.php";
   $no=1;
   $query=mysqli_query($koneksi, "SELECT * FROM Mahasiswa ORDER BY IdMhsw DESC") or die(mysqli_error($koneksi));
   while ($result=mysqli_fetch_array($query)) {
    ?>
            <tr>
                <td>
                    <?php echo $no++; ?>
                </td>
                <td>
                    <?php echo $result['Nama']; ?>
                </td>
                <td>
                    <?php echo $result['JenisKelamin']; ?>
                </td>
                <td>
                    <?php echo $result['Alamat']; ?>
                </td>
                <td>
                    <?php echo $result['Agama']; ?>
                </td>
                <td>
                    <?php echo $result['NoHp']; ?>
                </td>
                <td>
                    <?php echo $result['Email']; ?>
                </td>
                <td>
                    <button id="EditButton" value="<?php echo $result['IdMhsw']; ?>">Edit</button>
                    <button id="DeleteButton" value="<?php echo $result['IdMhsw']; ?>">Delete</button>
                </td>
            </tr>
            <?php
   }
  ?>
    </tbody>
</table