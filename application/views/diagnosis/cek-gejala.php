*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
<section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Menu <?= $path ?></h3>
				<div class="row">
	                  <div class="col-md-12">

                      <div class="content-panel">
                        <div class="container">

                          <div class="row form-group">
                            <div class="container">
                              <h4 class="pull-left"><i class="fa fa-angle-right"></i> Cek <?= $diagnosa ?></h4>
                              <a class="pull-right btn btn-warning" href="javascript:window.history.go(-1);"><i class="fa fa-chevron-left" aria-hidden="true"></i> Kembali</a>
                            </div>
                            <hr>

                            <?= form_open('diagnosis/cek-gejala'); ?>

                              <?php $no = 1; foreach ($gejala as $item): ?>

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
                                          'name' => 'kd_gejala-'.$no,
                                          'value' => $item['kd_gejala'],
                                        );

                                        echo form_checkbox($data)

                                      ?> <b style="font-size:1.2em"><?= '('.$item['kd_gejala'] .') - '. $item['nama_gejala'] ?></b>

                                    </div>


                              <?php endforeach; ?>
                            </div>


                            <?php
                                $hidden = array(
                                  'name' => 'jmlh_gejala',
                                  'value'=> $no-1,
                                );

                                $submit = array(
                                  'class' => 'btn btn-warning pull-right btn-block',
                                  'value' => 'Proses',
                                );

                                echo form_hidden($hidden);
                                echo form_submit($submit);
                             ?>

                             <p style="text-align:center; margin-top:60px; color:blue">
                               	Silahkan Pilih Diagnosa Beberapa Gejala!
                             </p>

                             <div class="clearfix"></div>
                             <br><br>

                        </div>

                      </div><!-- /content-panel -->

                    </div><!-- /col-md-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
		</section><! --/wrapper -->
