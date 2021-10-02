
<?php
 include "koneksi.php";
 $IdMhsw=$_GET['IdMhsw'];
 $query=mysqli_query($koneksi, "SELECT * FROM Mahasiswa WHERE IdMhsw='$IdMhsw'") or die(mysqli_error($koneksi));
 $result=mysqli_fetch_array($query);
?>
    <form method="POST" id="formEdit">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="IdMhsw" id="IdMhsw" required="" value="<?php echo $result['IdMhsw']; ?>" />
                    <input type="text" name="Nama" id="Nama" required="" value="<?php echo $result['Nama']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <label>
                        <input type="radio" name="JenisKelamin" id="JenisKelamin" value="Laki-laki" required="" <?php if($result[ 'JenisKelamin']=="Laki-laki" ) echo "checked"; ?> />Laki-laki</label>
                    <label>
                        <input type="radio" name="JenisKelamin" id="JenisKelamin" value="Perempuan" required="" <?php if($result[ 'JenisKelamin']=="Perempuan" ) echo "checked"; ?> />Perempuan</label>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="Alamat" id="Alamat" required="">
                        <?php echo $result['Alamat']; ?>
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>
                    <select name="Agama" id="Agama" required="">
                        <option disabled="" selected="">-Pilih-</option>
                        <option value="Islam" <?php if($result[ 'Agama']=="Islam" ) echo "selected"; ?>>Islam</option>
                        <option value="Kristen" <?php if($result[ 'Agama']=="Kristen" ) echo "selected"; ?>>Kristen</option>
                        <option value="Katholik" <?php if($result[ 'Agama']=="Katholik" ) echo "selected"; ?>>Katholik</option>
                        <option value="Budha" <?php if($result[ 'Agama']=="Budha" ) echo "selected"; ?>>Budha</option>
                        <option value="Hindhu" <?php if($result[ 'Agama']=="Hindhu" ) echo "selected"; ?>>Hindhu</option>
                        <option value="Konghucu" <?php if($result[ 'Agama']=="Konghucu" ) echo "selected"; ?>>Konghucu</option>
                        <option value="Lain-lain" <?php if($result[ 'Agama']=="Lain-lain" ) echo "selected"; ?>>Lain-lain</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>No. HP</td>
                <td>
                    <input type="text" name="NoHP" id="NoHP" required="" value="<?php echo $result['NoHp']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="Email" id="Email" required="" value="<?php echo $result['Email']; ?>" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="simpan" id="simpan" value="Simpan" />
                    <button type="button" id="cancelButton">Batal</button>
                </td>
            </tr>
        </table>
    </form>