            <!-- Footer -->
            <!--<footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Dickyfli Perdana Putra <?= date('Y'); ?></span>
                    </div>
                </div>
            </footer>-->
            <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Siap Untuk Logout ?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Apakah Anda Yakin Untuk Meninggalkan Halaman ini ? </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end -->

            <!-- data tabel search jquery -->
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
            <!--<script src="<?= base_url('assets/sb/'); ?>vendor/jquery/jquery.min.js"></script>-->
            <script src="<?= base_url('assets/sb/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#example').DataTable();
                });
            </script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#inbox').DataTable();
                });
            </script>
            <script src="<?= base_url('assets/sb/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
            <script src="<?= base_url('assets/sb/'); ?>js/sb-admin-2.min.js"></script>
            <script>
                $('.custom-file-input').on('change', function() {
                    let fileName = $(this).val().split('\\').pop();
                    $(this).next('.custom-file-label').addClass("selected").html(fileName);
                });
                $('.form-check-input').on('click', function() {
                    const menuId = $(this).data('menu');
                    const roleId = $(this).data('role');

                    $.ajax({
                        url: "<?= base_url('admin/changeaccess'); ?>",
                        type: 'post',
                        data: {
                            menuId: menuId,
                            roleId: roleId
                        },
                        success: function() {
                            document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;

                        }
                    });

                });
            </script>
            <!-- end -->

            </body>

            </html>