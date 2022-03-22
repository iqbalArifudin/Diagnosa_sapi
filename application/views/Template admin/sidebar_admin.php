    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary
     sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center">
            <div class="sidebar-brand-icon">
                <img src="<?php echo base_url('assets/img/logo_a.png')?>" width="70%">

            </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a href="<?php echo base_url().'admin/home' ?>" class="nav-link">
                <span>Beranda</span></a>
        </li>
        <hr class="sidebar-divider">
        <li class="nav-item active">
            <a href="<?php echo base_url().'admin/surat' ?>" class="nav-link">
                <span>Berita</span></a>
        </li>

        </li>
        <hr class="sidebar-divider">
        <li class="nav-item active">
            <a href="<?php echo base_url().'admin/surat/suratMasuk' ?>" class="nav-link">
                <span>Penyakit</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>



    </ul>
    <!-- End of Sidebar -->