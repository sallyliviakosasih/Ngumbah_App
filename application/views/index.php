<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngumbah App -- Homepage</title>
    <link rel="icon" type="image/x-icon" href="<?=base_url('assets/images/Ngumbah_Icon4.png')?>">
    <link rel="stylesheet" href="<?=base_url('css/styles.css')?>">
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
        <div class="hero_container">
            <img src="<?=base_url('assets/images/Ngumbah_Icon4.png')?>" id="hero_logo" alt="Ngumbah App's Hero Logo">
            <div class="hero_description">
                <h1 id="hero_description_title">Ngumbah</h1>
                <h2 id="hero_description_about">Laundry mudah, nyaman, dan terpercaya</h2>
                <a href="#offers" id="hero_description_link">Temukan Penawaran Kami</a>
            </div>
        </div>
        <div class="history_container">
            <h2 id="history_title">Riwayat Pemesanan</h2>
            <?php
                if ($transactions->num_rows() == '0') { ?>
                    <h3 id="empty_history_text">Tidak ada Riwayat Pemesanan</h3>
                <?php } else { ?> 
                    <div class="list_of_histories">
                        <?php
                            foreach ($transactions->result_array() as $transaction) { ?>
                               <div class="history">
                                    <?php if ($transaction['order_confirmed'] == '1' && $transaction['payment_confirmed'] == '1' && $transaction['order_received'] == '1' && $transaction['order_processed'] == '1' && $transaction['order_packed'] == '1' && $transaction['order_sent'] == '1' && $transaction['order_arrived'] == '1') {?>
                                        <div class="header_history">
                                            <a href="<?=base_url('detail_transaction').'?id='.$transaction['id']?>" class="history_status" id="done_status">Selesai</a>
                                            <a href="<?=base_url('delete_history').'?id='.$transaction['id']?>" class="delete_icon" alt="delete's icon"><img src="<?=base_url('assets/images/delete.png')?>" alt="delete's icon"></a>
                                        </div>
                                    <?php } else { ?>
                                        <div class="header_history">
                                            <h3 class="history_status" id="ongoing_status">Sedang di Proses</h3>
                                            <a href="<?=base_url('detail_transaction').'?id='.$transaction['id']?>" class="link_to_status">Lihat Status Pemesanan</a>
                                        </div>
                                    <?php } ?>
                                        <table class="history_detail">
                                            <tr>
                                                <td>ID Pemesanan</td>
                                                <td>:</td>
                                                <td><?= $transaction['id']?></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Pemesanan</td>
                                                <td>:</td>
                                                <td><?=$transaction['date']?></td>
                                            </tr>
                                            <tr>
                                                <td>Dipesan oleh</td>
                                                <td>:</td>
                                                <td><?=$transaction['username']?></td>
                                            </tr>
                                        </table>
                               </div>
                            <?php } ?>
                    </div>
                <?php } ?> 
        </div>
        <div class="offers_container" id="offers">
            <h2 id="offers_title">Yang Kami Tawarkan</h2>
            <div class="offer_odd">
                <img src="<?=base_url('assets/images/order.png')?>" class="offer_logo" alt="Order's Logo">
                <div class="offer_description">
                    <h3>Pemesanan Dimana Saja dan Kapan Saja</h3>
                    <p>Kami menyediakan jasa layanan laundry melalui website untuk mempermudah pengguna dalam menggunakan jasa ini</p>
                </div>
            </div>
            <div class="offer_even">
                <div class="offer_description">
                    <h3>Pengantaran Langsung</h3>
                    <p>Kami menyediakan jasa pengantaran secara langsung dari dan ke lokasi anda</p>
                </div>
                <img src="<?=base_url('assets/images/Delivery_icon.png')?>" class="offer_logo" alt="Delivery's logo">
            </div>
            <div class="offer_odd">
                <img src="<?=base_url('assets/images/information.png')?>" class="offer_logo" alt="Information's logo">
                <div class="offer_description">
                    <h3>Lacak Status Pemesanan dengan Praktis</h3>
                    <p>Kami menyediakan jasa layanan update status pemesanan secara live sehingga pengguna dapat mengetahui proses dari laundry yang dipesan</p>
                </div>
            </div>
            <a href="<?=base_url('order')?>" id="order_button">Pesan Laundry Sekarang</a>
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