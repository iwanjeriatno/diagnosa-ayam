<!--main content start-->
<section id="main-content">
<section class="wrapper">
	  <h3><i class="fa fa-angle-right"></i><?= $path ?></h3>
    <div class="row">

          <div class="col-md-12">

            <div class="content-panel">

                  <div class="container">
                    <h4 class="pull-left"><i class="fa fa-angle-right"></i> Input <?= $path ?></h4>
                    <a class="pull-right btn btn-warning" href="javascript:window.history.go(-1);"><i class="fa fa-chevron-left" aria-hidden="true"></i> Kembali</a>
                  </div>
                  <hr>

									<?= form_open('solusi/create'); ?>

                  <div class="row form-group">
                      <label class="col-sm-2 col-sm-offset-2 control-label">Kode Solusi</label>
                      <div class="col-sm-6">
													<?php
														$kd_solusi = array(
															'name'  => 'kd_solusi',
															'value' => $kd_solusi,
															'class' => 'form-control',
														);

														echo form_input($kd_solusi);
													?>
                      </div>
                  </div>

                  <div class="row form-group">
                      <label class="col-sm-2 col-sm-offset-2 control-label">Solusi</label>
                      <div class="col-sm-6">
												<?php

													$options = array();
													foreach ($penyakit as $item){
															$options[$item['kd_penyakit']] = $item['jenis_penyakit'];
													}

													$kd_penyakit = array(
														'class'		=> 'form-control',
														'name'	  => 'kd_penyakit',
													);

													echo form_dropdown($kd_penyakit, $options);

												 ?>
                      </div>
                  </div>

                  <div class="row form-group">
                      <label class="col-sm-2 col-sm-offset-2 control-label">Solusi</label>
                      <div class="col-sm-6">
												<?php
													$solusi = array(
														'name'  => 'solusi',
														'class' => 'form-control',
														'placeholder' => 'Solusi',
													);

													echo form_textarea($solusi);
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
