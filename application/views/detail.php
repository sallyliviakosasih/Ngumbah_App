<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width='device-width', initial-scale=1.0">
        <link rel="stylesheet" href="./src/style/styles.css">
        <title>Ngumbah App -- Detail Pesanan Laundry</title>
    </head>
    <body>
        <header>
            <img src="./src/public/images/Ngumbah_icon1.png" id="header_logo" alt="Ngumbah App's Header Logo">
            <button id="more_navigation_list" aria-label="more_navigation_list">&#9776</button>
            <nav id="navigation_list">
                <a href="./index.php">Halaman Utama</a>
                <a href="#" id="username_button">Pengguna_01</a>
                <a href="#">Keluar</a>
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
                            <td>NH00003</td>
                        </tr>
                        <tr>
                            <td>Nama Pemesan</td>
                            <td>:</td>
                            <td>Pengguna 01</td>
                        </tr>
                        <tr>
                            <td>Nomor Telepon/Hp</td>
                            <td>:</td>
                            <td>081234567890</td>
                        </tr>
                        <tr>
                            <td>Alamat Lengkap</td>
                            <td>:</td>
                            <td>Jalan Lorem ipsum dolor sit, No. 01, Indonesia</td>
                        </tr>
                        <tr>
                            <td>Paket Pilihan</td>
                            <td>:</td>
                            <td>Normal Clean</td>
                        </tr>
                        <tr>
                            <td>Berat Total Laundry</td>
                            <td>:</td>
                            <td>10 kg</td>
                        </tr>
                        <tr>
                            <td>Status Pembayaran</td>
                            <td>:</td>
                            <td>Lunas</td>
                            <td>Tidak Lunas</td>
                        </tr>
                    </table>
                </div>
                <h2 id="detail_sub_title">Status Pemesanan</h2>
                <div class="transaction_status">
                    <table>
                        <tr>
                            <td>
                                <input type="checkbox" id="confirmed_transaction" name="confirmed_transaction" value="Transaction Confirmed" disabled>
                            </td>
                            <td>
                                <p id="confirmed_transaction">Pesanan telah dikonfirmasi</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" id="confirmed_payment" name="confirmed_payment" value="Payment Confirmed" disabled>
                            </td>
                            <td>
                                <p id="confirmed_payment">Pembayaran telah dikonfirmasi</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" id="order_accepted" name="order_accepted" value="Order Accepted" disabled>
                            </td>
                            <td>
                                <p id="order_accepted">Laundry telah diterima toko</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" id="processing_order" name="processing_order" value="Processing Order" disabled>
                            </td>
                            <td>
                                <p id="processing_order">Laundry sedang diproses/dicuci</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" id="finishing_process" name="finishing_process" value="Finishing Process" disabled>
                            </td>
                            <td>
                                <p id="finishing_process">Laundry sedang disetrika/dirapikan</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" id="packing_order" name="packing_order" value="Packing Order" disabled>
                            </td>
                            <td>
                                <p id="packing_order">Laundry sedang di packing dan akan segera dikirim ke pemesan</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" id="delivery_order" name="delivery_order" value="Delivering Order" disabled>
                            </td>
                            <td>
                                <p id="delivery_order">Laundry sedang dikirim ke alamat pemesan</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" id="arrived_order" name="arrived_order" value="Order arrived" disabled>
                            </td>
                            <td>
                                <p id="arrived_order">Laundry telah tiba di alamat pemesan dan telah diterima pemesan</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </main>
        <footer>
            <img src="./src/public/images/Ngumbah_icon2.png" id="footer_logo" alt="Ngumbah App's Footer Logo">
            <div class="footer_description">
                <h2>Kontak Kami</h2>
                <div class="footer_information">
                    <img src="./src/public/images/location.png" id="location_icon" alt="location's icon">
                    <p>Jalan Lorem ipsum dolor, No. 0001, Indonesia</p>
                </div>
                <div class="footer_information">
                    <img src="./src/public/images/phone.png" id="phone_icon" alt="phone's icon">
                    <p>0811234567890</p>
                </div>
                <div class="footer_information">
                    <img src="./src/public/images/instagram.png" id="instagram_icon" alt="instagram's icon">
                    <p>Ngumbah_App</p>
                </div>
            </div>
            <p class="copyright">Ngumbah App Inc 2022</p>
        </footer>
    </body>
</html>