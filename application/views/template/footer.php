  <!-- Footer -->
  <footer class="page-footer font-small unique-color-dark pt-5">

<!-- Footer Elements -->
<div class="container">

    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
        <li class="list-inline-item">
            <h5 class="mb-1">Buat akun Gratis</h5>
        </li>
        <li class="list-inline-item">
            <a href="?page=register" class="btn btn-outline-white btn-rounded">Daftar Sekarang</a>
        </li>
    </ul>
    <!-- Call to action -->

</div>
<!-- Footer Elements -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="http://mercubuana.ac.id"> mercubuana | diskas team</a>
</div>
<!-- Copyright -->

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
            <a href="<?php echo base_url("Authentication/lupa_password") ?>">Lupa Password?</a>
            <a href="<?php echo base_url("membership") ?>" class="btn btn-default">Login</a>
        </div>
        <div class="modal-footer d-flex justify-content-center">
            Belum punya akun? <a href="<?= base_url("daftar") ?>" class="ml-3">Daftar Sekarang</a>
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
<script src="<?= base_url() ?>assets/js/search-bar.js"></script>
<script src="<?= base_url() ?>assets/plugin/owl/owl.carousel.min.js"></script>

<script src="<?= base_url() ?>assets/js/javascript.js"></script>
<script src="<?= base_url() ?>assets/js/forgot-password.js"></script>
<script src="<?= base_url() ?>assets/js/switch-tab-membership.js"></script>

</body>

</html>