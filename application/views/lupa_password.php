<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div id="form-olvidado">
                <h4 class="">
                    Lupa password kamu?
                </h4>
                <form accept-charset="UTF-8" role="form" id="login-recordar" method="post">
                    <fieldset>
                        <span class="help-block">
                            Menemukan email anda
                            <br>
                            kami akan mengirim link ke email kamu untuk mengganti password.
                        </span>
                        <div class="form-group input-group">
                            <span class="fas fa-at">
                                &#xf1fa;
                            </span>
                            <input class="form-control" placeholder="Email" name="email" type="email" required="">
                        </div>
                        <button type="btn" class="btn btn-primary btn-block"
                            href="<?php echo base_url("rekomendasi") ?>">
                            <!-- ini harusnya dikasih modal yak? -->
                            Submit
                        </button>
                        <p class="help-block">
                            <a class="text-muted" href="<?php echo base_url("rekomendasi") ?>"><small>login</small></a>
                        </p>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>