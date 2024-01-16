<div class="container">
    <div class="row mt-3">
        <div class="col mt-3">
            <!-- partial:index.partial.html -->
            <div class="box-form">
                <div class="left">
                    <div class="overlay">
                        <img src="assets/images/logo header.png" alt="">
                        <h1>Thetametrika Online</h1>
                        <p>Platform Pengukuran Psikologi Online</p>
                    </div>
                </div>

                <div class="right">
                    <h2>Masuk</h2>
                    <p>Selamat Datang, Teams! <a href="admin/register">Buat akun baru</a> bergabung bersama tim asessor Thetametrika Online</p>
                    <?= $this->session->flashdata('message'); ?>
                    <form class="staff" method="post" action="<?= base_url('admin'); ?>">
                        <div class="inputs">
                            <input type="email" id="email" name="email" placeholder="Email Aktif" value="<?= set_value('email'); ?>">
                            <br>
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            <input type="password" id="password" name="password" placeholder="Password">
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <br>
                        <button type="submit">Login</button>
                    </form>

                </div>

            </div>

        </div>
        <!-- partial -->



    </div>
</div>

</div>