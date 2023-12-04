<ul class="menu">
    <li class="sidebar-title">Menu</li>
    <li class="sidebar-item <?= ($active == 'dashboard') ? 'active' : '' ?>">
        <a href="<?= base_url('dashboard') ?>" class='sidebar-link'>
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="sidebar-item <?= ($active == 'profile_media') ? 'active' : '' ?>">
        <a href="<?= base_url('profile_media') ?>" class='sidebar-link'>
            <i class="bi bi-person"></i>
            <span>Profile</span>
        </a>
    </li>
    <li class="sidebar-item <?= ($active == 'upload_berkas') ? 'active' : '' ?>">
        <a href="<?= base_url('upload_berkas') ?>" class='sidebar-link'>
            <i class="bi bi-folder2-open"></i>
            <span>Upload Berkas</span>
        </a>
    </li>
    <li class="sidebar-item <?= ($active == 'pengajuan_kerja_sama') ? 'active' : '' ?>">
        <a href="<?= base_url('pengajuan_kerja_sama') ?>" class='sidebar-link'>
            <i class="bi bi-clipboard-check"></i>
            <span>Pengajuan Kerjasama</span>
        </a>
    </li>
    <li class="sidebar-item  <?= ($active == 'daftar_berita') ? 'active' : '' ?>">
        <a href="<?= base_url('daftar_berita') ?>" class='sidebar-link'>
            <i class="bi bi-newspaper"></i>
            <span>Daftar Berita</span>
        </a>
    </li>
    <li class="sidebar-item ">
        <a href="auth/logout" class='sidebar-link'>
            <i class="bi bi-box-arrow-left"></i>
            <span>Log out</span>
        </a>
    </li>
</ul>
