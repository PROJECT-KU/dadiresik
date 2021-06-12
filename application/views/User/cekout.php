<body class="hold-transition sidebar-mini layout-fixed" onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>CheckOut</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">CheckOut</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="callout callout-info">
                                <h5><i class="fas fa-info"></i> Note:</h5>
                                This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
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
                                        <b>Order ID:</b> <strong><?php echo $invoice; ?></strong><br>
                                        <b>Order Date:</b> <span id="tanggalwaktu"></span><br>
                                        <script>
                                            var dt = new Date();
                                            document.getElementById("tanggalwaktu").innerHTML = dt.toLocaleDateString();
                                        </script>
                                        <b>Order Time:</b> <span id="time"></span><br>
                                        <script>
                                            var dt = new Date();
                                            document.getElementById("time").innerHTML = dt.toLocaleTimeString();
                                        </script>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <!-- Table row -->
                                <div class="row">
                                    <div class="col-12 table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Barang</th>
                                                    <th>ID Barang</th>
                                                    <th>Total</th>
                                            </thead>
                                            <?php
                                            $id_brg = $this->uri->segment(4);
                                            $pemesanan = $this->db->get_where('tb_barang', ['id_brg' => $id_brg])->row_array();
                                            $no = 0;
                                            $no++;
                                            ?>
                                            <tbody>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td colspan="3">: <?= $pemesanan['nama_brg'] ?></td>
                                                    <input type="hidden" name="nama_brg" value="<?= $pemesanan['nama_brg'] ?>">
                                                    <td colspan="3">: <?= $id_brg = random_string('alnum', 5) ?></td>
                                                    <input type="hidden" name="id_brg" value="<?php echo $id_brg ?>">
                                                    <td colspan="3">: <?= $pemesanan['harga'] ?></td>
                                                    <input type="hidden" name="harga" value="<?= $pemesanan['harga'] ?>">

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->



                                <!-- this row will not appear when printing -->
                                <div class="row no-print">
                                    <div class="col-12">
                                        <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                                        <button type="button" class="btn btn-success float-right" id="submitbutton"><i class="far fa-credit-card"></i>
                                            <a style="color: white;" href="<?= base_url('formpesan/checkout/'); ?>" </a> Submit Payment
                                        </button>
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