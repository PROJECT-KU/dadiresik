                <!-- Begin Page Content -->

                <body class="hold-transition sidebar-mini layout-fixed" style="margin-bottom: 10px;;">
                    <div class="wrapper">
                        <div class="content-wrapper">
                            <section class="content-header">
                                <div class="container-fluid">
                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <h1>Barang</h1>
                                        </div>
                                        <div class="col-sm-6">
                                            <ol class="breadcrumb float-sm-right">
                                                <li class="breadcrumb-item"><a href="<?= base_url('admin/index') ?>">Home</a></li>
                                                <li class="breadcrumb-item active">Barang</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div><!-- /.container-fluid -->
                            </section>
                            <section class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg">
                                            <?php if (validation_errors()) :  ?>
                                                <div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div>
                                            <?php endif; ?>
                                            <?= $this->session->flashdata('pesan');  ?>


                                            <a href="<?= base_url('barang/tambahbarang') ?>" class="btn btn-primary" style="margin-bottom: 10px;">Tambah Barang</a>

                                            <table id="inbox" class="table table-hover mt-3">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Nama Barang</th>
                                                        <th scope="col">Keterangan</th>
                                                        <th scope="col">Kategori</th>
                                                        <th scope="col">Harga</th>
                                                        <th scope="col">Gambar</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; ?>
                                                    <?php foreach ($barang as $brg) : ?>
                                                        <tr>
                                                            <th scope="row"> <?= $i; ?></th>
                                                            <td><?= $brg['nama_brg']; ?></td>
                                                            <td><?= $brg['keterangan']; ?></td>
                                                            <td><?= $brg['kategori']; ?></td>
                                                            <td><?= $brg['harga']; ?></td>
                                                            <td><?= "<img src='assets/img/gambarProduk/$brg[gambar_barang]' width='70' height='90'/>"; ?></td>
                                                            <td>
                                                                <a href="" class="badge badge-primary" data-toggle="modal" data-target="#submenuedit">Edit</a>
                                                                <a href="<?= base_url() ?>menu/usermenuhapus/<?= $brg['id_brg'] ?>" class="badge badge-danger">Delete</a>
                                                            </td>
                                                        </tr>
                                                        <?php $i++; ?>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- End of Main Content -->

                        <!-- Modal -->
                        <div class="modal fade" id="usermenubaru" tabindex="-1" role="dialog" aria-labelledby="myLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myLabel">Tambah Menu User Baru</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?= base_url('menu/submenu'); ?>" method="POST">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="title" name="title" placeholder="Masukan SubMenu Baru">
                                            </div>
                                            <div class="form-group">
                                                <select name="menu_id" id="menu_id" class="form-control">
                                                    <option value="">Pilih Menu</option>
                                                    <?php foreach ($menu as $m) : ?>
                                                        <option value="<?= $m['id'] ?>"><?= $m['menu'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="url" name="url" placeholder="Masukan URL SubMenu Baru">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="icon" name="icon" placeholder="Masukan Ikon SubMenu Baru">
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                                                    <label class="form-check-label" for="is_active">
                                                        Aktif?
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>