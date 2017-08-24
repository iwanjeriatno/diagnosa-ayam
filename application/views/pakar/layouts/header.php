<?php include 'head.php' ?>

  <body>

    <section id="container" >

      <!--header start-->
      <header class="header black-bg">
        <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->

              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
              <!--logo start-->
              <a href="index.html" class="logo"><b>SISTEM PAKAR</b></a>
              <!--logo end-->

            <?php if($this->session->userdata('role') == 'pengguna') : ?>
            <div class="nav notify-row" id="top_menu">
              <ul class="nav pull-left top-menu">
                <li class="sub-menu">
                    <a class="active" href="<?= site_url('home') ?>">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <span>Home</span>
                    </a>
                </li>

                <li class="sub-menu" >
                    <a href="<?= site_url('diagnosis') ?>" >
                        <i class="fa fa-user-secret" aria-hidden="true"></i>
                        <span>Identifikasi</span>
                    </a>
                </li>

                <li class="sub-menu">
                  <a href="<?= site_url('users') ?>" >
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span>Profil User</span>
                  </a>
                </li>

              </ul>
            </div>

            <?php endif; ?>

              <div class="top-menu">
                <ul class="nav pull-right top-menu">
                      <li><a class="logout btn btn-primary" style="color:black" href="<?= site_url('logout') ?>">Logout</a></li>
                </ul>
              </div>
        </header>
            <!--header end--
