<?php
    //memanggil class model database
    include_once '../../config.php';
    include_once '../../controllers/DosenController.php';
    require '../../index.php';

    //instansiasi class database
    $database = new database;
    $db = $database->getKoneksi();

    $dosenController = new dosenController($db);
    $dosen = $dosenController->getAllDosen();
    //sekarang sudah bisamengambil data2 di file dosen



    ?>
    <div class="col-sm-8 py-2 mx-auto">
        <div class="container-fluid">
            <h3>Data Dosen</h3>
            <a href="tambah_dsn" class="btn btn-primary">Tambah Dosen</a>
            <br>
            <br>
            <!-- <div class="d-flex justify-content-center"> -->
            <table class="table table-striped table-sm">
                <tr>
                    <th>No</th>
                    <th>NIDN</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 1;
                foreach ($dosen as $x) {
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $x['nidn'] ?></td>
                        <td><?php echo $x['nama'] ?></td>
                        <td><?php echo $x['prodi'] ?></td>
                        <td>
                            <a class="btn btn-warning" href="edit_dsn/<?php echo $x['id']; ?>">Edit</a>
                            <a class="btn btn-danger" href="hapus_dsn/<?php echo $x['id']; ?>"
                            onclick="return confirm ('Apakah yakin akan menghapus..?')">Hapus</a>
                        </td>
                    </tr>
        </div>
    <?php
                }
    ?>
    </table>
</body>

</html>