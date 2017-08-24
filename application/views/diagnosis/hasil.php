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

                          <h4 style="text-align:center; padding:10px 0 30px; font-size:1.5em">Hasil Identifikasi Penyakit pada Ayam Anda berdasarkan <br> Gejala-Gejala yang Anda pilih : </h4>

                          <table class="table table-responsive" style="font-size: 2em">

                            <tr>
                              <td></td>
                              <td></td>
                              <td>Nama Pengguna</td>
                              <td><?= ucwords($this->session->userdata('username')) ?></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td colspan="6">
                                <hr>
                              </td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td>Hasil Diagnosa </td>
                              <td>Mengalami<b> Penyakit <?= $penyakit->jenis_penyakit  ?> <br> (<?= $penyakit->nama_latin  ?>) </b></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td colspan="6">
                                <hr>
                              </td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td>Solusi Pengobatan</td>
                              <td><?= $penyakit->solusi  ?></td>
                              <td></td>
                              <td></td>
                            </tr>
                          </table>
                      </div><!-- /content-panel -->

                    </div><!-- /col-md-12 -->
              </div><!-- /row -->

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
              <a id="cetak" type="button" class="btn btn-info" href="">Simpan Hasil Diagnosa</a>
            </div>
          </div>
          </div>
          </div>
