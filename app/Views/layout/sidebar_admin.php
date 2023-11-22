<ul class="menu">
    <li class="sidebar-title">Menu</li>
    <li
        class="sidebar-item <?= ($active == 'dashboard') ? 'active' : '' ?>">
        <a href="<?= base_url('dashboard') ?>" class='sidebar-link'>
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="sidebar-item <?= ($active == 'list_profile_media') ? 'active' : '' ?>">
        <a href="<?= base_url('list_profile_media') ?>" class='sidebar-link'>
            <i class="bi bi-person"></i>
            <span>Profile Media Patner</span>
        </a>
    </li>
    <li class="sidebar-item <?= ($active == 'validasi_berkas') ? 'active' : '' ?>">
        <a href="<?= base_url('validasi_berkas') ?>" class='sidebar-link'>
            <i class="bi bi-folder2-open"></i>
            <span>Validasi Berkas</span>
        </a>
    </li>
    <li class="sidebar-item <?= ($active == 'perjanjian_kerja_sama') ? 'active' : '' ?>">
        <a href="<?= base_url('perjanjian_kerja_sama') ?>" class='sidebar-link'>
            <i class="bi bi-clipboard-check"></i>
            <span>Perjanjian Kerja Sama</span>
        </a>
    </li>
    <li class="sidebar-item <?= ($active == 'daftar_berita') ? 'active' : '' ?>">
        <a href="<?= base_url('daftar_berita') ?>" class='sidebar-link'>
            <i class="bi bi-newspaper"></i>
            <span>Daftar Berita</span>
        </a>
    </li>
    <li class="sidebar-item ">
        <a href="<?= base_url('auth/logout') ?>" class='sidebar-link'>
            <i class="bi bi-box-arrow-left"></i>
            <span>Log out</span>
        </a>
    </li>
</ul>