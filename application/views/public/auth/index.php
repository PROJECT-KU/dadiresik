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
                        <a href="<?= base_url('auth/registration') ?>" class="signup-image-link btn btn-outline-info">Create an account</a>
                        <a class="signup-image-link btn btn-outline-warning" href="<?php echo site_url(''); ?>">Home</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form method="POST" action="<?= base_url('auth') ?>" class="register-form" id="login-form">
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
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <a href="<?= base_url('auth/forgetPassword'); ?>">Forget Password ?</a>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label"></span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>



</body>