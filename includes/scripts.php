<!-- jQuery -->
<script src="../node_modules/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 4.6.0 -->
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../node_modules/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- daterangepicker -->
<script src="../node_modules/moment/min/moment.min.js"></script>
<script src="../node_modules/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../node_modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<!-- iCheck -->
<script src="../node_modules/icheck/icheck.min.js"></script>
<!-- AdminLTE App -->
<script src="../node_modules/admin-lte/dist/js/adminlte.min.js"></script>
<!-- Data Table Initialize -->
<!-- Fancybox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $(function () {
    $('#example1').DataTable()
  	var bookTable = $('#booklist').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false
    })

    $('#searchBox').on('keyup', function(){
    	bookTable.search(this.value).draw();
	});

  })
</script>