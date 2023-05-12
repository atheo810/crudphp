<?php include './component/header.php'; ?>
<?php
if (isset($_POST['hapusdata'])) {
    if (hapusdata($_POST) > 0) {
        echo "
        <script>
            alert('Data Berhasil Dihapus');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Tidak berhasil di hapus');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<?php include './component/footer.php'; ?>