                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


                    <div class="row">
                        <div class="col-lg-8">
                            <?php echo form_open_multipart('barang/tambahbarang'); ?>
                            <div class="form-group row">
                                <label for="nama_brg" class="col-sm-2 col-form-label">Nama Barang</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_brg" name="nama_brg">
                                    <?= form_error('nama_brg', '<small class="text-danger" pl-3>', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="keterangan" name="keterangan">
                                    <?= form_error('keterangan', '<small class="text-danger" pl-3>', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="kategori" name="kategori">
                                    <?= form_error('kategori', '<small class="text-danger" pl-3>', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="harga" name="harga">
                                    <?= form_error('harga', '<small class="text-danger" pl-3>', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">Gambar</div>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                                <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->