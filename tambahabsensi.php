<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'asets/head.php';?>
    <style type="text/css">
        input{
            border: none;
        }
    </style>
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
                    <h1>Tambah Absensi</h1>
                    <div class="container bg-white">
                        <form action="" method="post">
                            <table class="table table-hover">
                                <tr>
                                    <th scope="row">Hari</th>
                                    <td>: <input type="text" name="hari" id="hari"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Tanggal</th>
                                    <td>: <input type="text" name="tanggal" id="tanggal"></td>
                                </tr>                               
                                <tr>
                                    <th scope="row">Kelas</th>
                                    <td>: <select name="kelas">
                                        <option>X</option>
                                        <option>XI</option>
                                        <option>XII</option>
                                    </select></td>
                                </tr>
                                <tr>
                                    <th scope="row">Aksi</th>
                                    <td>: <button class="btn btn-primary" name="submit"><i class="fas fa-plus"></i> Tambah</button></td>
                                </tr>
                            </table>
                        </form>
                        <script type="text/javascript">
                            let date = new Date();
                            let hari = '';
                            switch(date.getDay()){
                                case 1: hari = 'Senin';     break;
                                case 2: hari = 'Selasa';    break;
                                case 3: hari = 'Rabu';      break;
                                case 4: hari = 'Kamis';     break;
                                case 5: hari = 'Jumat';     break;
                                case 6: hari = 'Sabtu';     break;
                                case 7: hari = 'Minggu';    break;
                            }
                            document.getElementById('hari').value = hari;
                            document.getElementById('tanggal').value = `${date.getDate()}/${date.getMonth()}/${date.getFullYear()}`;
                        </script>
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