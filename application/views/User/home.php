<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url('user') ?>">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- ===================== ALERT AUTO CLOSE ============================== -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <style type="text/css">
                body {
                    padding: 5px;
                }
            </style>
            <div class="alert alert-success" role="alert">
                <h5><i style="color: red; margin-right:5px;" class="fas fa-info"></i>Selamat Datang Member <strong><?= $user['nama']; ?></a></strong></h5>
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
            <!-- Main content -->

            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <!-- ========================== JUMLAH PRODUK ======================= -->
                        <?php
                        $query = $this->db->query("SELECT * FROM tb_barang");
                        $jml = $query->num_rows();
                        ?>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><?= number_format($jml); ?></h3>
                                    <p>Total Produk</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- END -->
                        <!-- ================ JUMLAH USER ============ -->
                        <?php
                        $query = $this->db->query("SELECT * FROM user");
                        $jml = $query->num_rows();
                        ?>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3> <?= number_format($jml); ?></h3>
                                    <p>Total User Terdaftar</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- END -->
                        <!-- ============================= TOTAL PENGUNJUNG 1 BULAN ======================== -->
                        <?php
                        $query = $this->db->query("SELECT * FROM tbl_pengunjung WHERE DATE_FORMAT(pengunjung_tanggal,'%m%y')=DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 MONTH),'%m%y')");
                        $jml = $query->num_rows();
                        ?>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3> <?php echo number_format($jml); ?></h3>
                                    <p>Total Pengunjung Bulan Ini</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- END -->
                        <!-- ============================== TOTAL PENGUNJUNG HARI INI ===================================== -->
                        <?php
                        $query = $this->db->query("SELECT * FROM tbl_pengunjung WHERE DATE_FORMAT(pengunjung_tanggal,'%m%y')=DATE_FORMAT(CURDATE(),'%m%y')");
                        $jml = $query->num_rows();
                        ?>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3><?php echo number_format($jml); ?></h3>
                                    <p>Total Pengunjung Hari Ini</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- END -->
                    </div>
                </div>
            </section>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#confirm" data-toggle="tab">Terkonfirmasi</a></li>
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
                                            <table class="table table-striped">
                                                <form action="<?= base_url('formpesan/checkout') ?>" method="POST">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>ID Order</th>
                                                            <th>Barang</th>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>