<ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li
                class="sidebar-item <?= ($active == 'dashboard') ? 'active' : '' ?>">
                <a href="dashboard" class='sidebar-link'>
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item <?= ($active == 'profile') ? 'active' : '' ?>">
                <a href="profile" class='sidebar-link'>
                    <i class="bi bi-person"></i>
                    <span>Profile Media Patner</span>
                </a>
            </li>
            <li class="sidebar-item <?= ($active == 'upload_berkas') ? 'active' : '' ?>">
                <a href="validasi_berkas" class='sidebar-link'>
                    <i class="bi bi-folder2-open"></i>
                    <span>Validasi Berkas</span>
                </a>
            </li>
            <li class="sidebar-item <?= ($active == 'perjanjian_kerja_sama') ? 'active' : '' ?>">
                <a href="perjanjian_kerja_sama" class='sidebar-link'>
                    <i class="bi bi-clipboard-check"></i>
                    <span>Perjanjian Kerja Sama</span>
                </a>
            </li>
            <li class="sidebar-item <?= ($active == 'daftar_berita') ? 'active' : '' ?>">
                <a href="daftar_berita" class='sidebar-link'>
                    <i class="bi bi-newspaper"></i>
                    <span>Daftar Berita</span>
                </a>
            </li>
            <li class="sidebar-item ">
                <a href="profile" class='sidebar-link'>
                    <i class="bi bi-box-arrow-left"></i>
                    <span>Log out</span>
                </a>
            </li>
        </ul>