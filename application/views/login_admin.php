<!DOCTYPE html>
<html>

<head>
  <title>Ngumbah App -- Masuk Admin</title>
  <link rel="stylesheet" href="<?=base_url('css/styles.css')?>">
</head>

<body>
<img src="<?=base_url('assets/images/Ngumbah_icon2.png')?>" class="logo" alt="Logo Ngumbah App">
  <div class="login_content">
    <?php if (!empty($this->session->flashdata('error'))){?>
              <div class="fail_notification_container">
                  <h4 id="fail_message"><?= $this->session->flashdata('error');?></h4>
              </div>
      <?php }?>

    <form action="<?=base_url('login_admin_action')?>" method="post" id="login_form">
      <h1 class="form_title">Masuk Akun Admin</h1>
      <table id="login_table">
        <tr>
          <td>
            <label for="username">Username Admin</label>
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" id="input_username_login" name="username" placeholder="Masukan Username Admin" required>
          </td>
        </tr>
        <tr>
          <td>
            <label for="password">Kata Sandi</label>
          </td>
        </tr>
        <tr>
          <td>
            <input type="password" id="input_password_login" name="password" placeholder="Masukan Kata Sandi" required>
          </td>
        </tr>
      </table>
      <button type="submit" id="login_button" name="submit">Masuk Akun Admin</button>
    </form>
  </div>
</body>

</html>