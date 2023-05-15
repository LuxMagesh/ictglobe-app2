
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<script>
   $(document).ready(function(){
      var table = $('#datatables').DataTable({
        'processing': true,
        'serverSide': true,
        'ajax': "{{url('show_commands')}}",
        'columns': [
          {'data': 'command_line'},
        ],

      });

      $('.filter-input').keyup(function (){
          table.column( $(this).data('column'))
          .search( $(this).val())
          .draw();
      });

      $('.filter-select').change(function (){
          table.column( $(this).data('column'))
          .search( $(this).val())
          .draw();
      });
      
   });
</script>
<script>
   $(document).ready(function(){
  
  $(function () {
	$('#startDate').datepicker({
   format: 'dd/mm/yyyy' 
  });
  });
	
  
});
</script>

<script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>