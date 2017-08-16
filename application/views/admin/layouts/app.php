<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Sistem Pakar &mdash; <?= $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url('assets/font-awesome/css/font-awesome.css') ?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/js/gritter/css/jquery.gritter.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/lineicons/style.css') ?>">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/style-responsive.css') ?>" rel="stylesheet">

    <script src="<?= base_url('assets/js/chart-master/Chart.js') ?>"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <section id="container" >

      <!--header start-->
      <header class="header black-bg">
        <?php echo $header; ?>
      </header>
      <!--header end-->

      <!--sidebar start-->
      <aside>
        <?php echo $sidebar; ?>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
        <?php echo $content; ?>
      </section>
      <!--main content end-->

      <!--footer start-->
      <footer class="site-footer navbar navbar-fixed-bottom">
        <?php echo $footer; ?>
      </footer>

      <!--footer end-->
    </section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="<?= base_url('assets/js/jquery.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery-1.8.3.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script class="include" type="text/javascript" src="<?= base_url('assets/js/jquery.dcjqaccordion.2.7.js') ?>"></script>



<!--script for this page-->
<script src="<?= base_url('assets/js/sparkline-chart.js') ?>"></script>



</body>
</html>
