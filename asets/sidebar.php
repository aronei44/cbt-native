<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-laptop"></i>
                </div>
                <div class="sidebar-brand-text mx-3">CBT</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Profil
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="profil.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Lihat Profil</span></a>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Pengaturan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="edit.php"><i class="fas fa-edit"></i> Edit Profil</a>
                        <a class="collapse-item" href="password.php"><i class="fas fa-edit"></i> Ganti Password</a>
                        <a class="collapse-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>
                </div>
            </li>

            
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Kegiatan
            </div>

            
            <!-- Nav Item - Isi Kehadiran -->
            <li class="nav-item">
                <a class="nav-link" href="absensi.php">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Absensi</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tugas.php">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Tugas</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Admin
            </div>

            
            <!-- Nav Item - Isi Kehadiran -->
            <li class="nav-item">
                <a class="nav-link" href="tambahabsensi.php">
                    <i class="fas fa-fw fa-plus"></i>
                    <span>Tambah Hari Absen</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tambahtugas.php">
                    <i class="fas fa-fw fa-plus"></i>
                    <span>Tambah Tugas</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="lihattugas.php">
                    <i class="fas fa-fw fa-eye"></i>
                    <span>Lihat Tugas Terdahulu</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="lihatabsen.php">
                    <i class="fas fa-fw fa-eye"></i>
                    <span>Lihat Absensi</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="lihatnilai.php">
                    <i class="fas fa-fw fa-eye"></i>
                    <span>Lihat Nilai Siswa</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->