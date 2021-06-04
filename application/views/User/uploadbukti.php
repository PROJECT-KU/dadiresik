<body class="hold-transition sidebar-mini layout-fixed" onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Upload Bukti Bayar</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Upload</li>
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
                                <h5 style="color: red;"><i class="fas fa-info"></i> Note:</h5>
                                <strong> Silahkan Upload Bukti Pembayaran, Dengan Batas Waktu 3 Hari Dimulai Saat Mengklik Tombol Submit Payement!</strong>
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
                                <div class="form-group row">
                                    <div class="col-sm-2">Bukti Transfer</div>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="foto" name="foto">
                                                    <label class="custom-file-label" for="foto">Pilih Gambar</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- this row will not appear when printing -->
                                <div class="row no-print">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success float-right" id="tombol"><i class="far fa-credit-card"></i>
                                            Checkout
                                        </button>
                                        <script>
                                            const tombol = document.querySelector('#tombol');
                                            tombol.addEventListener('click', function() {
                                                Swal({
                                                    title: 'test',
                                                    text: 'hello',
                                                    type: 'success'
                                                })
                                            })
                                        </script>
                                        </form>
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