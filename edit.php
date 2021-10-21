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
                    <div class="container">
                      <div class="container bg-white">
                        <br>
                        <h1><i class="fas fa-edit"></i> Edit Profil</h1>
                        <br>
                        <form>
                          <div class="form-group">
                            <label for="nama">Nama :</label>
                            <input type="text" name="nama" id="nama" class="form-control" value="Muhamad Arwani Maulana">
                          </div>
                          <div class="form-group">
                            <label for='kelas'>Kelas :</label>
                            <select name="kelas" id="kelas" class="form-control">
                              <option>X - ATPH</option>
                              <option>XI - ATPH</option>
                              <option selected>XII - ATPH</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <p>Jenis Kelamin :</p>
                            <input type="radio" name="jenis" id="pria" value="L" checked>
                            <label for="pria">Laki - Laki</label>
                            <input type="radio" name="jenis" id="wanita" value="P">
                            <label for="wanita">Perempuan</label>
                          </div>
                          <div class="form-group">
                            <label for="nisn">NISN :</label>
                            <input type="text" name="nisn" id="nisn" class="form-control" value="9993431923">
                          </div>
                          <div class="form-group">
                            <label for="hp">No HP :</label>
                            <input type="text" name="hp" id="hp" class="form-control" value="081210693426">
                          </div>
                          <div class="form-group">
                            <label for="agama">Agama</label>
                            <select class="form-control" id="agama" name="agama">
                              <option>Budha</option>
                              <option>Hindu</option>
                              <option selected>Islam</option>
                              <option>Katolik</option>
                              <option>Konghuchu</option>
                              <option>Kristen</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="alamat">Alamat :</label>
                            <textarea class="form-control" id="alamat" name="alamat">Kp. Sirnagalih Rt 01/02 Megamendung Bogor</textarea>
                          </div><br>
                          <button class="btn btn-primary" type="submit" name="submit"><i class="fas fa-save"></i> Simpan</button>
                        </form>
                        <br>
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