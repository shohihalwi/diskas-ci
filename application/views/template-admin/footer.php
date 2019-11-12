<!-- Footer -->
<footer class="py-4">
    <div class="container text-center">
        <p>eventmercubuana.com</p>
    </div>
</footer>
<!-- Footer -->

<!-- modal -->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body mx-3">
            <div class="md-form mb-5">
                <i class="fas fa-envelope prefix grey-text"></i>
                <input type="email" id="defaultForm-email" class="form-control validate">
                <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
            </div>

            <div class="md-form mb-4">
                <i class="fas fa-lock prefix grey-text"></i>
                <input type="password" id="defaultForm-pass" class="form-control validate">
                <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
            </div>

        </div>
        <div class="modal-footer d-flex justify-content-around">
            <a href="">Lupa Password?</a>
            <a href="?page=membership-dashboard&membership=yes" class="btn btn-default">Login</a>
        </div>
        <div class="modal-footer d-flex justify-content-center">
            Belum punya akun? <a href="?page=register" class="ml-3">Daftar Sekarang</a>
        </div>
    </div>
</div>
</div>

<!-- include jquery and bootstrap -->
<script src="assets/plugin/jquery/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="<?= base_url() ?>assets/plugin/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/plugin/mbootstrap/js/mdb.min.js"></script>
<script src="<?= base_url() ?>assets/plugin/mbootstrap/js/addons/datatables.min.js"></script>
<script src="<?= base_url() ?>assets/plugin/mbootstrap/js/addons/datatables-select.min.js"></script>
<script src="<?= base_url() ?>assets/js/search-bar.js"></script>
<script src="<?= base_url() ?>assets/plugin/owl/owl.carousel.min.js"></script>

<script src="<?= base_url() ?>assets/js/javascript.js"></script>
<script src="<?= base_url() ?>assets/js/forgot-password.js"></script>
<script src="<?= base_url() ?>assets/js/switch-tab-membership.js"></script>

</body>

</html>