<!--main content start-->
<section id="main-content">
<section class="wrapper">

        <div class="col-sm-8 col-sm-offset-2">

          <div class="alert">
          	<h2>Hey! Read Me :D</h2>
          	<p>Silahkan lakukan Identifikasi Penyakit yang pada Ayam Anda dengan menjawab semua gejala yang terjadi!</p>

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


          <?php endif; ?>


		</section><! --/wrapper -->
</section><! --/wrapper -->
