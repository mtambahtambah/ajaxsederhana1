
<form method="POST" id="formAdd">
    <table>
        <tr>
            <td>Nama</td>
            <td>
                <input type="text" name="Nama" id="Nama" required="" />
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <label>
                    <input type="radio" name="JenisKelamin" id="JenisKelamin" value="Laki-laki" required="" />Laki-laki</label>
                <label>
                    <input type="radio" name="JenisKelamin" id="JenisKelamin" value="Perempuan" required="" />Perempuan</label>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="Alamat" id="Alamat" required=""></textarea>
            </td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>
                <select name="Agama" id="Agama" required="">
                    <option disabled="" selected="">-Pilih-</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindhu">Hindhu</option>
                    <option value="Konghucu">Konghucu</option>
                    <option value="Lain-lain">Lain-lain</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>No. HP</td>
            <td>
                <input type="text" name="NoHP" id="NoHP" required="" />
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="email" name="Email" id="Email" required="" />
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="simpan" id="simpan" value="Simpan" />
                <button id="cancelButton" type="button">Batal</button>
            </td>
        </tr>
    </table>
</form>