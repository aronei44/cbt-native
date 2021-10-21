<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'asets/head.php';?>
</head>
<body id="page-top">
    <div id="wrapper">
        <?php require 'asets/sidebar.php';?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php require 'asets/nav.php';?>
                <div class="container-fluid">
                    <br>
                    <!-- Content Start -->
                    <h2>A. Tugas Yang Belum Dikerjakan</h2>
                    <div class="container bg-white">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Pelajaran</th>
                                    <th scope="col">Guru</th>
                                    <th scope="col">Waktu</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                    <td>2/8/21</td>
                                    <td>IPA</td>
                                    <td>Suhendar</td>
                                    <td>60 Menit</td>
                                    <td><a href="" class="btn btn-primary"><i class="fas fa-edit"></i> Isi</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <h2>B. Tugas Yang Sudah Dikerjakan</h2>
                    <div class="container bg-white">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Pelajaran</th>
                                    <th scope="col">Guru</th>
                                    <th scope="col">Nilai</th>
                                    <th scope="col">Waktu</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                    <td>1/8/21</td>
                                    <td>Indonesia</td>
                                    <td>Lilis</td>
                                    <td>80</td>
                                    <td>60 Menit</td>
                                    <td>Tuntas</td>
                                </tr>
                            </tbody>
                        </table>
                    <!-- End Of Content -->
                    <br><br>
                </div>
            </div>
            <?php require 'asets/footer.php';?>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <?php require 'asets/modal.php';?>
    <?php require 'asets/js.php';?>
</body>

</html>