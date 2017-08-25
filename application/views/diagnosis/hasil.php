<!--main content start-->

		<!-- Modal -->
		<div class="modal fade" id="hasil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title" id="myModalLabel"> <span id="title"></span></h4>
		      </div>
		      <div class="modal-body">


				<div class="row">
	                  <div class="col-md-12">

                      <div class="content-panel">

                          <h4 style="text-align:center; padding:8px 0 30px; font-size:1.5em">Hasil Identifikasi Penyakit pada Ayam Anda berdasarkan <br> Gejala-Gejala yang Anda pilih : </h4>

													<?= form_open('diagnosis/hasil'); ?>

														<div class="row form-group">
																<label class="col-sm-8 col-sm-offset-2 control-label" style="font-size:1.5em">Nama Pengguna : <b><?= strtoupper($username->username)  ?></b></label>
														</div>

					                  <div class="row form-group">
					                      <div class="col-sm-8 col-sm-offset-2">
																		<?php
																			$pengguna = array(
																				'name'  => 'id_user',
																				'value' => $this->session->userdata('id_user'),
																				'class' => 'form-control',
																				'type'	=> 'hidden',
																			);

																			echo form_input($pengguna);
																		?>
					                      </div>
					                  </div>

					                  <div class="row form-group">
					                      <label class="col-sm-8 col-sm-offset-2 control-label" style="font-size:1.5em">Hasil Identifikasi : </label>
														</div>

														<div class="row form-group">
															<div class="col-sm-8 col-sm-offset-2">
																<?php
																$hasil = array(
																	'name'  => 'hasil_identifikasi',
																	'value' => 'Mengalami Penyakit '.$penyakit->jenis_penyakit.' - '.$penyakit->nama_latin,
																	'class' => 'form-control',
																);

																echo form_input($hasil);
																?>
															</div>
														</div>

					                  <div class="row form-group">
					                      <label class="col-sm-8 col-sm-offset-2 control-label" style="font-size:1.5em">Solusi Pengobatan : </label>
														</div>

														<div class="row form-group">
															<div class="col-sm-8 col-sm-offset-2">
																<?php
																$pengobatan = array(
																	'name'  => 'pengobatan',
																	'value' => $penyakit->solusi,
																	'class' => 'form-control',
																);

																echo form_textarea($pengobatan);
																?>
															</div>
														</div>

														<div class="row form-group">
															<div class="col-sm-10 col-sm-offset-2 pull-right">
																<?php
																		$submit = array(
																			'class' => 'btn btn-info',
																			'value' => 'Simpan Hasil Diagnosa',
																		);

																		echo form_submit($submit);
																 ?>
																 <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
															 </div>

											 	    </div>

				              		<?= form_close(); ?>

                      </div><!-- /content-panel -->

                    </div><!-- /col-md-12 -->
              </div><!-- /row -->

            </div>
          </div>
          </div>
          </div>
