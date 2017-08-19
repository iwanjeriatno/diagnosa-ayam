<!-- js placed at the end of the document so the pages load faster -->
<script src="<?= base_url('assets/js/jquery.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery-1.8.3.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<!-- dist -->
<script src="<?= base_url('assets/dist/datatables/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/dist/datatables/js/dataTables.bootstrap.min.js') ?>"></script>
<link href="<?= base_url('assets/dist/datatables/css/dataTables.bootstrap.min.css') ?>" rel="stylesheet">
<!-- bootstrap-switch -->
<script src="<?= base_url('assets/js/jquery-ui-1.9.2.custom.min.js') ?>"></script>
<script src="<?= base_url('assets/dist/bootstrap-switch/bootstrap-switch.js') ?>"></script>

<script class="include" type="text/javascript" src="<?= base_url('assets/js/jquery.dcjqaccordion.2.7.js') ?>"></script>

<!--script for this page-->
<script src="<?= base_url('assets/js/sparkline-chart.js') ?>"></script>
<script src="<?= base_url('assets/js/script.js') ?>"></script>



</body>

<script type="text/javascript">
    $(document).ready(function(){
      $('.datatables').DataTable(10);
      $("[data-toggle='switch']").wrap('<div class="switch" />').parent().bootstrapSwitch();
    });
</script>

</html>
