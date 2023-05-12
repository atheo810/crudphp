<?php include './component/header.php'; ?>
<?php
if (isset($_POST['submit'])) {
    if (createData($_POST) > 0) {
        echo "
        <script>
            alert('Data Berhasil Ditambah');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Tidak berhasil di tambah');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<div class="container">
    <form action="" method="post">
        <table border="1" class="table table-striped">
            <tr>
                <th>
                    <label for="nama">Name : </label>
                    <input type="text" name="nama" id="nama" required>
                </th>

            </tr>
            <tr>

                <th>
                    <label for="nim">NIM : </label>
                    <input type="text" name="nim" id="nim" required>
                </th>
            </tr>
            <tr>
                <th>
                    <label for="jurusan">Jurusan : </label>
                    <select class="form-control mb-3" type="text" name="jurusan" required>
                        <option value="TI - KAB" selected>TI - KAB</option>
                        <option value="TI - KAB">TI - KAB</option>
                        <option value="TI - DGM">TI - DGM</option>
                        <option value="TI - MTI">TI - MTI</option>
                        <option value="SK">SK</option>

                    </select>
                </th>
            </tr>
        </table>
        <tr>
            <button type="submit" name="submit">Cetak</button>
        </tr>
    </form>
</div>

<?php include './component/footer.php'; ?>