<h2>Tambah Barang</h2>

<form action="barang_proses.php" method="post">
    <table>
        <tr>
            <td>Nama Barang</td>
            <td><input type="text" name="barang_nama"></td>
        </tr>
        <tr>
            <td>Harga Barang</td>
            <td><input type="text" name="barang_harga"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="btn_simpan" value="SIMPAN">
                <input type="submit" name="btn_batal" value="BATAL">
            </td>
        </tr>
    </table>
</form>