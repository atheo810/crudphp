<?php include './component/header.php'; ?>
<?php
if (isset($_POST['hapusdata'])) {
    if (!$_POST) {
        echo "
<script>
    alert('Data gagal dihapus');
    document.location.href = 'index.php';
</script>
";
    }
    hapusdata($_POST) > 0 ? "data Berhasil dirubah" : "data gagal dirubah";
    echo "
<script>
    alert('Data berhasil dihapus');
    document.location.href = 'index.php';
</script>
";
}
?>

<?php include './component/footer.php'; ?>