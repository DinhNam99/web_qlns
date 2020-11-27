<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../bower_components/raphael/raphael.min.js"></script>
<script src="../bower_components/morris.js/morris.min.js"></script>
<!-- ChartJS -->
<script src="../bower_components/chart.js/Chart.js"></script>
<!-- Sparkline -->
<script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../bower_components/moment/min/moment.min.js"></script>
<script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script>
  $(function () {
    $('#example1').DataTable({
      responsive: true,
      "scrollX": true
    });
    $('#example3').DataTable({
      responsive: true,
      "columnDefs": [
        {"className": "text-center", "targets": "_all"}
      ],
    });
    $('#example4').DataTable({
      responsive: true,
      "columnDefs": [
        {"className": "text-center", "targets": "_all"}
      ],
    });
    $('#example2').DataTable({
      "columnDefs": [
        {"className": "text-center", "targets": "_all"}
      ],
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false
    })
    $('#example5').DataTable({
      "columnDefs": [
        {"className": "text-center", "targets": "_all"}
      ],
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : false
    });
    $('#example6').DataTable({
      responsive: true,
      "columnDefs": [
        {"className": "text-center", "targets": "_all"}
      ],
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : true
    });
  })
</script>
<script>
$(function(){
  /** add active class and stay opened when selected */
  var url = window.location;

  // for sidebar menu entirely but not cover treeview
  $('ul.sidebar-menu a').filter(function() {
     return this.href == url;
  }).parent().addClass('active');

  // for treeview
  $('ul.treeview-menu a').filter(function() {
     return this.href == url;
  }).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');
  
});
</script>
<script>
$(function(){
	//Date picker
  $('#datepicker_add').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  })
  $('#datepicker_edit').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  })
  $('#edatePId').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  })
  $('#datePId').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  })
  $('#edateR').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  })
  $('#dateR').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  })

  $('#ngayky').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  })
  $('#engayky').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  })
  $('#tungay').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  })
 $('#etungay').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  })
  $('#denngay').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  })
  $('#edenngay').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  })
});
</script>
