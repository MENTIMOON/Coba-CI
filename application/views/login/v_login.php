<?php if ($this->session->flashdata('text')) : ?>
    <div class="row mt-3">
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?= $this->session->flashdata('text'); ?>
        </div>
    </div>
<?php endif; ?>
<div class="container">
    <div class="form-signin">
        <h3 class="form-signin-heading"><?= $judul ?></h3>
        <form action="<?= base_url('Login'); ?>" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
            </div>
            <div class="form-text text-danger"><?= form_error('username') ?></div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-text text-danger"><?= form_error('password') ?></div>
            <button type="submit" name="input" class="btn btn-lg btn-primary btn-block">Login</button>
        </form>
    </div>
</div>