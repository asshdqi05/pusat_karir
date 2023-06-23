</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer fixed navbar-dark">
    <div class="float-right d-none d-sm-block">
        <b style="color: white">Version</b> 1.0.0
    </div>
    <strong style="color: white">Copyright &copy; <?= date('Y') ?> <b style="color: white">Pusat Karir Jayanusa</b>.</strong> <small style="color: white"> All rights
        reserved.</small>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- SweetAlert2 -->
<script src="<?php echo base_url('assets/') ?>plugins/sweetalert2/sweetalert2.min.js"></script>

<!-- jQuery -->
<script src="<?php echo base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?php echo base_url('assets/') ?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/') ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/') ?>dist/js/demo.js"></script>

<!-- bootstrap datepicker -->
<script src="<?php echo base_url('assets/') ?>plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script src="<?php echo base_url('assets/') ?>plugins/datatables/jquery.dataTables.js"></script>

<script src="<?php echo base_url('assets/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<script href="<?php echo base_url('assets/') ?>dist/js/moment.css"></script>

<script href="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/id.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });

    $('.custom-file-input').on('change', function() {
        let filename = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(filename);
    });

    $(function() {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
        });

        // $('.select2').select2()

        // //Initialize Select2 Elements
        // $('.select2bs4').select2({
        //     theme: 'bootstrap4'
        // })
    });


    // $('#datepicker').datepicker({
    //     autoclose: true,
    //     locale: 'id',
    //     changeMonth: true,
    //     changeYear: true,
    //     startDate: "dateToday",
    //     format: 'dd-mm-yyyy',
    //     minDate: new Date()
    // })
</script>

</body>

</html>