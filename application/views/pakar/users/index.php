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
                              <div class="btn-group pull-right">
                                <a type="button" class=" btn btn-warning btn-round" href="<?= site_url('users/create') ?>">
                                  <i class="fa fa-plus" aria-hidden="true"></i> &nbsp; Tambah Pengguna
                                </a>
                              </div>
                            </div>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>No</th>
                                  <th>ID Pengguna</th>
                                  <th>Nama Pengguna</th>
                                  <th>Aksi</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php
                                  $no = 1;
                                  foreach ($users as $item) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $item['id_user'] ?></td>
                                        <td><?= ucfirst($item['username']) ?></td>
                                        <td>
                                            <a href="<?= site_url('users/'.$item['id_user'].'/edit') ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
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
