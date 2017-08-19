<!--main content start-->
<section id="main-content">
<section class="wrapper">
	  <h3><i class="fa fa-angle-right"></i><?= $path ?></h3>
    <div class="row">

          <div class="col-md-12">

            <div class="content-panel">

                  <div class="container">
                    <h4 class="pull-left"><i class="fa fa-angle-right"></i> Relasi <?= $path ?> dan Solusi</h4>
                    <a class="pull-right btn btn-warning" href="javascript:window.history.go(-1);"><i class="fa fa-chevron-left" aria-hidden="true"></i> Kembali</a>
                  </div>
                  <hr>

									<?= form_open('gejala/create'); ?>

                  <div class="row form-group">
											<div class="col-sm-2 col-sm-offset-2 control-label">
												<?php
													echo form_label('Nama Gejala');
												 ?>
										  </div>

                      <div class="col-sm-5">
												<?php
													$nama_gejala = array(
														'name'     => 'nama_gejala',
														'class'    => 'form-control',
														'onChange' => 'MM_jumpMenu("parent",this,0)',
													);

													echo form_dropdown($nama_gejala, $option);
												?>
                      </div>
											<?php
													$submit = array(
														'class' => 'btn btn-info',
														'value' => 'Simpan',
													);

													echo form_submit($submit);
											 ?>

                  </div>

              		<?= form_close(); ?>

            </div><!-- /content-panel -->

          </div><!-- /col-md-12 -->

    </div><!-- /row -->
</section><! --/wrapper -->
</section><! --/wrapper -->
