
<?php include_once('header.php');?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="data-page-title">
        Dashboard
        <!-- <small> description</small> -->
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content container-fluid">



      <div class="row">
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12">
              <!-- Widget: user widget style 1 -->
              <div class="box box-widget widget-user-2 vng-box-shadow">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-black">
                  <div class="widget-user-image">
                    <img class="img-circle student-data-image" src="../dashboard/dist/img/user7-128x128.jpg" alt="User Avatar">
                  </div>
                  <!-- /.widget-user-image -->
                  <h3 class="widget-user-username student-data-name">Student Name</h3>
                  <h5 class="widget-user-desc student-data-program"> - </h5>
                  <h6 class="widget-user-desc student-data-level"> - </h6>
                </div>
                <div class="box-footer no-padding">
                  <ul class="nav nav-stacked">
                    <li><a href="#">Email <span class="pull-right student-data-email"> - </span></a></li>
                    <li><a href="#">Phone <span class="pull-right student-data-phone"> - </span></a></li>
                    <li><a href="#">DOB <span class="pull-right student-data-dob"> - </span></a></li>
                    <li><a href="#">Enrolled on <span class="pull-right student-data-doj"> - </span></a></li>
                    <li><a href="#">Trainer <span class="pull-right student-data-trainer"> - </span></a></li>
                    <li><a href="#">Level <span class="pull-right student-data-level"> - </span></a></li>
                    <li><a href="#">Status <span class="pull-right student-data-grade badge bg-blue"> - </span></a></li>
                  </ul>
                </div>
              </div>
              <!-- /.widget-user -->
            </div>
            <!-- /.col -->


            <div class="col-md-12">
              <div class="box box-solid vng-box-shadow">
                <div class="box-header">
                  <i class="fa fa-bar-chart-o"></i>

                  <h3 class="box-title">Stats</h3>

                  <!-- <div class="box-tools pull-right">
                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div> -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-xs-6 col-md-6 text-center">
                      <input type="text" class="knob" value="100" data-thickness="0.1" data-width="90" data-height="90" data-fgColor="#00a65a" data-readonly="true">

                      <div class="knob-label">Admission</div>
                    </div>
                    <!-- ./col -->
                    <div class="col-xs-6 col-md-6 text-center">
                      <input type="text" class="knob" value="100" data-thickness="0.1" data-width="90" data-height="90" data-fgColor="#00a65a" data-readonly="true">

                      <div class="knob-label">Level 1</div>
                    </div>
                    <!-- ./col -->
                    <div class="col-xs-6 col-md-6 text-center">
                      <input type="text" class="knob" value="100" data-thickness="0.1" data-width="90" data-height="90" data-fgColor="#00a65a" data-readonly="true">

                      <div class="knob-label">Level 2</div>
                    </div>
                    <!-- ./col -->
                    <div class="col-xs-6 col-md-6 text-center">
                      <input type="text" class="knob" value="30" data-thickness="0.1" data-width="90" data-height="90" data-fgColor="#f56954" data-readonly="true">

                      <div class="knob-label">Level 3</div>
                    </div>
                    <!-- ./col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->

          </div>
            <!-- /.row -->

        </div>
            <!-- /.col -->


        <div class="col-md-8">
          <div class="box box-default vng-border-top vng-box-shadow">
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <div id="calendar"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->


      </div> <!-- /. row -->


      <!--Start of Tawk.to Script-->
      <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
          var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
          s1.async=true;
          s1.src='https://embed.tawk.to/5e24ad18daaca76c6fcecc46/default';
          s1.charset='UTF-8';
          s1.setAttribute('crossorigin','*');
          s0.parentNode.insertBefore(s1,s0);
        })();  </script>
      <!--End of Tawk.to Script-->

    </section>
    <!-- /.content -->



<?php include_once('footer.php'); ?>

