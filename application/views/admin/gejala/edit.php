<!--main content start-->
<section id="main-content">
<section class="wrapper">
	  <h3><i class="fa fa-angle-right"></i> <?= $path ?></h3>
    <div class="row">

          <div class="col-md-12">

            <div class="content-panel">

                  <div class="container">
                    <h4 class="pull-left"><i class="fa fa-angle-right"></i> Edit <?= $path ?></h4>
                    <a class="pull-right btn btn-warning" href="javascript:window.history.go(-1);"><i class="fa fa-chevron-left" aria-hidden="true"></i> Kembali</a>
                  </div>
                  <hr>

									<?= form_open('gejala/edit/'.$gejala_item['id']) ?>

                  <div class="row form-group">
                      <label class="col-sm-2 col-sm-offset-2 control-label">Kode Gejala</label>
                      <div class="col-sm-6">
													<?php
														$kd_gejala = array(
															'name'  => 'kd_gejala',
															'value' => $gejala_item['kd_gejala'],
															'class' => 'form-control',
														);

														echo form_input($kd_gejala);
													?>
                      </div>
											<?= form_error('kd_gejala') ?>
                  </div>
                  <div class="row form-group">
                      <label class="col-sm-2 col-sm-offset-2 control-label">Nama Gejala</label>
                      <div class="col-sm-6">
												<?php
													$nama_gejala = array(
														'name'  => 'nama_gejala',
														'class' => 'form-control',
														'value' => $gejala_item['nama_gejala'],
													);

													echo form_input($nama_gejala);
												?>
                      </div>
											<?= form_error('nama_gejala') ?>
                  </div>
									<div class="row form-group">
										<div class="col-sm-8 col-sm-offset-2 pull-right">
											<?php
													$submit = array(
														'class' => 'btn btn-info',
														'value' => 'Update',
													);

													echo form_submit($submit);
											 ?>
										 </div>

						 	    </div>

              		<?= form_close(); ?>

            </div><!-- /content-panel -->

          </div><!-- /col-md-12 -->

    </div><!-- /row -->
</section><! --/wrapper -->
</section><! --/wrapper -->
