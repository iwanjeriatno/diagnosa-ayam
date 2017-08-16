<section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Data Gejala</h3>
				<div class="row">

	                  <div class="col-md-12">

                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover ">
                            <div class="container">
                              <h4 class="pull-left"><i class="fa fa-angle-right"></i> Advanced Table</h4>
                              <a class="pull-right btn btn-warning" href="<?= base_url('index.php/app/login') ?>">Tambah Data</a>
                            </div>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th></th>
                                  <th><i class="fa fa-bullhorn"></i> Kode Gejala</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Nama Gejala</th>
                                  <th><i class=" fa fa-edit"></i> Aksi</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($gejala as $item) { ?>
                                    <tr>
                                        <td></td>
                                        <td><?= $item['kd_gejala'] ?></td>
                                        <td><?= $item['nama_gejala'] ?></td>
                                        <td>
                                            <button class="btn btn-success btn-sm"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>
                                <?php } ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->

                    </div><!-- /col-md-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
