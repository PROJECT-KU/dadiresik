<div class="testbox box">
    <form action="<?= base_url('Formpesan/tambah_pesan');  ?>" method="post">
        <h2 style="text-align: center; font-family:cursive; font-size:40px">Struk Pemesanan</h2>
        <div style="color: #8B0000; border: 3px solid#0000FF;">
            <div style="margin-left: 10px;">
                <h3 style=" font-weight: bold;font-family: karla;">Data Pemesan</h3>
                <?php foreach ($pemesanan as $p) : ?>
                    <table border="0">
                        <tr>
                            <td>Id Pemesanan</td>
                            <td>:</td>
                            <td><b><?= $p->id_pemesanan;  ?></b></td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td><b><?= $p->nama;  ?></b></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><b><?= $p->alamat;  ?>, <?= $p->kota;  ?></b></td>
                        </tr>
                        <tr>
                            <td>No.Hp</td>
                            <td>:</td>
                            <td><b><?= $p->hp;  ?></b></td>
                        </tr>
                        <tr>
                            <td>Status Pesanan</td>
                            <td>:</td>
                            <td><b><span class="badge badge-warning"><?= $p->status;  ?></span></b></td>
                        </tr>
                    </table>
                    <hr>

                    <br>
                    <center>
                        <h3 style=" font-weight: bold;font-family: karla;">List Data Pesanan</h3>
                        <img src="<?= base_url(); ?>assets/img/gambarProduk/<?= $p->gambar_barang; ?>" height="200" width="200">
                    </center>
                    <br>
                    <table border="0" align="center">
                        <tr>
                            <td>Kategori Pesanan</td>
                            <td>:</td>
                            <td><b><?= $p->nama_brg;  ?></b></td>
                        </tr>
                        <tr>
                            <td>Keterangan Pesanan</td>
                            <td>:</td>
                            <td><b><?= $p->keterangan;  ?></b></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td>:</td>
                            <td><b>Rp.<?= $p->harga;  ?></b></td>
                        </tr>
                        <tr>
                            <td>Tanggal Pemesanan</td>
                            <td>:</td>
                            <td><b><?= $p->tanggal;  ?></b></td>
                        </tr>
                        <tr>
                            <td>Waktu Pemesanan</td>
                            <td>:</td>
                            <td><b><?= $p->waktu;  ?></b></td>
                        </tr>
                        <tr>
                            <td>Metode Bayar</td>
                            <td>:</td>
                            <td><b><?= $p->metode_bayar;  ?></b></td>
                        </tr>
                    </table>
                    <br><br><br>
                    <h3 style=" font-weight: bold;font-family: karla;">Info Pembayaran</h3>
                    <table border="0">
                        <tr>
                            <td>No.Rekening</td>
                            <td>:</td>
                            <td>0826472675273682 A.N. Mohammad Aldi Saputra BNI</td>
                        </tr>
                        <tr>
                            <td>OVO/GOPAY</td>
                            <td>:</td>
                            <td>085342472230</td>
                        </tr>
                    </table>
                    <br><br>
                    <center>
                        <b>SILAHKAN MELAKUKAN PEMBAYARAN SESUAI METODE UNTUK PEMESANAN SELANJUTNYA !!!</b>
                    </center>
                <?php endforeach; ?>
            </div>
        </div>
        <hr class="hr">

    </form>
</div>
</body>