
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
            <h5 class="centered">Marcel Newman</h5>

            <li class="mt">
                <a class="active" href="<?= base_url('index.php/app') ?>">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="<?= base_url('index.php/app/penyakit') ?>" >
                    <i class="fa fa-desktop"></i>
                    <span>Data Penyakit</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="<?= base_url('index.php/app/gejala') ?>" >
                    <i class="fa fa-book"></i>
                    <span>Daftar Gejala</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="<?= base_url('index.php/app/solusi') ?>" >
                    <i class="fa fa-tasks"></i>
                    <span>Data Solusi</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="<?= base_url('index.php/app/laporan') ?>" >
                    <i class="fa fa-th"></i>
                    <span>Laporan</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="<?= base_url('index.php/app/users') ?>" >
                    <i class="fa fa-th"></i>
                    <span>Users</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="<?= base_url('index.php/app/settings') ?>" >
                    <i class=" fa fa-bar-chart-o"></i>
                    <span>Settings</span>
                </a>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
