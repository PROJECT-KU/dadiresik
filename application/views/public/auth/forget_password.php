<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>


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
                        <h2 class="form-title">Forgot Password ?</h2>
                        <form method="POST" action="<?= base_url('auth/proses_forget') ?>" class="user">
                            <?= $this->session->flashdata('pesan'); ?>
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="email" placeholder="Masukkan Email Terdaftar" /> 
                            </div>
                            
                            
                            <div class="form-group form-button">
                                <input type="submit" name="submit" class="btn btn-primary btn-user btn-block" value="Reset Password">
                            </div>
                        </form>
                        
                </div>
            </div>
        </section>

    </div>



</body>