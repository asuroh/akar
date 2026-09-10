<!--begin::Footer-->
      <footer class="app-footer">
        <div class="float-end d-none d-sm-inline">Anything you want</div>
        <strong>
          Copyright &copy; 2026-2027&nbsp;
          <a href="https://adminlte.io" class="text-decoration-none">SMK Kawung 1 Surabaya</a>.
        </strong>
        All rights reserved.
      </footer>
      <!--end::Footer-->

    </div>

    <!-- SCRIPT WAJIB AGAR SIDEBAR & DROPDOWN BISA DIKLIK -->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    
    <!-- Pastikan path ke adminlte.js ini benar sesuai folder Anda -->
    <script src="../asset/dist/js/adminlte.js"></script>
    <!-- Script untuk scrollbar sidebar -->
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector('.sidebar-wrapper');
        if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: 'os-theme-light',
              autoHide: 'leave',
              clickScroll: true,
            },
          });
        }
      });
    </script>
  </body>
</html>