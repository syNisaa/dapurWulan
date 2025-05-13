<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="#">
            <span class=""><img src="assets/img/logo.png" alt="Logo img" style="width: 100px;"></span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item {{ (request()->is('adminDashboard')) ? 'active' : '' }}">
                <a class="sidebar-link" href="/adminDashboard">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ (request()->is('adminProfile')) ? 'active' : '' }}">
                <a class="sidebar-link" href="/adminProfile">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profil</span>
                </a>
            </li>

            <li class="sidebar-header">
                General
            </li>

            <li class="sidebar-item {{ (request()->is('adminInformation1')) ? 'active' : '' }}">
                <a class="sidebar-link" href="/adminInformation1">
                    <i class="align-middle" data-feather="shopping-bag"></i> <span class="align-middle">Dapur Wulan</span>
                </a>
            </li>

            <li class="sidebar-item {{ (request()->is('adminGallery')) ? 'active' : '' }}">
                <a class="sidebar-link" href="/adminGallery">
                    <i class="align-middle" data-feather="camera"></i> <span class="align-middle">Galeri</span>
                </a>
            </li>

            <li class="sidebar-item {{ (request()->is('adminTestimonial')) ? 'active' : '' }}">
                <a class="sidebar-link" href="/adminTestimonial">
                    <i class="align-middle" data-feather="award"></i> <span class="align-middle">Testimoni</span>
                </a>
            </li>

            <li class="sidebar-header">
                Components
            </li>

            <li class="sidebar-item {{ (request()->is('adminCategory')) ? 'active' : '' }}">
                <a class="sidebar-link" href="/adminCategory">
                    <i class="align-middle" data-feather="codepen"></i> <span class="align-middle">Kategori Produk</span>
                </a>
            </li>

            <li class="sidebar-item {{ (request()->is('adminProduct')) ? 'active' : '' }}">
                <a class="sidebar-link" href="/adminProduct">
                    <i class="align-middle" data-feather="codesandbox"></i> <span class="align-middle">Produk</span>
                </a>
            </li>

            <li class="sidebar-header">
                Our Order
            </li>

            <li class="sidebar-item {{ (request()->is('adminOrders')) ? 'active' : '' }}">
                <a class="sidebar-link" href="/adminOrders">
                    <i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle">Pesanan</span>
                </a>
            </li>

            <li class="sidebar-item {{ (request()->is('adminHistory')) ? 'active' : '' }}">
                <a class="sidebar-link" href="/adminHistory">
                    <i class="align-middle" data-feather="archive"></i> <span class="align-middle">Riwayat Pesanan</span>
                </a>
            </li>

            <li class="sidebar-header">
                Dapur Wulan Project <br>
                
            </li>

    </div>
</nav>