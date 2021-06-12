<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Password</title>


</head>

<body>
    <div class="main">
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?php echo base_url() . 'assets/img/home/img/logo1.png' ?>" alt="sing up image"></figure>
                        <a href="<?= base_url('auth/index') ?>" class="signup-image-link btn btn-outline-info">Back to Login</a>
                        <a class="signup-image-link btn btn-outline-warning" href="<?php echo site_url(''); ?>">Home</a>
                    </div>

                    <div class="signin-form">
                        <br><br><br><br><br>
                        <h4 class="form-title">Change Your Password For</42>
                        <p><?= $this->session->userdata('reset_email'); ?></p>
                        <form method="POST" action="<?= base_url('auth/changepassword') ?>" class="user">
                            <?= $this->session->flashdata('pesan'); ?>
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="password" name="password1" id="password1" placeholder="Masukkan Password Baru" style="font-size: 14px;">
                                <?= form_error('password1', '<small class="text-danger pl-3" style="font-size: 14px;">', '</small>'); ?> 
                            </div>
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="password" name="password2" id="password2" placeholder="Ulangi Password Baru" style="font-size: 14px;">
                                <?= form_error('password1', '<small class="text-danger pl-3" style="font-size: 14px;">', '</small>'); ?> 
                            </div>
                            
                            
                            <div class="form-group form-button">
                                <input type="submit" name="submit" class="btn btn-primary btn-user btn-block" value="Ubah Password">
                            </div>
                        </form>
                        
                </div>
            </div>
        </section>

    </div>



</body>