<div class="container">
    <div class="row mt-3">
        <div class="col mt-3">
            <!-- partial:index.partial.html -->
            <div class="box-form">
                <div class="left">
                    <div class="overlay">
                        <img src="<?= base_url('assets/'); ?>images/logo header.png" alt="">
                        <h1>Thetametrika Online</h1>
                        <p>Platform Pengukuran Psikologi Online</p>
                    </div>
                </div>

                <div class="right">
                    <h2>Registrasi Akun</h2>
                    <p>Silakan registrasi untuk bergabung bersama tim asessor Thetametrika Online</p>
                    <form class="staff" method="post" action="<?= base_url('admin/register'); ?>">
                        <input type="text" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
                        <br>
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        <input type="email" id="email" name="email" placeholder="Email Aktif" value="<?= set_value('email'); ?>">
                        <br>
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        <input type="password" id="password1" name="password1" placeholder="Password">
                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        <input type="password" id="password2" name="password2" placeholder="Konfirmasi Password">
                        <br>
                        <br>
                        <button type="submit">Daftar Sebagai Tim</button>
                    </form>

                    <div class="text-center mx-3">
                        <br>
                        <a class="small" href="<?= base_url('admin'); ?>">Login Akun</a>
                    </div>
                </div>

            </div>

        </div>
        <!-- partial -->



    </div>
</div>

</div>