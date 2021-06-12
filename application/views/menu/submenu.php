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


                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#submenubaru">Tambahkan Sub Menu Baru</a>
                            <table class="table table-hover mt-3">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Menu</th>
                                        <th scope="col">Url</th>
                                        <th scope="col">Icon</th>
                                        <th scope="col">Aktif</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($subMenu as $sm) : ?>
                                        <tr>
                                            <th scope="row"> <?= $i; ?></th>
                                            <td><?= $sm['title']; ?></td>
                                            <td><?= $sm['menu']; ?></td>
                                            <td><?= $sm['url']; ?></td>
                                            <td><?= $sm['icon']; ?></td>
                                            <td><?= $sm['is_active']; ?></td>
                                            <td>
                                                <a href="" class="badge badge-primary" data-toggle="modal" data-target="#submenuedit">Edit</a>
                                                <a href="<?= base_url() ?>menu/subhapus/<?= $sm['id'] ?>" class="badge badge-danger">Delete</a>
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
                <div class="modal hide fade" id="submenuedit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myLabel">Edit SubMenu</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel"></h4>
                            </div>
                            <form action="<?= base_url(); ?>menu/sububah/<?= $sm['id'] ?>" method="POST">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="title" name="title" value="<?= $sm['title']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <select name="menu_id" id="menu_id" class="form-control">
                                            <?php foreach ($menu as $m) : ?>
                                                <?php if ($m == $sm['menu_id']) : ?>
                                                    <option value="<?= $m['id']; ?>" selected><?= $m['menu']; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="url" name="url" value="<?= $sm['url']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="icon" name="icon" value="<?= $sm['icon']; ?>">
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
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Button trigger modal -->
                <!-- Modal -->
                <div class="modal fade" id="submenubaru" tabindex="-1" role="dialog" aria-labelledby="myLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myLabel">Tambah SubMenu Baru</h5>
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