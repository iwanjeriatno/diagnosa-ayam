<!--main content start-->
<section id="main-content">
<section class="wrapper">

        <div class="col-sm-8 col-sm-offset-3">

          <div class="alert">
          	<h2>Hallo, <?= ucwords($this->session->userdata('username')) ?> !</h2>
          	<p>Silahkan lakukan Identifikasi Penyakit pada Ayam Anda dengan menjawab semua gejala yang terjadi!</p>

          </div>
          <?php if ($gejala): ?>


              <form id="pertanyaan">
                <div  style="text-align:center">
                  <b>(<?= $gejala->kd_gejala ?>)</b>
                  <h2>Apakah <?= $gejala->nama_gejala ?> ?</h2>
                </div>

                <ul>
                  <li>
                    <input type="radio" id="f-option" class="gejala" name="kode" value="<?= $gejala->jika_ya ?>">
                    <label for="f-option">Ya</label>

                    <div class="check"></div>
                  </li>

                  <li>
                    <input type="radio" id="s-option" class="gejala" name="kode" value="<?= $gejala->jika_tidak ?>">
                    <label for="s-option">Tidak</label>

                    <div class="check"><div class="inside"></div></div>
                  </li>

                </ul>
                <div class="clearfix"></div>
                  <div class="" style="margin-top:50px; text-align:center">
                    <a id="diagnosa" href="" type="submit" class="btn btn-theme btn-lg btn-block">Lanjut Diagnosa</a>
                </div>
              </form>


          <?php elseif ($penyakit): ?>


              <form id="pertanyaan" >
                <div  style="text-align:center">
                  <b>(<?= $penyakit->kd_penyakit ?>)</b>
                  <h2>Penyakit ayam Anda adalah <?= $penyakit->jenis_penyakit ?> ?</h2>
                </div>


                <div class="clearfix"></div>
                  <div class="" style="margin-top:50px; text-align:center">
                    <a id="solusi" type="button" data-target="#hasil" data-toggle="modal" class="btn btn-success btn-lg btn-block">Lihat Solusi</a>
                </div>
              </form>

              <?php include 'hasil.php' ?>

          <?php else : ?>

            <div class="col-lg-12 col-md-12 col-sm-12 mb">
							<div class="twitter-panel pn">
								<i class="fa fa-close fa-4x"></i>
								<h3>Diagnosa Penyakit tidak bisa diketahui, <br> Silahkan melakukan diagnosa Kembali!</h3>
								<a class="btn btn-primary btn-lg" href="<?= site_url('diagnosis') ?>">Diagnosa Lagi!</a>
							</div>
						</div>

          <?php endif; ?>


		</section><! --/wrapper -->
</section><! --/wrapper -->
