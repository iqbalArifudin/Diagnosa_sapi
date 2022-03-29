<!-- <link rel="icon" href="<?php echo base_url() . 'assets/images/logo.png' ?>"> -->

<body>
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray">REGISTRASI</h1>
                            </div>

                            <div class="nav-link">
                                <?= $this->session->flashdata('message'); ?>
                                <br>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user border-left-primary "
                                            id="nama" name="nama" placeholder="Nama" value="<?= set_value('nama') ?>">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user border-left-primary "
                                            id="alamat" name="alamat" placeholder="Alamat (Isi alamat lengkap)"
                                            value="<?= set_value('alamat') ?>">
                                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control form-control-user border-left-primary "
                                            id="no_hp" name="no_hp" placeholder="No. Hp"
                                            value="<?= set_value('no_hp') ?>">
                                        <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user border-left-primary "
                                            id="username" name="username" placeholder="Username"
                                            value="<?= set_value('username') ?>">
                                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <input type="password"
                                            class="form-control form-control-user  border-left-primary" id="password"
                                            name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="foto" name="foto"
                                                autofocus>
                                            <label class="custom-file-label" for="customFile">FOTO</label>
                                            <!-- <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                        </div>
                                    </div>
                                    <p>

                                    <div class="text-center">
                                        <a class="small" href="<?= base_url(); ?>User/Login">Apakah Sudah Punya Akun?
                                            Login</a>
                                    </div>

                                    <p>

                                        <center>
                                            <button type="submit" class="btn btn-primary rounded-pill">
                                                Registrasi Akun
                                            </button>
                                        </center>


                                </form>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

<style>
.bg-login-image {
    background-image: url("<?= base_url('assets/images/gambar2.png'); ?>");
    /* background-repeat: no-repeat; */
    /* background-size: 90%; */
}
</style>