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
                              <h4 class="pull-left"><i class="fa fa-angle-right"></i> Pilih <?= $diagnosa ?></h4>
                              <a class="pull-right btn btn-warning" href="javascript:window.history.go(-1);"><i class="fa fa-chevron-left" aria-hidden="true"></i> Kembali</a>
                            </div>
                            <hr>

                            <form class="form-horizontal">


                              <?php foreach ($penyakit as $item): ?>

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

                                      <input type="radio" name="kd_penyakit" value="<?= $item['kd_penyakit'] ?>" id="penyakit">
                                      <b style="font-size:1.2em"><?= '('.$item['kd_penyakit'] .') - '. $item['jenis_penyakit'] ?></b>

                                    </div>


                              <?php endforeach; ?>
                            </div>

                            <a id="diagnosa" href="" class="btn btn-warning pull-right btn-block">Diagnosa</a>

                           </form>


                             <p style="text-align:center; margin-top:60px; color:blue">
                               Silahkan Pilih Penyakit Terlebih Dahulu Yang Menyerang Pada Hewan Ayam!
                             </p>

                             <div class="clearfix"></div>
                             <br><br>

                        </div>

                      </div><!-- /content-panel -->

                    </div><!-- /col-md-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
		</section><! --/wrapper -->
