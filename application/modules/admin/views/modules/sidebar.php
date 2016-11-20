
<?php 
    
    $admin_url = base_url('index.php/admin');

?>

<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="<?php echo base_url('assets/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>Admin</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- search form -->

    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>

        <li class="active treeview">
            <a href=" <?php echo $admin_url ?> ">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
            </a>
        </li>

        <li class="treeview">
            <a href=" <?php echo $admin_url ?> ">
                <i class="fa fa-info-circle"></i> <span>About</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li class="active"><a href="<?php echo $admin_url . '/banner' ?>"><i class="fa fa-circle-o"></i>History</a></li>
                <li><a href="<?php echo $admin_url . '/aktifitas' ?>"><i class="fa fa-circle-o"></i>Pengurus</a></li>
                <li><a href="<?php echo $admin_url . '/aktifitas' ?>"><i class="fa fa-circle-o"></i>Korda Komsat</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href=" <?php echo $admin_url ?> ">
                <i class="fa fa-pencil-square"></i> <span>Jurnal</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li class="active"><a href="<?php echo $admin_url . '/banner' ?>"><i class="fa fa-circle-o"></i> Kategori Jurnal</a></li>
                <li><a href="<?php echo $admin_url . '/aktifitas' ?>"><i class="fa fa-circle-o"></i> Konten Jurnal </a></li>
            </ul>
        </li>
        
        
        <li class="treeview">
            <a href="#">
                <i class="fa fa-calendar-o"></i>
                <span>Panduan Studi</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?php echo $admin_url . '/socialculture' ?>"><i class="fa fa-circle-o"></i>Kuliah di Jepang</a></li>
                <li><a href="<?php echo $admin_url . '/education' ?>"><i class="fa fa-circle-o"></i> Beasiswa </a></li>
                
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-video-camera"></i>
                <span>Kesekretariatan</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?php echo $admin_url . '/album' ?>"><i class="fa fa-circle-o"></i> ADRT </a></li>
                <li><a href="<?php echo $admin_url . '/picture' ?>"><i class="fa fa-circle-o"></i> Kongres </a></li>
                <li><a href="<?php echo $admin_url . '/video' ?>"><i class="fa fa-circle-o"></i> Otsukaresama </a></li>
                <li><a href="<?php echo $admin_url . '/video' ?>"><i class="fa fa-circle-o"></i> Kalender Kegiatan </a></li>
            </ul>
        </li>

        <li>
            <a href="<?php echo $admin_url . '/news' ?>">
                <i class="fa fa-question-circle"></i> <span>FAQ</span>
            </a>
        </li>

        <li>
            <a href="<?php echo $admin_url . '/contact' ?>">
                <i class="fa fa-comments"></i> <span>Kontak</span>
            </a>
        </li>

        <li>
            <a href="<?php echo $admin_url . '/config' ?>">
                <i class="fa fa-cogs"></i> <span>Config</span>
            </a>
        </li>


        
    </ul>
    </section>
<!-- /.sidebar -->
</aside>