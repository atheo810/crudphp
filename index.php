<?php include './component/header.php'; ?>
<?php
$query = "SELECT * FROM user";

$datas = showThedata($query); ?>

<body>

    <!-- create table -->
    <div class="container-fluid mt-5">
        <table border="1" class="table table-striped table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 1;
            foreach ($datas as $data) :  ?>

                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $data['nama']; ?></td>
                    <td><?= $data['nim']; ?></td>
                    <td><?= $data['jurusan']; ?></td>
                    <td>
                        <!-- Button Edit -->
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $i; ?>">
                            Edit
                        </button> <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Hapus
                        </button>

                    </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="edit<?= $i; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="edit.php" method="post">
                                    <label class="form-label" for="nama">Nama</label>
                                    <input class="form-control mb-3" type="text" name="nama" value="<?= $data['nama']; ?>" required>
                                    <label class="form-label" for="nim">Nim</label>
                                    <input class="form-control mb-3" type="text" name="nim" value="<?= $data['nim']; ?>" disabled>
                                    <input class="form-control mb-3" type="hidden" name="nim" value="<?= $data['nim']; ?>">
                                    <input class="form-control mb-3" type="hidden" name="id" value="<?= $data['id']; ?>">
                                    <label class="form-label" for="jurusan">Jurusan</label>
                                    <select class="form-control mb-3" type="text" name="jurusan" required>
                                        <option value="<?= $data['jurusan'] ?>" selected><?= $data['jurusan']; ?></option>
                                        <option value="TI - KAB">TI - KAB</option>
                                        <option value="TI - DGM">TI - DGM</option>
                                        <option value="TI - MTI">TI - MTI</option>
                                        <option value="SK">SK</option>

                                    </select>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success" name="ubahdata">Setuju</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>


            <?php $i++;
            endforeach; ?>
        </table>
    </div>


    <?php include './component/footer.php'; ?>