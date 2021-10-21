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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>
                    <br>
                    <!-- Content Start -->
                    <div class="row">

                        <div class="col-xl-3 col-md-6 mb-4">
                            <a href="absensi.php">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Absensi</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Isi Absen</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-calendar-plus fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <a href="tugas.php">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Tugas</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Lihat Tugas</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-tasks fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <br><br>
                    <hr>
                    <br><br>
                    <div class="row">

                        <div class="col-xl-3 col-md-6 mb-4">
                            <a href="profil.php">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Profil</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Lihat Profil</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <a href="logout.php">
                                <div class="card border-left-danger shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                    Profil</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Keluar</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-sign-out-alt fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
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