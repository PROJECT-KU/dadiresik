                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


                    <div class="row">
                        <div class="col-lg">
                            <?php if (validation_errors()) :  ?>
                                <div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div>
                            <?php endif; ?>
                            <?= $this->session->flashdata('pesan');  ?>

                            <table class="table table-hover mt-3">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ID Pesanan</th>
                                        <th scope="col">Email Pemesan</th>
                                        <th scope="col">ID Barang</th>
                                        <th scope="col">Tanggal Pesanan</th>
                                        <th scope="col">Jam Pesanan</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($pesan as $psn) : ?>
                                        <tr>
                                            <th scope="row"> <?= $i; ?></th>
                                            <td><?= $psn['id_pemesanan']; ?></td>
                                            <td><?= $psn['email']; ?></td>
                                            <td><?= $psn['nama_brg']; ?></td>
                                            <td><?= $psn['tanggal']; ?></td>
                                            <td><?= $psn['waktu']; ?></td>
                                            <?php if ($psn['status'] == 1) : ?>
                                                <td><span class="badge badge-pill badge-success">Lunas</span></td>
                                            <?php elseif ($psn['status'] == 2) : ?>
                                                <td><span class="badge badge-pill badge-danger">Batal</span></td>
                                            <?php else : ?>
                                                <td><span class="badge badge-pill badge-warning">Belum Bayar</span></td>
                                                <?php endif; ?>
                                            <td>
                                            
                                                <a href="<?= base_url('admin/lunas/') ?><?= $psn['id_pemesanan'] ?>" class="badge badge-primary" >Lunas</a>
                                                <a href="<?= base_url('admin/cancel/') ?><?= $psn['id_pemesanan'] ?>" class="badge badge-danger">Cancel</a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Modal -->

                <!-- Button trigger modal -->
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