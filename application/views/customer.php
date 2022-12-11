<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngumbah App -- Homepage</title>
    <link rel="stylesheet" href="<?=base_url('css/styles.css')?>">
</head>

<body>
    <header>
        <img src="<?=base_url('assets/images/Ngumbah_icon1.png')?>" id="header_logo" alt="Ngumbah App's Header Logo">
        <button id="more_navigation_list" aria-label="more_navigation_list">&#9776</button>
        <nav id="navigation_list">
            <a href="#">Keluar</a>
        </nav>
    </header>
    <main>
        <h1 id="welcome_greeting">Selamat datang, <?=$data_admin->name?>!</h1>
        <div class="transactions_container_admin">
            <h2 id="container_title">Data Transaksi Pengguna</h2>
            <?php 
                if ($transaction_data->num_rows() == '0') { ?>
                    <h3 id="empty_history_text">Tidak ada Riwayat Pemesanan</h3>
                <?php } else { ?>
                    <div class="transactions">
                        <?php 
                            foreach ($transaction_data->result_array() as $transaction) { ?>
                                <div class="user_transaction">
                                    <div class="user_transaction_detail">
                                        <table>
                                            <tr>
                                                <td>ID Pemesanan</td>
                                                <td>:</td>
                                                <td><?=$transaction['id']?></td>
                                            </tr>
                                            <tr>
                                                <td>Username</td>
                                                <td>:</td>
                                                <td><?=$transaction['username']?></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Pesanan</td>
                                                <td>:</td>
                                                <td><?=$transaction['date']?></td>
                                            </tr>
                                            <tr>
                                                <td>Status Pembayaran</td>
                                                <td>:</td>
                                                <td><?=$transaction['payment_status']?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <a href="<?=base_url('user_detail_transaction').'?id='.$transaction['id']?>" class="user_detail_transaction_button">Detail Transaksi</a> 
                                </div>
                            <?php } ?>
                    </div>
                <?php } ?>
        </div>
    </main>
    <footer>
        <img src="<?=base_url('assets/images/Ngumbah_icon2.png')?>" id="footer_logo" alt="Ngumbah App's Footer Logo">
        <div class="footer_description">
            <h2>Kontak Kami</h2>
            <div class="footer_information">
                <img src="<?=base_url('assets/images/location.png')?>" id="location_icon" alt="location's icon">
                <p>Jalan Lorem ipsum dolor, No. 0001, Indonesia</p>
            </div>
            <div class="footer_information">
                <img src="<?=base_url('assets/images/phone.png')?>" id="phone_icon" alt="phone's icon">
                <p>0811234567890</p>
            </div>
            <div class="footer_information">
                <img src="<?=base_url('assets/images/instagram.png')?>" id="instagram_icon" alt="instagram's icon">
                <p>Ngumbah_App</p>
            </div>
        </div>
        <p class="copyright">Ngumbah App Inc 2022</p>
    </footer>
</body>

</html>