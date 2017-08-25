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

									<form class="form-horizontal" action="<?= site_url('rule/create') ?>" method="post">

	                  <div class="row form-group">
	                      <label class="col-sm-2 col-sm-offset-2 control-label">Nama Gejala</label>
	                      <div class="col-sm-6">
													<select class="form-control" name="kd_gejala">
														<option value="_">Pilih Gejala</option>
															<?php foreach ($gejala as $item): ?>
																<option value="<?= $item['kd_gejala'] ?>">(<?= $item['kd_gejala'] ?>) - <?= $item['nama_gejala'] ?></option>
															<?php endforeach; ?>
													</select>
	                      </div>
	                  </div><br>

	                  <div class="row form-group">
	                      <label class="col-sm-10 col-sm-offset-2 control-label" style="font-size:1.5em">Kondisi Selanjutnya : </label>
										</div>

										<!-- jawaban iya -->
										<div class="row form-group">
	                      <label class="col-sm-2 col-sm-offset-2 control-label">Jika Ya</label>
	                      <div class="col-sm-6">
													<select class="form-control" name="jika_ya">
														<option value="_">Pilih Gejala atau Penyakit</option>
														<optgroup label="Gejala">
															<?php foreach ($gejala as $item): ?>
																<option value="<?= $item['kd_gejala'] ?>">(<?= $item['kd_gejala'] ?>) - <?= $item['nama_gejala'] ?></option>
															<?php endforeach; ?>
														</optgroup>
														<optgroup label="Penyakit">
															<?php foreach ($penyakit as $item): ?>
																<option value="<?= $item['kd_penyakit'] ?>">(<?= $item['kd_penyakit'] ?>) - <?= $item['jenis_penyakit'] ?></option>
															<?php endforeach; ?>
														</optgroup>
													</select>
	                      </div>
	                  </div>

										<!-- jawaban tidak -->
										<div class="row form-group">
	                      <label class="col-sm-2 col-sm-offset-2 control-label">Jika Tidak</label>
	                      <div class="col-sm-6">
													<select class="form-control" name="jika_tidak">
														<option value="_">Pilih Gejala atau Penyakit</option>
														<optgroup label="Gejala">
															<?php foreach ($gejala as $item): ?>
																<option value="<?= $item['kd_gejala'] ?>">(<?= $item['kd_gejala'] ?>) - <?= $item['nama_gejala'] ?></option>
															<?php endforeach; ?>
														</optgroup>
														<optgroup label="Penyakit">
															<?php foreach ($penyakit as $item): ?>
																<option value="<?= $item['kd_penyakit'] ?>">(<?= $item['kd_penyakit'] ?>) - <?= $item['jenis_penyakit'] ?></option>
															<?php endforeach; ?>
														</optgroup>
													</select>
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

									</form>


            </div><!-- /content-panel -->

          </div><!-- /col-md-12 -->

    </div><!-- /row -->
</section><! --/wrapper -->
</section><! --/wrapper -->
