<!--main content start-->
<section id="main-content">
<section class="wrapper">
	  <h3><i class="fa fa-angle-right"></i> <?= $path ?></h3>
    <div class="row">

          <div class="col-md-12">

            <div class="content-panel">

                  <div class="container">
                    <h4 class="pull-left"><i class="fa fa-angle-right"></i> Input <?= $path ?></h4>
                    <a class="pull-right btn btn-warning" href="javascript:window.history.go(-1);"><i class="fa fa-chevron-left" aria-hidden="true"></i> Kembali</a>
                  </div>
                  <hr>

									<?= form_open('penyakit/create'); ?>

                  <div class="row form-group">
                      <label class="col-sm-2 col-sm-offset-2 control-label">Kode Penyakit</label>
                      <div class="col-sm-6">
													<?php
														$kd_penyakit = array(
															'name'  => 'kd_penyakit',
															'value' => $kd_penyakit,
															'class' => 'form-control',
														);

														echo form_input($kd_penyakit);
													?>
                      </div>
                  </div>

                  <div class="row form-group">
                      <label class="col-sm-2 col-sm-offset-2 control-label">Jenis Penyakit</label>
                      <div class="col-sm-6">
												<?php
													$jenis_penyakit = array(
														'name'        => 'jenis_penyakit',
														'class'       => 'form-control',
														'placeholder' => 'Penyakit',
														'autofocus'   => 'autofocus',
													);

													echo form_input($jenis_penyakit);
												?>
                      </div>
                  </div>

                  <div class="row form-group">
                      <label class="col-sm-2 col-sm-offset-2 control-label">Nama Latin</label>
                      <div class="col-sm-6">
												<?php
													$nama_latin = array(
														'name'        => 'nama_latin',
														'class'       => 'form-control',
														'placeholder' => 'Nama Latin',
													);

													echo form_input($nama_latin);
												?>
                      </div>
                  </div>

                  <div class="row form-group">
                      <label class="col-sm-2 col-sm-offset-2 control-label">Keterangan</label>
                      <div class="col-sm-6">
												<?php
													$keterangan = array(
														'name'  => 'keterangan',
														'class' => 'form-control',
														'placeholder' => 'Keterangan Penyakit',
													);

													echo form_textarea($keterangan);
												?>
                      </div>
                  </div>

									<div class="row form-group">
										<div class="col-sm-8 col-sm-offset-2 pull-right">
											<?php
													$submit = array(
														'class' => 'btn btn-info',
														'value' => 'Simpan',
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
