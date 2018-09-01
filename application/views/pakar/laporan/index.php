<!--main content start-->
<section id="main-content">
<section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> <?= $path ?></h3>
				<div class="row">
	                  <div class="col-md-12">

                      <div class="content-panel">
                        <div class="container">

                          <table class="table table-striped table-advance table-hover datatables" id="datatables">
                            <div class="container">
                              <h4 class="pull-left"><i class="fa fa-angle-right"></i> Data <?= $path ?></h4>

                            </div>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Kode Identifikasi</th>
                                  <th>Tanggal Identifikasi</th>
                                  <th>Hasil Identifikasi</th>
                                  <th>Pengobatan Identifikasi</th>
                                  <th>Nama Pengguna</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php
                                  $no = 1;
                                  foreach ($laporan as $item) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $item['id_diagnosa'] ?></td>
                                        <td><?= $item['tanggal_identifikasi'] ?></td>
                                        <td><?= $item['hasil_identifikasi'] ?></td>
                                        <td><?= $item['pengobatan'] ?></td>
                                        <td><?= $item['id_user'] ?> - <?= $item['username'] ?></td>
                                    </tr>
                                <?php } ?>
                              </tbody>
                          </table>
                          <?php include('delete.php') ?>
                        </div>


                      </div><!-- /content-panel -->

                    </div><!-- /col-md-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
		</section><! --/wrapper -->
