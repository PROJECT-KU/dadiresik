<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "key: ac350718e0c5293b822c7fcc032a813f"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $provinsi = json_decode($response, true);
}
?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Profile</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url('user') ?>">Home</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" alt="User profile picture">
                                    </div>
                                    <h3 class="profile-username text-center"><?= $user['nama']; ?></h3>
                                    <?php if ($user['kelamin'] == 'laki-laki') : ?>
                                        <p class="text-muted text-center">Laki-Laki</p>
                                    <?php else : ?>
                                        <p class="text-muted text-center">Perempuan</p>
                                    <?php endif; ?>
                                </div>
                                <p class="text-muted text-center">Akun dibuat sejak <?= date('d F Y', $user['date_create']); ?></p>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- About Me Box -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">About Me</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <strong><i class="fas fa-phone mr-1"></i> Phone</strong>
                                    <p class="text-muted"><?= $user['hp']; ?></p>
                                    <hr>
                                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                                    <p class="text-muted"><?= $user['alamat'] . ", Kab. " . $user['kabupaten'] . ", Prov. " . $user['provinsi'] ?></p>
                                    <hr>
                                    <strong><i class="fas fa-envelope mr-1"></i> Email</strong>
                                    <p class="text-muted"><?= $user['email']; ?></p>
                                    <hr>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Ubah Password</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Edit Profile</a></li>
                                    </ul>
                                </div>
                                <!-- /.card-header -->
                                <!-- NOTE -->
                                <div class="card-body">
                                    <div class="tab-content">

                                        <!-- END NOTE -->
                                        <!-- RESET PASSWORD -->
                                        <div class="active tab-pane" id="timeline">
                                            <div>

                                                <form method="POST" action="<?= base_url('profil/editpassword') ?>">
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
                                                    <div class="mb-3">
                                                        <label for="password" class="form-label">Password Baru</label>
                                                        <input type="text" class="form-control" name="password" id="password" aria-describedby="password" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="input-group-addon">
                                                            <label for="password1" class="form-label">Ulangi Password</label>
                                                            <input type="password" class="form-control" name="password1" id="password1" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input style="margin-right: 5px;" type="checkbox" required>Saya yakin <a href="#">untuk mengganti password</a>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-info">Simpan</button>
                                                </form>

                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->

                                        <div class="tab-pane" id="settings">
                                            <?php echo form_open_multipart('profil/editprofile'); ?>
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
                                            <div class="form-group row">
                                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="nama" id="nama" value="<?= $user['nama']; ?>" required>
                                                    <?= form_error('nama', '<small class="text-danger" pl-3>', '</small>') ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" name="email" id="email" value="<?= $user['email']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="hp" class="col-sm-2 col-form-label">Nomor Handphone</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="hp" id="hp" value="<?= $user['hp']; ?>" required>
                                                    <?= form_error('hp', '<small class="text-danger" pl-3>', '</small>') ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                                <select class="form-control" id="kelamin" name="kelamin" style="width: 730px;margin-left: 8px;">
                                                    <?php if ($user['kelamin'] == "laki-laki") : ?>
                                                        <option value="laki-laki" selected>Laki-laki</option>
                                                        <option value="perempuan">Perempuan</option>
                                                    <?php else : ?>
                                                        <option value="laki-laki">Laki-laki</option>
                                                        <option value="perempuan" selected>Perempuan</option>
                                                    <?php endif; ?>
                                                </select>
                                                <?= form_error('kelamin', '<small class="text-danger" pl-3>', '</small>') ?>
                                            </div>
                                            <div class="form-group row">
                                                <label for="provinsi" class="col-sm-2 col-form-label">Provinsi</label>
                                                <select class="form-control" name="provinsi" id="provinsi" style="width: 730px;margin-left: 8px;">
                                                    <option>Pilih Provinsi</option>
                                                    <?php if ($provinsi['rajaongkir']['status']['code'] == 200) :
                                                        foreach ($provinsi['rajaongkir']['results'] as $pv) : ?>
                                                            <option value="<?= $pv['province_id'] ?>" required><?= $pv['province'] ?></option>
                                                    <?php
                                                        endforeach;
                                                    endif;
                                                    ?>
                                                </select>
                                                <?= form_error('provinsi', '<small class="text-danger" pl-3>', '</small>') ?>
                                            </div>


                                            <div class="form-group row">
                                                <label for="kabupaten" class="col-sm-2 col-form-label">Kabupaten</label>
                                                <select class="form-control" name="kabupaten" id="kabupaten" style="width: 730px;margin-left: 8px;">
                                                    <option> Isi Provinsi terlebih dahulu</option>
                                                    <?= form_error('kabupaten', '<small class="text-danger" pl-3>', '</small>') ?>
                                                </select>
                                            </div>
                                            <div class="form-group row">
                                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $user['alamat']; ?>" required></input>
                                                    <?= form_error('alamat', '<small class="text-danger" pl-3>', '</small>') ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="rt" class="col-sm-2 col-form-label">RT</label>
                                                <div class="col-sm-2">
                                                    <input type="number" class="form-control" id="rt" name="rt" value="<?= $user['rt']; ?>" required></input>
                                                    <?= form_error('rt', '<small class="text-danger" pl-3>', '</small>') ?>
                                                </div>
                                                <label for="rw" class=" col-form-label">RW</label>
                                                <div class="col-sm-2">
                                                    <input type="number" class="form-control" id="rw" name="rw" value="<?= $user['rw']; ?>" required></input>
                                                    <?= form_error('rw', '<small class="text-danger" pl-3>', '</small>') ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                                                <div class="col-sm-10 custom-file">
                                                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                                    <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                                    <?= form_error('gambar', '<small class="text-danger" pl-3>', '</small>') ?>
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input style="margin-right: 5px;" type="checkbox" required>Saya menyetujui <a href="#">syarat dan ketentuan</a>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div>
                                                    <button type="submit" class="btn btn-info">Simpan</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    </div>
    </div>
</body>
<script>
    document.getElementById('provinsi').addEventListener('change', function() {
        fetch("<?= base_url('profil/kota/') ?>" + this.value, {
                method: 'GET',
            })
            .then((response) => response.text())
            .then((data) => {
                console.log(data)
                document.getElementById('kabupaten').innerHTML = data
            })
    })
</script>