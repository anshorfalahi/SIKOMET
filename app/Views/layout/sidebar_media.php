<ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li class="sidebar-item <?= ($active == 'dashboard') ? 'active' : '' ?>">
                <a href="dashboard" class='sidebar-link'>
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item <?= ($active == 'profile_media') ? 'active' : '' ?>">
                <a href="profile_media" class='sidebar-link'>
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li>
            <li class="sidebar-item <?= ($active == 'upload_berkas') ? 'active' : '' ?>">
                <a href="upload_berkas" class='sidebar-link'>
                    <i class="bi bi-folder2-open"></i>
                    <span>Upload Berkas</span>
                </a>
            </li>
            <li class="sidebar-item <?= ($active == 'perjanjian_kerja_sama') ? 'active' : '' ?>">
                <a href="perjanjian_kerja_sama" class='sidebar-link'>
                    <i class="bi bi-clipboard-check"></i>
                    <span>Perjanjian Kerja Sama</span>
                </a>
            </li>
            <li class="sidebar-item has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2"></i>
                        <span>Berita</span>
                    </a>
                <ul class="submenu">
                    <li class="sidebar-item <?= ($active == 'daftar_berita') ? 'active' : '' ?>">
                    <a href="daftar_berita" class='sidebar-link'>
                        <i class="bi bi-newspaper"></i>
                        <span>Daftar Berita</span>
                    </a>
                    <li class="sidebar-item <?= ($active == 'upload_berita') ? 'active' : '' ?>">
                        <a href="upload_berita" class='sidebar-link'>
                            <i class="bi bi-cloud-upload"></i>
                            <span>Upload Berita</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item ">
                <a href="auth/logout" class='sidebar-link'>
                    <i class="bi bi-box-arrow-left"></i>
                    <span>Log out</span>
                </a>
            </li>
        </ul>

<script>
    //make sidebar-item active if user is on that page

</script>