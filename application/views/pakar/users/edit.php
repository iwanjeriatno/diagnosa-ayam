<!--main content start-->
<section id="main-content">
<section class="wrapper">
	  <h3><i class="fa fa-angle-right"></i> <?= $path ?></h3>
    <div class="row">

          <div class="col-md-12">

            <div class="content-panel">

                  <div class="container">
                    <h4 class="pull-left"><i class="fa fa-angle-right"></i> Edit <?= $path ?></h4>
                    <a class="pull-right btn btn-warning" href="javascript:window.history.go(-1);"><i class="fa fa-chevron-left" aria-hidden="true"></i> Kembali</a>
                  </div>
                  <hr>

									<?= form_open('users/edit/'.$user_item['id_user']) ?>

									<div class="row form-group">
                      <label class="col-sm-2 col-sm-offset-2 control-label">Username</label>
                      <div class="col-sm-6">
												<?php
													$username = array(
														'name'        => 'username',
														'value'				=> $user_item['username'],
														'class'       => 'form-control',
														'placeholder' => 'Username',
													);

													echo form_input($username);
												?>
                      </div>
                  </div>

									<div class="row form-group">
										<div class="col-sm-8 col-sm-offset-2 pull-right">
											<?php
													$submit = array(
														'class' => 'btn btn-info',
														'value' => 'Simpan',
													);

													echo form_submit($submit);
											 ?>
										 </div>

						 	    </div>

              		<?= form_close(); ?>

            </div><!-- /content-panel -->

          </div><!-- /col-md-12 -->

    </div><!-- /row -->
</section><! --/wrapper -->
</section><! --/wrapper -->
