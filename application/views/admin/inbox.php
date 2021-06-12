<!--Counter Inbox-->
<?php
$query = $this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
$query2 = $this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
$jum_comment = $query2->num_rows();
$jum_pesan = $query->num_rows();
?>
<!-- Main content -->

<body class="hold-transition sidebar-mini layout-fixed" style="margin-bottom: 10px;;">
  <div class="wrapper">
    <div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Inbox</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= base_url('admin/index') ?>">Home</a></li>
                <li class="breadcrumb-item active">Inbox</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg">
              <table id="inbox" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Pesan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 0;
                  foreach ($data->result_array() as $i) :
                    $no++;
                    $inbox_id = $i['inbox_id'];
                    $inbox_nama = $i['inbox_nama'];
                    $inbox_email = $i['inbox_email'];
                    $inbox_msg = $i['inbox_pesan'];
                    $tanggal = $i['tanggal'];

                  ?>
                    <tr>
                      <td><?php echo $tanggal; ?></td>
                      <td><?php echo $inbox_nama; ?></td>
                      <td><?php echo $inbox_email; ?></td>
                      <td><?php echo $inbox_msg; ?></td>
                      <td style="text-align:right;">
                        <a type="button" class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $inbox_id; ?>"><span class="fa fa-trash"></span></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
  <?php foreach ($data->result_array() as $i) :
    $inbox_id = $i['inbox_id'];
    $inbox_nama = $i['inbox_nama'];
    $inbox_email = $i['inbox_email'];
    $inbox_msg = $i['inbox_pesan'];
    $tanggal = $i['tanggal'];
  ?>
    <!--Modal Hapus Pengguna-->
    <div class="modal fade" id="ModalHapus<?php echo $inbox_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
            <h4 class="modal-title" id="myModalLabel">Hapus Agenda</h4>
          </div>
          <form class="form-horizontal" action="<?php echo base_url() . 'admin/inbox/hapus_inbox' ?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <input type="hidden" name="kode" value="<?php echo $inbox_id; ?>" />
              <p>Apakah Anda yakin mau menghapus data ini?</p>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php endforeach; ?>