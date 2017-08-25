<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse"
      <?php if($this->session->userdata('role') == 'pengguna') : ?>
        style="
                width:35%;
                background-image: url(<?= base_url('assets/img/bg1.png') ?>);
                background-size: cover;
              ";
      <?php endif ?>
      >
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="<?= site_url() ?>"><img src="<?= base_url('assets/img/pengguna.png') ?>" class="img-circle" width="60"></a></p>
            <h5 class="centered"><?= ucwords($this->session->userdata('username')) ?></h5>

            <?php if($this->session->userdata('role') == 'pakar') : ?>
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
                  <a href="<?= site_url('rule') ?>" >
                      <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                      <span>Base Pengetahuan</span>
                  </a>
              </li>

              <li class="sub-menu">
                  <a href="<?= site_url('laporan') ?>" >
                      <i class="fa fa-file-o"></i>
                      <span>Laporan</span>
                  </a>
              </li>

              <br><br>

              <li class="sub-menu ">
                  <a href="<?= site_url('users') ?>" class="active">
                      <i class="fa fa-user" aria-hidden="true"></i>
                      <span>Data Pengguna</span>
                  </a>
              </li>

            <?php endif; ?>

            <br>

        </ul>
        <!-- sidebar menu end-->
    </div>
  </aside>
  <!--sidebar end-->
