<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Invoice</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Invoice</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- ===================== ALERT AUTO CLOSE ============================== -->
                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                        <style type="text/css">
                            body {
                                padding: 5px;
                            }
                        </style>
                        <div role="alert">
                            <h5><?= $this->session->flashdata('pesan'); ?></a></strong></h5>
                        </div>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
                        <script type="text/javascript">
                            window.setTimeout(function() {
                                $(".alert").fadeTo(100, 0).slideUp(500, function() {
                                    $(this).remove();
                                });
                            }, 5000);
                        </script>
                        <!-- END -->

                        <div class="col-12">
                            <div class="callout callout-info">
                                <h5 style="color: red;"><i class="fas fa-info"></i> Note:</h5>
                                Jika sudah melakukan pembayaran silahkan hubungin admin <a href="https://api.whatsapp.com/send?phone=+6282386572800">ADMIN</a>
                            </div>


                            <!-- Main content -->
                            <div class="invoice p-3 mb-3">
                                <!-- title row -->
                                <div class="row">
                                    <div class="col-12">
                                        <h4>
                                            <i class="fas fa-globe"></i> Dadi Resik.
                                            <small class="float-right">Date: <span id="tanggal"></span></small>
                                            <script>
                                                var dt = new Date();
                                                document.getElementById("tanggal").innerHTML = dt.toLocaleDateString();
                                            </script>
                                        </h4>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- info row -->
                                <div class="row invoice-info">
                                    <div class="col-sm-4 invoice-col">
                                        From
                                        <address>
                                            <strong>Dadi Resik</strong><br>
                                            795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107<br>
                                            Phone: (804) 123-5432<br>
                                            Email: info@almasaeedstudio.com
                                        </address>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 invoice-col">
                                        To
                                        <address>
                                            <strong><?= $user['nama']; ?></strong><br>
                                            <?= $user['alamat']; ?><br>
                                            Phone: <?= $user['hp']; ?><br>
                                            Email: <?= $user['email']; ?>
                                        </address>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 invoice-col">
                                        <div class="card">
                                            <p class="lead">Payment Methods:</p>
                                            <div class="card-header p-2">
                                                <ul class="nav nav-pills">
                                                    <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">BRI</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">BCA</a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="tab-content">
                                                    <!-- ======== BRI ======= -->
                                                    <div class="active tab-pane" id="timeline">
                                                        <div>
                                                            <img style="width: 100px; height:50px;" src="<?= base_url(); ?>/assets/user/dist/img/credit/BRI.jfif" alt="visa">
                                                            <table class="table">
                                                                <tr>
                                                                    <th>No.Rekening</th>
                                                                    <th>1892033033</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Atas Nama</th>
                                                                    <th>Jainem Joko</th>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!-- END -->
                                                    <!-- ===== BCA ==== -->
                                                    <div class="tab-pane" id="settings">
                                                        <img style="width: 100px; height:50px;" src="<?= base_url(); ?>/assets/user/dist/img/credit/bca1.jfif" alt="visa">
                                                        <table class="table">
                                                            <tr>
                                                                <th>No.Rekening</th>
                                                                <td>1892033033</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Atas Nama</th>
                                                                <td>Jainem Joko</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.tab-pane -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header p-2">
                                            <ul class="nav nav-pills">
                                                <li class="nav-item"><a class="nav-link active" href="#confirm" data-toggle="tab">Terkonfirmasi</a></li>
                                                <li class="nav-item"><a class="nav-link" href="#pending" data-toggle="tab">Belum Terkonfimasi</a></li>
                                                <li class="nav-item"><a class="nav-link" href="#cancel" data-toggle="tab">Di Batalkan</a></li>
                                            </ul>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- NOTE -->
                                        <div class="card-body">
                                            <div class="tab-content">

                                                <!-- END NOTE -->
                                                <!-- RESET PASSWORD -->
                                                <div class="active tab-pane" id="confirm">
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-12 table-responsive">
                                                                <table class="table table-striped table-bordered" id="example">
                                                                    <form action="<?= base_url('formpesan/checkout') ?>" method="POST">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>No</th>
                                                                                <th>ID Order</th>
                                                                                <th>Nama Barang</th>
                                                                                <th>Tanggal Pemesanan</th>
                                                                                <th>Jam Pemesanan</th>
                                                                                <th>Harga</th>
                                                                                <th>Status</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php
                                                                            $pemesanan = $this->db->get_where('pemesanan', ['email' => $this->session->userdata('email')])->result_array();
                                                                            $no = 0;
                                                                            foreach ($pemesanan as $p) :
                                                                                if ($p['status'] == 1) :
                                                                                    $no++;
                                                                            ?>
                                                                                    <tr>
                                                                                        <td><?= $no ?></td>
                                                                                        <td> <?= $p['id_pemesanan'] ?></td>
                                                                                        <td> <?= $p['nama_brg'] ?></td>
                                                                                        <td> <?= $p['tanggal']; ?></td>
                                                                                        <td> <?= $p['waktu']; ?></td>
                                                                                        <td> <?= $p['harga'] ?></td>
                                                                                        <?php if ($p['status'] == 1) : ?>
                                                                                            <td> <span class="badge bg-success">Confirm</span></td>
                                                                                        <?php else : ?>
                                                                                            <td> <span class="badge bg-warning text-dark">Pending</span></td>
                                                                                        <?php endif; ?>
                                                                                    </tr>
                                                                                <?php endif; ?>
                                                                            <?php endforeach; ?>
                                                                        </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane" id="pending">
                                                    <div class="row">
                                                        <div class="col-12 table-responsive">
                                                            <table class="table table-striped">
                                                                <form action="<?= base_url('formpesan/checkout') ?>" method="POST">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>No</th>
                                                                            <th>ID Order</th>
                                                                            <th>Nama Barang</th>
                                                                            <th>Tanggal Pemesanan</th>
                                                                            <th>Jam Pemesanan</th>
                                                                            <th>Harga</th>
                                                                            <th>Status</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        $pemesanan = $this->db->get_where('pemesanan', ['email' => $this->session->userdata('email')])->result_array();
                                                                        $no = 0;
                                                                        foreach ($pemesanan as $p) :
                                                                            if ($p['status'] == 0) :
                                                                                $no++;
                                                                        ?>
                                                                                <tr>
                                                                                    <td><?= $no ?></td>
                                                                                    <td> <?= $p['id_pemesanan'] ?></td>
                                                                                    <td> <?= $p['nama_brg'] ?></td>
                                                                                    <td> <?= $p['tanggal']; ?></td>
                                                                                    <td> <?= $p['waktu']; ?></td>
                                                                                    <td> <?= $p['harga'] ?></td>
                                                                                    <?php if ($p['status'] == 1) : ?>
                                                                                        <td> <span class="badge bg-success">Confirm</span></td>
                                                                                    <?php else : ?>
                                                                                        <td> <span class="badge bg-warning text-dark">Pending</span></td>
                                                                                    <?php endif; ?>
                                                                                </tr>
                                                                            <?php endif; ?>
                                                                        <?php endforeach; ?>
                                                                    </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="tab-pane" id="cancel">
                                                    <div class="row">
                                                        <div class="col-12 table-responsive">
                                                            <table class="table table-striped">
                                                                <form action="<?= base_url('formpesan/checkout') ?>" method="POST">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>No</th>
                                                                            <th>ID Order</th>
                                                                            <th>Nama Barang</th>
                                                                            <th>Tanggal Pemesanan</th>
                                                                            <th>Jam Pemesanan</th>
                                                                            <th>Harga</th>
                                                                            <th>Status</th>
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <?php
                                                                        $pemesanan = $this->db->get_where('pemesanan', ['email' => $this->session->userdata('email')])->result_array();
                                                                        $no = 0;
                                                                        foreach ($pemesanan as $p) :
                                                                            if ($p['status'] == 2) :
                                                                                $no++;
                                                                        ?>
                                                                                <tr>
                                                                                    <td><?= $no ?></td>
                                                                                    <td> <?= $p['id_pemesanan'] ?></td>
                                                                                    <td> <?= $p['nama_brg'] ?></td>
                                                                                    <td> <?= $p['tanggal']; ?></td>
                                                                                    <td> <?= $p['waktu']; ?></td>
                                                                                    <td> <?= $p['harga'] ?></td>

                                                                                    <td> <span class="badge bg-danger text-light">Di Batalkan</span></td>

                                                                                </tr>
                                                                            <?php endif; ?>
                                                                        <?php endforeach; ?>
                                                                    </tbody>

                                                            </table>
                                                        </div>


                                                        <!-- /.col -->
                                                    </div>
                                                </div>




                                            </div>


                                        </div>
                                        <!-- /.tab-pane -->
                                    </div>
                                    <!-- /.tab-content -->
                                </div><!-- /.card-body -->




                                <!-- this row will not appear when printing -->
                                <div class="row no-print">
                                    <div class="col-12">


                                        </form>
                                        <!--<a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-success float-right"><i class="fas fa-print"></i> Print</a>-->
                                    </div>
                                </div>
                            </div>
                            <!-- /.invoice -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
    </div>
</body>