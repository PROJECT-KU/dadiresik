<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard|Member</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/user/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/user/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/user/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/user/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/user/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/user/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/user/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/user/plugins/summernote/summernote-bs4.min.css">
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/sb/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.25/af-2.3.7/datatables.min.js"></script>
    <!--<script type="text/javascript" src="<?= base_url('assets/sb/'); ?> vendor/jquery/jquery.js"></script>-->
    <!--<script type="text/javascript" src="<?= base_url('assets/datatable/'); ?>datatable/js/jquery.dataTables.js"></script>-->
    <!--<script type="text/javascript" src="<?= base_url('assets/datatable/'); ?>datatable/js/jquery.dataTables.min.js defer"></script>-->
    <!--<link rel="stylesheet" type="text/css" href="<?= base_url('assets/datatable/'); ?>css/bootstrap.css">-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/datatable/'); ?>datatable/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/datatable/'); ?>datatable/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/datatable/'); ?>datatable/css/dataTables.bootstrap4.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js defer"></script>
</head>





<!-- dropdown daerah indo -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $.ajax({
            type: 'POST',
            url: "get_provinsi.php",
            cache: false,
            success: function(msg) {
                $("#provinsi").html(msg);
            }
        });

        $("#provinsi").change(function() {
            var provinsi = $("#provinsi").val();
            $.ajax({
                type: 'POST',
                url: "get_kabupaten.php",
                data: {
                    provinsi: provinsi
                },
                cache: false,
                success: function(msg) {
                    $("#kabupaten").html(msg);
                }
            });
        });

        $("#kabupaten").change(function() {
            var kabupaten = $("#kabupaten").val();
            $.ajax({
                type: 'POST',
                url: "get_kecamatan.php",
                data: {
                    kabupaten: kabupaten
                },
                cache: false,
                success: function(msg) {
                    $("#kecamatan").html(msg);
                }
            });
        });

        $("#kecamatan").change(function() {
            var kecamatan = $("#kecamatan").val();
            $.ajax({
                type: 'POST',
                url: "get_kelurahan.php",
                data: {
                    kecamatan: kecamatan
                },
                cache: false,
                success: function(msg) {
                    $("#kelurahan").html(msg);
                }
            });
        });
    });
</script>
<!-- end -->
<!-- ckeditor -->
<script src="<?= base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/sweat/package/dist/sweetalert2.all.min.js"></script>
<!-- timer coutdown -->
<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript">
</script>
<!-- jQuery -->
<script src="<?= base_url(); ?>assets/user/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url(); ?>assets/user/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>assets/user/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url(); ?>assets/user/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url(); ?>assets/user/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url(); ?>assets/user/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url(); ?>assets/user/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url(); ?>assets/user/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url(); ?>assets/user/plugins/moment/moment.min.js"></script>
<script src="<?= base_url(); ?>assets/user/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url(); ?>assets/user/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url(); ?>assets/user/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url(); ?>assets/user/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assets/user/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>assets/user/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url(); ?>assets/user/dist/js/pages/dashboard.js"></script>




<!-- data tabel search jquery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<!--<script src="<?= base_url('assets/sb/'); ?>vendor/jquery/jquery.min.js"></script>-->
<script src="<?= base_url('assets/sb/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#inbox').DataTable();
    });
</script>
<script src="<?= base_url('assets/sb/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?= base_url('assets/sb/'); ?>js/sb-admin-2.min.js"></script>
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "<?= base_url('admin/changeaccess'); ?>",
            type: 'post',
            data: {
                menuId: menuId,
                roleId: roleId
            },
            success: function() {
                document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;

            }
        });

    });
</script>
<!-- end -->