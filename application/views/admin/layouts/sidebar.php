<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="<?= site_url() ?>"><img src="<?= site_url() ?>assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
            <h5 class="centered">Marcel Newman</h5>

            <li class="mt">
                <a class="active" href="<?= site_url() ?>">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="<?= site_url('penyakit') ?>" >
                    <i class="fa fa-heart"></i>
                    <span>Data Penyakit</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="<?= site_url('gejala') ?>" >
                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                    <span>Daftar Gejala</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="<?= site_url('solusi') ?>" >
                    <i class="fa fa-medkit" aria-hidden="true"></i>
                    <span>Data Solusi</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="<?= site_url('laporan') ?>" >
                    <i class="fa fa-file-o"></i>
                    <span>Laporan</span>
                </a>
            </li>

            <br>

            <li class="sub-menu">
                <a href="<?= site_url('users') ?>" >
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span>Users</span>
                </a>
            </li>

            <br><br>

            <li class="sub-menu">
                <a class="active" href="<?= site_url('settings') ?>" >
                    <i class="fa fa-cog" aria-hidden="true"></i>
                    <span>Settings</span>
                </a>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
  </aside>
  <!--sidebar end-->
