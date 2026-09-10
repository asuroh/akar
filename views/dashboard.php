<?php
    session_start();
    if (!isset($_SESSION['status']) || $_SESSION['status'] != "login"){
        header("location: login.php?pesan=belum_login");
        exit;
    }

    // 1. Panggil Header
    include '../layouts/header.php';
    
    // 2. Panggil Sidebar
    include '../layouts/sidebar.php';
?>

      <!--begin::App Main (BAGIAN INI WAJIB ADA AGAR GRID TIDAK ERROR)-->
      <main class="app-main">
        <div class="app-content-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <h1 class="mb-0 fs-3">Dashboard</h1>
              </div>
            </div>
          </div>
        </div>
        
        <div class="app-content">
          <div class="container-fluid">
            <!-- Konten Halaman Disini -->
            <div class="card">
                <div class="card-body">
                    Selamat datang di sistem Akar SMK Kawung 1 Surabaya.
                </div>
            </div>
          </div>
        </div>
      </main>
      <!--end::App Main-->

<?php
    // 3. Panggil Footer (PASTIKAN HANYA DITULIS 1 KALI DI BAWAH)
    include '../layouts/footer.php';
?>