<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?=base_url('assets/images/Ngumbah_Icon4.png')?>">
    <title>Ngumbah App -- Homepage</title>
    <link rel="stylesheet" href="<?=base_url('css/styles.css')?>">
</head>

<body>
    <header>
        <img src="<?=base_url('assets/images/Ngumbah_icon1.png')?>" id="header_logo" alt="Ngumbah App's Header Logo">
        <button id="more_navigation_list" aria-label="more_navigation_list">&#9776</button>
        <nav id="navigation_list">
            <a href="<?=base_url('admin_logout_action')?>">Keluar</a>
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
                        <td><?=$weight?></td>
                    </tr>
                    <tr>
                        <td>Status Pembayaran</td>
                        <td>:</td>
                        <td><?=$package_name?></td>
                    </tr>
                </table>
            </div>
            <form method="post" action="<?=base_url('update_action').'?id='.$id?>">
                <h2 id="detail_sub_title">Update Status Pemesanan</h2>
                <div class="user_transaction_status">
                    <table>
                        <tr>
                            <td>Status Laundry : </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" id="order_confirmed" name="order_confirmed" value="order_confirmed" <?=($order_status['order_confirmed'] == '1') ? 'checked': '';?>>
                                <label for="vehicle1">Pesanan telah di konfirmasi</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" id="payment_confirmed" name="payment_confirmed" value="payment_confirmed" <?=($order_status['payment_confirmed'] == '1') ? 'checked': '';?>>
                                <label for="vehicle1">Pembayaran telah di konfirmasi</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" id="order_received" name="order_received" value="order_received" <?=($order_status['order_received'] == '1') ? 'checked': '';?>>
                                <label for="vehicle1">Laundry telah diterima di toko</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" id="order_processed" name="order_processed" value="order_processed" <?=($order_status['order_processed'] == '1') ? 'checked': '';?>>
                                <label for="vehicle1">Laundry sedang diproses</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" id="order_packed" name="order_packed" value="order_packed" <?=($order_status['order_packed'] == '1') ? 'checked': '';?>>
                                <label for="vehicle1">Laundry sedang dipacking dan akan dikirim ke pemesan</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" id="order_sent" name="order_sent" value="order_sent" <?=($order_status['order_sent'] == '1') ? 'checked': '';?>>
                                <label for="vehicle1">Laundry sedang dikirim ke alamat pemesan</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" id="order_arrived" name="order_arrived" value="order_arrived" <?=($order_status['order_arrived'] == '1') ? 'checked': '';?>>
                                <label for="vehicle1">Laundry sampai di alamat pemesan</label>
                            </td>
                        </tr>
                    </table>
                </div>
                <button type="submit" id="update_user_transaction_status">Update Status Pesanan</button>
            </form>
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