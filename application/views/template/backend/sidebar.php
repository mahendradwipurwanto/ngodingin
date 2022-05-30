<!-- Side Nav START -->
<div class="side-nav vertical-menu nav-menu-light scrollable">
    <div class="nav-logo">
        <div class="w-100 logo">
            <img class="img-fluid" src="<?= base_url();?>assets/images/logo/logo.png" style="max-height: 70px;" alt="logo">
        </div>
        <div class="mobile-close">
            <i class="icon-arrow-left feather"></i>
        </div>
        </div>
        <ul class="nav-menu">
        <li class="nav-menu-item router-link-active">
            <a data-bs-toggle="modal" data-bs-target="#widget">
                <i class="icon-airplay feather"></i>
                <span class="nav-menu-item-title">Quick Start</span>
            </a>
        </li>
        <li class="nav-group-title">Main</li>
        <li class="nav-menu-item">
            <a href="<?= site_url('dashboard');?>">
                <i class="icon-grid feather"></i>
                <span class="nav-menu-item-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-menu-item">
            <a href="<?= site_url('statistik');?>">
                <i class="icon-bar-chart-2 feather"></i>
                <span class="nav-menu-item-title">Statistik</span>
            </a>
        </li>
        <li class="nav-group-title">Project</li>
        <li class="nav-menu-item">
            <a href="<?= site_url('kanban');?>">
                <i class="icon-layout feather"></i>
                <span class="nav-menu-item-title">Kanban</span>
            </a>
        </li>
        <li class="nav-menu-item">
            <a href="<?= site_url('project');?>">
                <i class="icon-package feather"></i>
                <span class="nav-menu-item-title">Kelola Project</span>
            </a>
        </li>
        <li class="nav-group-title">Utility</li>
        <li class="nav-menu-item">
            <a href="<?= site_url('pengaturan');?>">
                <i class="icon-settings feather"></i>
                <span class="nav-menu-item-title">Pengaturan</span>
            </a>
        </li>
    </ul>
</div>
<!-- Side Nav END -->

<!-- Content START -->
<div class="content">
    <div class="main">