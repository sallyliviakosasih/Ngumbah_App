<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width='device-width', initial-scale=1.0">
        <link rel="stylesheet" href="<?=base_url('css/styles.css')?>">
        <link rel="icon" type="image/x-icon" href="<?=base_url('assets/images/Ngumbah_Icon4.png')?>">
        <title>Ngumbah App -- Detail Pesanan Laundry</title>
    </head>
    <body>
        <header>
            <img src="<?=base_url('assets/images/Ngumbah_icon1.png')?>" id="header_logo" alt="Ngumbah App's Header Logo">
            <button id="more_navigation_list" aria-label="more_navigation_list">&#9776</button>
            <nav id="navigation_list">
                <a href="<?=base_url('homepage')?>">Halaman Utama</a>
                <a href="#" id="username_button"><?= $username?></a>
                <a href="<?=base_url('logout')?>">Keluar</a>
            </nav>
        </header>
        <main>
            <div class="detail_container">
                <h1 id="detail_title">Detail dan Status Pemesanan</h1>
                <div class="transaction_detail">
                    <table>
                        <tr>
                            <td>ID Pemesanan</td>
                            <td>:</td>
                            <td><?=$id?></td>
                        </tr>
                        <tr>
                            <td>Nama Pemesan</td>
                            <td>:</td>
                            <td><?=$name?></td>
                        </tr>
                        <tr>
                            <td>Nomor Telepon/Hp</td>
                            <td>:</td>
                            <td><?=$phone?></td>
                        </tr>
                        <tr>
                            <td>Alamat Lengkap</td>
                            <td>:</td>
                            <td><?=$address?></td>
                        </tr>
                        <tr>
                            <td>Paket Pilihan</td>
                            <td>:</td>
                            <td><?=$package_name?></td>
                        </tr>
                        <tr>
                            <td>Berat Total Laundry</td>
                            <td>:</td>
                            <td><?=$weight?> kg</td>
                        </tr>
                        <tr>
                            <td>Status Pembayaran</td>
                            <td>:</td>
                            <?php if ($payment_status === 'Lunas') { ?>
                                <td>Lunas</td>
                            <?php } else { ?>
                                <td>Tidak Lunas</td>
                            <?php }?>
                        </tr>
                    </table>
                </div>
                <h2 id="detail_sub_title">Status Pemesanan</h2>
                <div class="transaction_status">
                    <div class="status_container">
                            <div class="status">
                                <div class="status_mark <?=($order_status['order_confirmed'] == '1') ? 'complete': '';?>">&check;</div>
                                <div class="status_name">Pesanan telah dikonfirmasi</div>
                            </div>
                            <div class="status">
                                <div class="status_mark <?=($order_status['payment_confirmed'] == '1') ? 'complete': '';?>">&check;</div>
                                <div class="status_name">Pembayaran telah dikonfirmasi</div>
                            </div>
                            <div class="status">
                                <div class="status_mark <?=($order_status['order_received'] == '1') ? 'complete': '';?>">&check;</div>
                                <div class="status_name">Laundry telah diterima di toko</div>
                            </div>
                            <div class="status">
                                <div class="status_mark <?=($order_status['order_processed'] == '1') ? 'complete': '';?>">&check;</div>
                                <div class="status_name">Laundry sedang di proses</div>
                            </div>
                            <div class="status">
                                <div class="status_mark <?=($order_status['order_packed'] == '1') ? 'complete': '';?>">&check;</div>
                                <div class="status_name">Laundry sedang dipacking dan akan dikirim ke pemesan</div>
                            </div>
                            <div class="status">
                                <div class="status_mark <?=($order_status['order_sent'] == '1') ? 'complete': '';?>">&check;</div>
                                <div class="status_name">Laundry sedang dikirim ke alamat pemesan</div>
                            </div>         
                            <div class="status">
                                <div class="status_mark <?=($order_status['order_arrived'] == '1') ? 'complete': '';?>">&check;</div>
                                <div class="status_name">Laundry sampai di alamat pemesan</div>
                            </div>  
                    </div>
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