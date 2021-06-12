                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


                    <div class="row">
                        <div class="col-lg-6">
                            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>');  ?>
                            <?= $this->session->flashdata('pesan');  ?>


                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#menubaru">Tambahkan Menu Baru</a>
                            <table class="table table-hover mt-3">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Menu</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($menu as $m) : ?>
                                        <tr>
                                            <th scope="row"> <?= $i; ?></th>
                                            <td><?= $m['menu']; ?></td>
                                            <td>
                                                <a href="" class="badge badge-primary" data-toggle="modal" data-target="#menuedit">Edit</a>
                                                <a href="<?= base_url() ?>menu/hapus/<?= $m['id'] ?>" class="badge badge-danger">Delete</a>
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
                <div class="modal hide fade" id="menuedit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myLabel">Edit Menu</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel"></h4>
                            </div>
                            <form action="<?= base_url(); ?>menu/ubah/<?= $m['id'] ?>" method="POST">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="menu" name="menu" value="<?= $m['menu']; ?>">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Button trigger modal -->
                <!-- Modal -->
                <div class="modal fade" id="menubaru" tabindex="-1" role="dialog" aria-labelledby="myLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myLabel">Tambah Menu Baru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?= base_url('menu'); ?>" method="POST">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Masukan Menu Baru">
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