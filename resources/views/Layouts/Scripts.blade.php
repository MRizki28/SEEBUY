<script src="{{ asset('static/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('static/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('static/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('static/js/ruang-admin.min.js') }}"></script>
<script src="{{ asset('static/vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('static/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('static/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('static/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('static/assets/js/jquery-3.1.1.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<!-- Page level custom scripts -->
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable(); // ID From dataTable 
        $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
</script>

{{-- delete data --}}
