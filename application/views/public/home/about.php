<section class="contact" style="margin-top: 180px; margin-bottom:50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section_tittle text-center">
                    <h2>HUBUNGI KAMI</h2>
                </div>
            </div>
        </div>
        <!-- ===================== ALERT AUTO CLOSE ============================== -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style type="text/css">
            body {
                padding: 5px;
            }
        </style>
        <div role="alert">
            <h5><?php echo $this->session->flashdata('msg'); ?></a></strong></h5>
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
        <div class="row">
            <div class="col-md-12">
                <div class="contact-form">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 contact-option">
                            <div class="contact-option_rsp">
                                <h3>Tinggalkan Pesan</h3>
                                <form action="<?php echo site_url('contact/kirim_pesan'); ?>" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" name="xnama" required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="xemail" required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone" name="xphone" required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <textarea placeholder="Message" class="form-control" name="xmessage" required rows="5"></textarea>
                                    </div>
                                    <!-- // end .form-group -->
                                    <button type="submit" class="btn d-none d-lg-block btn-submit btn_1" style="margin-bottom: 10px;">SUBMIT</button>

                                    <!-- // end #js-contact-result -->
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="contact-address">
                                <h3>Lokasi</h3>
                                <div class="contact-details">
                                    <img style="margin-right: 3px;" src="<?php echo base_url() . 'assets/img/icon/maps.svg' ?>" <h6>Alamat</h6>
                                    <p>Jl. Bangunsari, Bangunkerto, Turi
                                        <br> Sleman, Yogyakarta
                                        <br> 55551 Indonesia
                                    </p>
                                </div>
                                <br>
                                <div class="contact-details">
                                    <img style="margin-right: 3px;" src="<?php echo base_url() . 'assets/img/icon/email.svg' ?>" <h6>Email</h6>
                                    <p>info@rumahscopus.com

                                    </p>
                                </div>
                                <br>
                                <div class="contact-details">
                                    <img style="margin-right: 3px;" src="<?php echo base_url() . 'assets/img/icon/hp.svg' ?>" <h6>Telepon dan WhatsApp</h6>
                                    <p>(+62) 812-2688-32808</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!--<div class="col-md-12">
                <p class="contact-center">OR</p>
            </div>-->
        </div>
    </div>
</section>
<!--//END  ABOUT IMAGE -->