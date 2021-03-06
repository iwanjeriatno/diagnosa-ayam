

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->


    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-9 main-chart">

                  <div class="row mtbox">
                    <div class="col-md-3 col-sm-3 box0">
                      <div class="box1">
                        <i class="fa fa-heart fa-5x"></i>
                        <h3><?= $total_penyakit ?></h3>
                      </div>
                      <p>Data Penyakit</p>
                    </div>
                    <div class="col-md-3 col-sm-3 box0">
                      <div class="box1">
                        <i class="fa fa-heart-o fa-5x"></i>
                        <h3><?= $total_gejala ?></h3>
                      </div>
                      <p>Daftar Gejala</p>
                    </div>
                    <div class="col-md-3 col-sm-3 box0">
                      <div class="box1">
                        <i class="fa fa-medkit fa-5x"></i>
                        <h3><?= $total_solusi ?></h3>
                      </div>
                      <p>Daftar Solusi</p>
                    </div>
                    <div class="col-md-3 col-sm-3 box0">
                      <div class="box1">
                        <i class="fa fa-users fa-5x"></i>
                        <h3>OK!</h3>
                      </div>
                      <p>Daftar Users</p>
                    </div>

                  </div><!-- /row mt -->

<div class="row mt">
  <a class="btn btn-primary btn-round btn-block btn-lg" type="button" href="<?= site_url('diagnosis/penyakit') ?>">Mulai Diagnosa!</a>
</div>

        <div class="row mt">
                    <!--CUSTOM CHART START -->
                    <div class="border-head">
                        <h3>VISITS</h3>
                    </div>
                    <div class="custom-bar-chart">
                        <ul class="y-axis">
                            <li><span>10.000</span></li>
                            <li><span>8.000</span></li>
                            <li><span>6.000</span></li>
                            <li><span>4.000</span></li>
                            <li><span>2.000</span></li>
                            <li><span>0</span></li>
                        </ul>
                        <div class="bar">
                            <div class="title">JAN</div>
                            <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">FEB</div>
                            <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">MAR</div>
                            <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">APR</div>
                            <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
                        </div>
                        <div class="bar">
                            <div class="title">MAY</div>
                            <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">JUN</div>
                            <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
                        </div>
                        <div class="bar">
                            <div class="title">JUL</div>
                            <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
                        </div>
                    </div>
                    <!--custom chart end-->
        </div><!-- /row -->

                </div><!-- /col-lg-9 END SECTION MIDDLE -->


    <!-- **********************************************************************************************************************************************************
    RIGHT SIDEBAR CONTENT
    *********************************************************************************************************************************************************** -->

                <div class="col-lg-3 ds">
                  <!--COMPLETED ACTIONS DONUTS CHART-->
          <h3>NOTIFICATIONS</h3>

                    <!-- First Action -->
                    <div class="desc">
                      <div class="thumb">
                        <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      </div>
                      <div class="details">
                        <p><muted>2 Minutes Ago</muted><br/>
                           <a href="#">James Brown</a> subscribed to your newsletter.<br/>
                        </p>
                      </div>
                    </div>
                    <!-- Second Action -->
                    <div class="desc">
                      <div class="thumb">
                        <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      </div>
                      <div class="details">
                        <p><muted>3 Hours Ago</muted><br/>
                           <a href="#">Diana Kennedy</a> purchased a year subscription.<br/>
                        </p>
                      </div>
                    </div>
                    <!-- Third Action -->
                    <div class="desc">
                      <div class="thumb">
                        <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      </div>
                      <div class="details">
                        <p><muted>7 Hours Ago</muted><br/>
                           <a href="#">Brandon Page</a> purchased a year subscription.<br/>
                        </p>
                      </div>
                    </div>
                    <!-- Fourth Action -->
                    <div class="desc">
                      <div class="thumb">
                        <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      </div>
                      <div class="details">
                        <p><muted>11 Hours Ago</muted><br/>
                           <a href="#">Mark Twain</a> commented your post.<br/>
                        </p>
                      </div>
                    </div>
                    <!-- Fifth Action -->
                    <div class="desc">
                      <div class="thumb">
                        <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      </div>
                      <div class="details">
                        <p><muted>18 Hours Ago</muted><br/>
                           <a href="#">Daniel Pratt</a> purchased a wallet in your store.<br/>
                        </p>
                      </div>
                    </div>

                     <!-- USERS ONLINE SECTION -->
          <h3>TEAM MEMBERS</h3>
                    <!-- First Member -->
                    <div class="desc">
                      <div class="thumb">
                        <img class="img-circle" src="assets/img/ui-divya.jpg" width="35px" height="35px" align="">
                      </div>
                      <div class="details">
                        <p><a href="#">DIVYA MANIAN</a><br/>
                           <muted>Available</muted>
                        </p>
                      </div>
                    </div>
                    <!-- Second Member -->
                    <div class="desc">
                      <div class="thumb">
                        <img class="img-circle" src="assets/img/ui-sherman.jpg" width="35px" height="35px" align="">
                      </div>
                      <div class="details">
                        <p><a href="#">DJ SHERMAN</a><br/>
                           <muted>I am Busy</muted>
                        </p>
                      </div>
                    </div>
                    <!-- Third Member -->
                    <div class="desc">
                      <div class="thumb">
                        <img class="img-circle" src="assets/img/ui-danro.jpg" width="35px" height="35px" align="">
                      </div>
                      <div class="details">
                        <p><a href="#">DAN ROGERS</a><br/>
                           <muted>Available</muted>
                        </p>
                      </div>
                    </div>
                    <!-- Fourth Member -->
                    <div class="desc">
                      <div class="thumb">
                        <img class="img-circle" src="assets/img/ui-zac.jpg" width="35px" height="35px" align="">
                      </div>
                      <div class="details">
                        <p><a href="#">Zac Sniders</a><br/>
                           <muted>Available</muted>
                        </p>
                      </div>
                    </div>
                    <!-- Fifth Member -->
                    <div class="desc">
                      <div class="thumb">
                        <img class="img-circle" src="assets/img/ui-sam.jpg" width="35px" height="35px" align="">
                      </div>
                      <div class="details">
                        <p><a href="#">Marcel Newman</a><br/>
                           <muted>Available</muted>
                        </p>
                      </div>
                    </div>

                      <!-- CALENDAR-->
                      <div id="calendar" class="mb">
                          <div class="panel green-panel no-margin">
                              <div class="panel-body">
                                  <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                      <div class="arrow"></div>
                                      <h3 class="popover-title" style="disadding: none;"></h3>
                                      <div id="date-popover-content" class="popover-content"></div>
                                  </div>
                                  <div id="my-calendar"></div>
                              </div>
                          </div>
                      </div><!-- / calendar -->

                </div><!-- /col-lg-3 -->
            </div><! --/row -->
        </section>
      </section>
      <!--main content end-->
