<div class="testbox box">
    <form action="" style="margin-top: 50px;">
        <h2 style="text-align: center; font-family:cursive; font-size:40px">Form Pemesanan</h2>
        <div style="color: #8B0000; border: 3px solid#0000FF;">
            <div style="margin-left: 10px;">
                <h3 style=" font-weight: bold;font-family: karla;">NOTE</h3>
                <li>Jasa yang sudah di pesan <strong>tidak bisa dibatalkan</strong> </li>
                <li>Data Form Pemesanan akan secara otomatis terisi dari <strong>Data Saat Registrasi Akun</strong></li>
                <li>Simpan Struk Pemesanan yang telah dikirim ke email anda, dan tunjukan kepada karyawan kami Saat Datang Ke Lokasi Anda</li>
            </div>
        </div>
        <hr class="hr">

        <div class="item">
            <p>Email</p>
            <input type="text" name="name" />
            <i class="far fa-envelope"></i>
        </div>
        <div class="item">
            <p>No.Telp</p>
            <input type="text" name="name" />
            <i class="fas fa-phone"></i>
        </div>
        <div class="btn-block">

            <button type="submit" href="<?php base_url(); ?>/konfirmasipesan.php">SEND</button>
        </div>
    </form>
</div>
</body>