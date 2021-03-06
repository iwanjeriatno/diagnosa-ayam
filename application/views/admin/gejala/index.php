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
                              <div class="btn-group pull-right">
                                <a type="button" class=" btn btn-warning btn-round" href="<?= site_url('gejala/create') ?>">
                                  <i class="fa fa-plus" aria-hidden="true"></i> &nbsp; Tambah Data
                                </a>
                                <a type="button" class="btn btn-success btn-round" href="<?= site_url('gejala/relasi-solusi') ?>">
                                  Gejala Ke Solusi &nbsp; <i class="fa fa-retweet" aria-hidden="true"></i>
                                </a>
                              </div>
                            </div>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th></th>
                                  <th>No</th>
                                  <th>Kode Gejala</th>
                                  <th>Nama Gejala</th>
                                  <th>Gejala Awal (Ya)</th>
                                  <th>Gejala Awal (Tidak)</th>
                                  <th>Aksi</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php
                                  $no = 1;
                                  foreach ($gejala as $item) { ?>
                                    <tr>
                                        <td></td>
                                        <td><?= $no++ ?></td>
                                        <td><?= $item['kd_gejala'] ?></td>
                                        <td><?= $item['nama_gejala'] ?></td>
                                        <td><?= $item['gejala_awal_ya'] ?></td>
                                        <td><?= $item['gejala_awal_tidak'] ?></td>
                                        <td>
                                            <a href="<?= site_url('gejala/'.$item['id'].'/edit') ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                            <button data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm"><i class="fa fa-trash-o "></i></button>
                                        </td>
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
