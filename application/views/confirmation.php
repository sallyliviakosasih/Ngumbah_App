<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?=base_url('css/styles.css')?>">
        <link rel="icon" type="image/x-icon" href="<?=base_url('assets/images/Ngumbah_Icon4.png')?>">
        <title>Ngumbah App -- Pesan Jasa Laundry</title>
    </head>
    <body>
        <header>
            <img src="<?=base_url('assets/images/Ngumbah_icon1.png')?>" id="header_logo" alt="Ngumbah App's Header Logo">
            <button id="more_navigation_list" aria-label="more_navigation_list">&#9776</button>
            <nav id="navigation_list">
                <a href="<?=base_url('history')?>">Riwayat Pemesanan</a>
                <a href="#" id="username_button"><?= $username?></a>
                <a href="<?=base_url('logout')?>">Keluar</a>
            </nav>
        </header>
        <main>
            <div class="order_container">
                <h1 id="confirmation_title">Konfirmasi Data Pemesanan</h1>
                <form class="confirmation_form" method="post" action="<?=base_url('confirmation_action')?>">
                    <table>
                        <tr>
                            <td>Nama</td>
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
                            <td>Pilihan Layanan</td>
                            <td>:</td>
                            <td><?=$package_name?></td>
                        </tr>
                        <tr>
                            <td>Estimasi Berat</td>
                            <td>:</td>
                            <td><?=$weight?> kg</td>
                        </tr>
                        <tr>
                            <td>Catatan :</td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <textarea id="user_notes" placeholder="Catatan untuk toko mengenai laundry yang akan dilakukan" readonly><?=$notes?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Biaya Paket</td>
                            <td>:</td>
                            <td id="package_cost">Rp<?=$package_cost?></td>
                        </tr>
                        <tr>
                            <td>Biaya Pengiriman</td>
                            <td>:</td>
                            <td id="delivery_cost">Rp<?=$delivery_cost?></td>
                        </tr>
                        <tr>
                            <td class="total">Total Biaya Pemesanan</td>
                            <td class="total">:</td>
                            <td class="total" id="total_cost">Rp<?=$total_cost?></td>
                        </tr>
                    </table>
                    <button type="submit" id="confirmation_button">Konfirmasi Pemesanan</button>
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