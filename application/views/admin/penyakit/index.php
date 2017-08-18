*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
<section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i><?= $path ?></h3>
				<div class="row">
	                  <div class="col-md-12">

                      <div class="content-panel">
                        <div class="container">

                          <table class="table table-striped table-advance table-hover datatables" id="datatables">
                            <div class="container">
                              <h4 class="pull-left"><i class="fa fa-angle-right"></i> Data <?= $path ?></h4>
                              <a class="pull-right btn btn-warning" href="<?= site_url('penyakit/create') ?>">Tambah Data</a>
                            </div>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Kode Penyakit</th>
                                  <th>Jenis Penyakit</th>
                                  <th>Keterangan</th>
                                  <th>Aksi</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php
                                  $no = 1;
                                  foreach ($penyakit as $item) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $item['kd_penyakit'] ?></td>
                                        <td><?= $item['jenis_penyakit'] ?></td>
                                        <td><?= $item['keterangan'] ?></td>
                                        <td>
                                            <a href="<?= site_url('penyakit/'.$item['id'].'/edit') ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                            <button data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm"><i class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>
                                <?php } ?>
                              </tbody>
                          </table>

                        </div>

                          <?php include('delete.php') ?>

                      </div><!-- /content-panel -->

                    </div><!-- /col-md-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
		</section><! --/wrapper -->
