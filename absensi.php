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
                    <div class="container text-center">
                        <img src="img/undraw_profile.svg" class="img-thumbnail rounded-circle" width="200" style="margin: auto;">
                        <h1>Muhamad Arwani Maulana</h1>
                        <h3>XII - ATPH</h3>
                    </div>
                    <div class="container bg-white">
                        <table class="table table-hover">
                            <tr>
                                <th scope="row">Hari</th>
                                <td>: Senin</td>
                            </tr>
                            <tr>
                                <th scope="row">Tanggal</th>
                                <td>: 2 Agustus 2021</td>
                            </tr>
                            <tr>
                                <th scope="row">Status Absensi</th>
                                <td>: Belum Absen</td>
                            </tr>
                            <tr>
                                <th scope="row">Aksi</th>
                                <td>:
                                    <a class="btn btn-primary">Hadir</a>
                                    <a class="btn btn-warning">Sakit</a>
                                    <a class="btn btn-warning">Izin</a>
                                </td>
                            </tr>
                        </table>
                    </div>
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