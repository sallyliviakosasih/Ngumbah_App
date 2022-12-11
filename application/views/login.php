<!DOCTYPE html>
<html>

<head>
    <title>Ngumbah App -- Masuk</title>
    <meta name="dicoding:email" content="sallyliviak.1807@gmail.com">
    <link rel="stylesheet" href="<?=base_url('css/styles.css')?>">
    <link rel="icon" type="image/x-icon" href="<?=base_url('assets/images/Ngumbah_Icon4.png')?>">
</head>

<body>
    <img src="<?=base_url('assets/images/Ngumbah_icon2.png')?>" class="logo" alt="Logo Ngumbah App">
    <div class="login_content">
        <?php if (!empty($this->session->flashdata('error'))){?>
            <div class="fail_notification_container">
                <h4 id="fail_message"><?= $this->session->flashdata('error');?></h4>
            </div>
        <?php }?>
    
        <form action="<?=base_url('main_controller/login_action')?>" method="post" id="login_form">
            <h1 class="form_title">Masuk Akun</h1>
            <table id="login_table">
                <tr>
                    <td>
                        <label for="username">Username</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" id="input_username_login" name="username" placeholder="Masukan Username anda" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for=" password">Kata Sandi</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" id="input_password_login" name="password" placeholder="Masukan Kata Sandi" required>
                    </td>
                </tr>
            </table>
            <button type=" submit" id="login_button" name="submit">Masuk Akun</button>
        </form>
        <div class="alternative_registration">
            <p class="alternative_registration_item">Belum punya akun?</p>
            <a href="<?=base_url();?>signup" class="alternative_registration_item" id="registration_link">Daftar sekarang</a>
        </div>
    </div>
</body>

</html>