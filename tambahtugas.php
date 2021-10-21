<?php 
$pelajaran = ['Ipa','Ips','Mtk','Indonesia'];
$kelas     = ['X','XI','XII'];
 ?>

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
                    <h1>Tambah Tugas</h1>
                    <?php if(isset($_POST['submit'])){
                        unset($_POST['pelajaran']);
                        unset($_POST['kelas']);
                        unset($_POST['submit']);
                        $soal = implode('///', $_POST);
                        var_dump($soal);
                        echo "<br>";
                        $soal = explode('///', $soal);
                        foreach ($soal as $key) {
                            $bagian = explode(';', $key);
                            echo $bagian[0].'<br>';
                            $jawaban = explode('@', $bagian[1]);
                            foreach ($jawaban as $jawab) {
                                echo $jawab.'<br>';
                            }
                        }
                    } ?>
                    <div class="container bg-white">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="pelajaran">Pelajaran :</label>
                                <select class="form-control" name="pelajaran" id="pelajaran">
                                    <?php foreach($pelajaran as $pel):?>
                                        <option value="<?= $pel;?>"><?= $pel;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kelas">Kelas :</label>
                                <select class="form-control" name="kelas" id="kelas">
                                    <?php foreach($kelas as $k):?>
                                        <option value="<?= $k;?>"><?= $k;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="bg-light text-dark" style="padding: 5px;">
                                <p>contoh penulisan soal</p>
                                <p class="bg-dark text-white" style="padding-left: 5px;">Siapakah Presiden pertama? ; Soekarno @ Soeharto @ B.J. Habibie @ Megawati ; 1</p>
                                <p>Pisahkan soal, pilihan dan jawaban yang benar dengan tanda ;</p>
                                <p>pisahkan setiap jawaban dengan tanda @</p>
                                <p>Format soal Diatas akan mesin kami ubah menjadi :</p>
                                <p class="bg-dark text-white" style="padding-left: 5px;">Siapakah Presiden pertama?<br>a. Soekarno <br>b. Soeharto <br>c. B.J. Habibie <br>d. Megawati</p>
                                <p>Dengan jawaban yang benar yang mesin kami simpan adalah 1(a)</p>
                            </div> 
                            <div id="soal">
                            </div>
                            <p class="btn btn-success" onclick="tambahSoal()"><i class="fas fa-plus"></i> Tambah Soal</p>
                            <br><br>
                            <button class="btn btn-primary" name="submit" type="submit"><i class="fas fa-save"></i> Simpan</button>
                        </form>
                    </div>
                    <!-- End Of Content -->
                    <script type="text/javascript">
                        let nomor = 0;
                        function tambahSoal(){
                            nomor++;
                            let label = document.createElement('label');
                            label.setAttribute('for',`soal${nomor}`);
                            label.innerHTML = `Soal no ${nomor}`;

                            let input = document.createElement('textarea');
                            input.setAttribute('class','form-control');
                            input.setAttribute('id',`soal${nomor}`);
                            input.setAttribute('name',`soal${nomor}`);


                            let child = document.createElement('div');
                            child.setAttribute('class','form-group');
                            child.appendChild(label);
                            child.appendChild(input);


                            let soal = document.getElementById('soal');
                            soal.appendChild(child); 
                        }

                        
                    </script>
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