<!DOCTYPE html>
<html lang="id">
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
                <a href="#">Riwayat Pemesanan</a>
                <a href="#" id="username_button"><?= $username?></a>
                <a href="<?=base_url('logout')?>">Keluar</a>
            </nav>
        </header>
        <main>
            <div class="order_container">
                <h1 id="order_title">Pemesanan Layanan Laundry</h1>
                <form class="order_form">
                    <h2 class="order_instruction">Pilih Jenis Layanan : </h2>
                    <?php 
                        foreach($packages->result_array() as $package) { ?>
                            <div class="option">
                                <h2><?= $package['package']?></h2>
                                <p><?= $package['description']?></p>
                                <?php
                                    if ($package['type'] == 'Kiloan') { ?>
                                        <p>Harga: <?=$package['price']?>/kg (Harga tidak Termasuk Pengiriman)</p>
                                    <?php }
                                    else { ?>
                                             <p>Harga: <?=$package['price']?>/satuan (Harga tidak Termasuk Pengiriman)</p>
                                        <?php }?>
                                <a href="<?=base_url('order/data_order')?>?id=<?=$package['id']?>" class="pick_package_button">Pilih Layanan ini</a>
                            </div>
                        <?php } ?>
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