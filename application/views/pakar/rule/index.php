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
                              <a type="button" class=" btn btn-warning btn-round" href="<?= site_url('rule/create') ?>">
                                <i class="fa fa-plus" aria-hidden="true"></i> &nbsp; Tambah Basis Pengetahuan
                              </a>
                              <a type="button" class="btn btn-success btn-round" href="<?= site_url('rule/relasi-solusi') ?>">
                                Gejala Ke Solusi &nbsp; <i class="fa fa-retweet" aria-hidden="true"></i>
                              </a>
                            </div>
                          </div>
                  	  	  <hr>
                            <thead>
                            <tr>
                                <th></th>
                                <th>Nama Gejala</th>
                                <th>Jika Ya</th>
                                <th>Jika Tidak</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th></th>
                                <th>Nama Gejala</th>
                                <th>Jika Ya</th>
                                <th>Jika Tidak</th>
                                <th>Aksi</th>
                            </tr>
                          </tfoot>
                            <tbody>
                              <?php
                                foreach ($rule as $item) { ?>
                                  <tr>
                                      <td></td>
                                      <td>(<?= $item['kd_gejala'] ?>) - Apakah <?= $item['nama_gejala'] ?> ?</td>
                                      <td><?= $item['jika_ya'] ?></td>
                                      <td><?= $item['jika_tidak'] ?></td>
                                      <td>
                                          <a href="<?= site_url('gejala/'.$item['id'].'/edit') ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                          <button id="delete" value="<?= $item['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o "></i></button>
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
<section class="wrapper">
      				<div class="row">
                  <div class="col-md-12">

                    <div class="content-panel">
                      <div class="container">

                        <table class="table table-striped table-advance table-hover datatables" id="datatables">
                          <div class="container">
                            <h4 class="pull-left"><i class="fa fa-angle-right"></i> Data Rule yang tercipta : </h4>
                            <div class="btn-group pull-right">
                              <a type="button" class=" btn btn-warning btn-round" href="<?= site_url('rule/create') ?>">
                                <i class="fa fa-plus" aria-hidden="true"></i> &nbsp; Tambah Basis Pengetahuan
                              </a>
                              <a type="button" class="btn btn-success btn-round" href="<?= site_url('rule/relasi-solusi') ?>">
                                Gejala Ke Solusi &nbsp; <i class="fa fa-retweet" aria-hidden="true"></i>
                              </a>
                            </div>
                          </div>
                  	  	  <hr>
                            <thead>
                            <tr>
                                <th></th>
                                <th>Nama Gejala</th>
                                <th>Jika Ya</th>
                                <th>Jika Tidak</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th></th>
                                <th>Nama Gejala</th>
                                <th>Jika Ya</th>
                                <th>Jika Tidak</th>
                                <th>Aksi</th>
                            </tr>
                          </tfoot>
                            <tbody>
                              <?php
                                foreach ($rule1 as $item) { ?>
                                  <tr>
                                      <td></td>
                                      <td>(<?= $item['kd_gejala'] ?>) - Apakah <?= $item['nama_gejala'] ?> ?</td>
                                      <td><?= $item['jika_ya'] ?></td>
                                      <td><?= $item['jika_tidak'] ?></td>
                                      <td>
                                          <a href="<?= site_url('gejala/'.$item['id'].'/edit') ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                          <button id="delete" value="<?= $item['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o "></i></button>
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
