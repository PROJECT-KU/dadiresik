<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
</head>
<!--::review_part start::-->
<!--<section class="special_cource padding_top" style="margin-bottom: 50px;">
    <div class="container-fluit">
        <div class="row justify-content-center text-center">
            <?php foreach ($barang as $brg) : ?>
                <div class="card box" style="width: 16rem; margin:10px">
                    <img style="weight: 254px; height:254px" src="<?= base_url(); ?>/assets/img/gambarProduk/<?= $brg['gambar_barang']; ?>" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <span>
                            <h5 style="font-size: medium;" class="card-title btn btn-primary badge badge-danger mb-1"><?= $brg['nama_brg']; ?></h5>
                        </span>
                        <p style="weight:40px; height:40px" class="card-text mb-3"><?= $brg['keterangan']; ?></p>
                        <span class="badge badge-pill badge-warning ">Rp. <?= $brg['harga']; ?></span><br>
                    </div>
                    <a href="<?= base_url('Formpesan/index/' . $brg['id_brg']); ?>" style="font-size: medium;" type="submit" class="btn btn-sm btn-primary badge  badge-success">Pesan Sekarang</a>

                </div>

            <?php endforeach; ?>
        </div>
    </div>
</section>-->
<!--::blog_part end::-->



<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Daftar Product</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Daftar Product</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <div class="card card-primary">
                                <div class="card-header">
                                    <!--<h3 class="card-title">Daftar Product</h3>-->
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <?php foreach ($barang as $brg) : ?>
                                            <div class="col-sm-4">
                                                <div class="position-relative">
                                                    <img src="<?= base_url(); ?>/assets/img/gambarProduk/<?= $brg['gambar_barang']; ?>" alt="Photo 2" class="img-fluid">
                                                    <div class="ribbon-wrapper ribbon-xl ">
                                                        <div class="ribbon bg-warning text-lg">
                                                            Rp. <?= $brg['harga']; ?>
                                                        </div>
                                                    </div>
                                                    <center>
                                                        <a href="<?= base_url('pesan/product/' . $brg['id_brg']); ?>" style="font-size: medium;" type="submit" class="btn btn-sm btn-primary badge  badge-success">Pesan Sekarang</a>
                                                    </center>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
</body>