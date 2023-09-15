</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
<footer class="main-footer">
  <?php /*
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
    */ ?>
</footer>

</div>
<!-- ./wrapper -->




<div class="modal modal-danger fade" id="modal-danger">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <p> Something went wrong. Contact admin. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-outline proceed-delete" >Proceed</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->



<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo $site_root; ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo $site_root; ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo $site_root; ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $site_root; ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="<?php echo $site_root; ?>plugins/notify/bootstrap-notify.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $site_root; ?>dist/js/adminlte.min.js"></script>


<!-- fullCalendar -->
<script src="<?php echo $site_root; ?>bower_components/moment/moment.js"></script>
<script src="<?php echo $site_root; ?>bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<!-- jQuery Knob -->
<script src="<?php echo $site_root; ?>bower_components/jquery-knob/js/jquery.knob.js"></script>

<script src="<?php echo $site_root; ?>dist/js/menu.js"></script>

<!-- <script src="<?php echo $site_root; ?>dist/js/custom.js"></script>
<script src="<?php echo $site_root; ?>dist/js/main.js"></script> -->

<script>
</script>


<script>
  $(function() {
    /* jQueryKnob */

    $(".knob").knob({
      /*change : function (value) {
       //console.log("change : " + value);
       },
       release : function (value) {
       console.log("release : " + value);
       },
       cancel : function () {
       console.log("cancel : " + this.value);
       },*/
      draw: function() {

        // "tron" case
        if (this.$.data('skin') == 'tron') {

          var a = this.angle(this.cv) // Angle
            ,
            sa = this.startAngle // Previous start angle
            ,
            sat = this.startAngle // Start angle
            ,
            ea // Previous end angle
            , eat = sat + a // End angle
            ,
            r = true;

          this.g.lineWidth = this.lineWidth;

          this.o.cursor &&
            (sat = eat - 0.3) &&
            (eat = eat + 0.3);

          if (this.o.displayPrevious) {
            ea = this.startAngle + this.angle(this.value);
            this.o.cursor &&
              (sa = ea - 0.3) &&
              (ea = ea + 0.3);
            this.g.beginPath();
            this.g.strokeStyle = this.previousColor;
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
            this.g.stroke();
          }

          this.g.beginPath();
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
          this.g.stroke();

          this.g.lineWidth = 2;
          this.g.beginPath();
          this.g.strokeStyle = this.o.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
          this.g.stroke();

          return false;
        }
      }
    });
    /* END JQUERY KNOB */

  });





  // Logout

  $('#logoutButton').click(function(e) {
    e.preventDefault();

    $.ajax({
        url: 'prg/logout.php',
        method: 'GET',
        dataType: 'json'
      })
      .done(function(res) {
        let data = JSON.parse(res);
        console.log(data);
      })
      .fail(function(err) {
        console.log(err);
      })
      .always(function() {
        window.location = 'login.php';
      });

  });
</script>

</body>

</html>