<?php include './component/header.php'; ?>
<?php

if (isset($_POST['ubahdata'])) {
    if (!$_POST) {
        echo "
        <script>
            alert('Data gagal diubah');
            document.location.href = 'index.php';
        </script>
        ";
    }
    editdata($_POST) > 0 ? "data Berhasil dirubah" : "data gagal dirubah";
    echo "
        <script>
            alert('Data berhasil diubah');
            document.location.href = 'index.php';
        </script>
        ";
}
?>

    <?php include './component/footer.php'; ?>