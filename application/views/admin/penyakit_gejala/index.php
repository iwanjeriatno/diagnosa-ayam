<!--main content start-->
<section id="main-content">
<section class="wrapper">
	  <h3><i class="fa fa-angle-right"></i> <?= $path ?></h3>
    <div class="row">

          <div class="col-md-12">

            <div class="content-panel">

                  <div class="container">
                    <h4 class="pull-left"><i class="fa fa-angle-right"></i> Relasi <?= $path ?></h4>
                    <a class="pull-right btn btn-warning" href="javascript:window.history.go(-1);"><i class="fa fa-chevron-left" aria-hidden="true"></i> Kembali</a>
                  </div>
                  <hr>

									<?= form_open('penyakit/create_penyakit_gejala'); ?>

                  <div class="row form-group">
											<div class="col-sm-2 col-sm-offset-2 control-label">
												<?php
													echo form_label('Jenis Penyakit');
												 ?>
										  </div>

                      <div class="col-sm-5">
												<?php
													$nama_penyakit = array(
														'name'  => 'kd_penyakit',
														'class' => 'form-control',
													);

													echo form_dropdown($nama_penyakit, $option);
												?>
                      </div>
                  </div>


                  <hr>

									<div class="container">

                  <div class="row form-group">

											<?php foreach ($gejala as $item): ?>
												<?php if ($total_gejala/2): ?>

														<div class="col-sm-6">

															<!-- <div class="switch switch-square has-switch"
																	 data-on-label="<i class=' fa fa-check'></i>"
																	 data-off-label="<i class='fa fa-times'></i>">
			                                <div class="switch-on switch-animate">
																				<input type="checkbox">
																				<span class="switch-left">
																					<i class=" fa fa-check"></i>
																				</span>
																				<label>&nbsp;</label><span class="switch-right">
																					<i class="fa fa-times"></i>
																				</span>
																			</div>
			                        </div>
															<h4>nama_gejala</h4> -->

															<?php

																$data = array(
																	'name' => 'kd_gejala[]',
																	'value'=> $item['kd_gejala'],
																);

																echo form_checkbox($data)

															?> <b style="font-size:1.2em"><?= '('.$item['kd_gejala'] .') - '. $item['nama_gejala'] ?></b>

														</div>

												<?php else: ?>

													<div class="col-sm-6">

														<!-- <div class="switch switch-square has-switch"
																 data-on-label="<i class=' fa fa-check'></i>"
																 data-off-label="<i class='fa fa-times'></i>">
																		<div class="switch-on switch-animate">
																			<input type="checkbox">
																			<span class="switch-left">
																				<i class=" fa fa-check"></i>
																			</span>
																			<label>&nbsp;</label><span class="switch-right">
																				<i class="fa fa-times"></i>
																			</span>
																		</div>
														</div>
														<h4>nama_gejala</h4> -->

													</div>

												<?php endif; ?>
											<?php endforeach; ?>


                  </div>

										<?php
												$submit = array(
													'class' => 'btn btn-info pull-right btn-block',
													'value' => 'Simpan',
												);

												echo form_submit($submit);
										 ?>

										 <div class="clearfix"></div>
										 <br><br>

								</div>

								<?= form_close(); ?>

								</div>

            </div><!-- /content-panel -->

          </div><!-- /col-md-12 -->

					<br/>

					<div class="row">

								<div class="col-md-12">

									<div class="content-panel">

												<div class="container">
												<div class="container">
													<h4 class="pull-left"><i class="fa fa-angle-right"></i> Daftar Relasi <?= $path ?></h4>
												</div>
												<hr>

												<table class="table table-striped table-advance table-hover datatables display" id="datatables">
														<thead>
														<tr>
																<th></th>
																<th>No</th>
																<th>Kode Penyakit</th>
																<th>Kode Gejala</th>
																<th>Aksi</th>
														</tr>
														</thead>
														<tfoot>
														<tr>
																<th></th>
																<th>No</th>
																<th>Kode Penyakit</th>
																<th>Kode Gejala</th>
																<th>Aksi</th>
														</tr>
													</tfoot>
														<tbody>
															<?php
																$no = 1;
																foreach ($penyakit_gejala as $item) { ?>
																	<tr>
																			<td></td>
																			<td><?= $no++ ?></td>
																			<td><?= '('.$item['kd_penyakit'] .') - '. $item['jenis_penyakit'] ?></td>
																			<td><?= '('.$item['kd_gejala'] .') - '. $item['nama_gejala'] ?></td>
																			<td>
																					<button data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm"><i class="fa fa-trash-o "></i></button>
																			</td>
																	</tr>
															<?php } ?>
														</tbody>
												</table>
												<?php include('delete.php') ?>

									</div>
									</div>

								</div>

					</div>

    </div><!-- /row -->

</section><! --/wrapper -->
</section><! --/wrapper -->
