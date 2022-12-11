<!DOCTYPE html>
<html>

<head>
    <title>Ngumbah App -- Registrasi</title>
    <link rel="stylesheet" href="<?=base_url('css/styles.css')?>">
    <meta name="dicoding:email" content="sallyliviak.1807@gmail.com">
    <link rel="icon" type="image/x-icon" href="<?=base_url('assets/images/Ngumbah_Icon4.png')?>">
</head>

<body>
    <img src="<?=base_url('assets/images/Ngumbah_icon2.png')?>" class="logo" alt="Logo Ngumbah App">
    <div class="registration_content">
    <?php if (!empty($this->session->flashdata('error'))){?>
            <div class="fail_notification_container">
                <h4 id="fail_message"><?= $this->session->flashdata('error');?></h4>
            </div>
        <?php }?>
        <form action="<?=base_url('main_controller/signup_action')?>" method="post" id="registration_form">
            <h1 class="form_title">Daftar Akun</h1>
            <table id="registration_table">
                <tr>
                    <td>
                        <label for="nama_lengkap">Nama Lengkap</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" id="input_fullname_registration" class="input_fullname" name="nama_lengkap" placeholder="Masukan Nama Lengkap" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="no_tlp">Nomor Telepon</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" id="input_phone_registration" class="input_phone" name="no_tlp" placeholder="Masukan Nomor Telepon"required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Email</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="email" id="input_email_registration" class="input_email" name="email" placeholder="Masukan Email" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="username">Nama Pengguna</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" id="input_username_registration" class="input_username" name="username" placeholder="Masukan Nama Pengguna" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password1">Kata Sandi</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" id="input_password1_registration" class="input_password" name="password1" placeholder="Masukan Kata Sandi" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="passowrd2">Konfirmasi Kata Sandi</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" id="input_password2_registration" class="input_password" name="password2" placeholder="Masukan Konfirmasi Kata Sandi" required>
                    </td>
                </tr>
            </table>
            <button type="submit" id="registration_button" name="submit">Daftar Akun</button>
        </form>
    </div>
    <div class="alternative_login">
        <p class="alternative_login_item">Sudah mempunyai akun?</p>
        <a href="<?=base_url();?>login" class="alternative_login_item" id="login_link">Masuk Sekarang</a>
    </div>
</body>

</html>