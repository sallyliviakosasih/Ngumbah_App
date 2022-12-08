<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./src/style/styles.css">
        <title>Ngumbah App -- Pesan Jasa Laundry</title>
    </head>
    <body>
        <header>
            <img src="./src/public/images/Ngumbah_icon1.png" id="header_logo" alt="Ngumbah App's Header Logo">
            <button id="more_navigation_list" aria-label="more_navigation_list">&#9776</button>
            <nav id="navigation_list">
                <a href="./detail.php">Riwayat Pemesanan</a>
                <a href="#" id="username_button">Pengguna_01</a>
                <a href="#">Keluar</a>
            </nav>
        </header>
        <main>
            <div class="order_container">
                <h1 id="order_title">Pemesanan Layanan Laundry</h1>
                <form class="order_form">
                    <table class="data_order">
                        <tr>
                            <td>
                                <label>Nama Paket</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="input_column">Complete + Express</td>
                        </tr>
                        <tr>
                            <td>
                                <label for="weight">Berat Laundry</label> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" placeholder="Berat Laundry (kg)" id="input_weight" name="weight" class="input_column">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="notes">Catatan</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea placeholder="Catatan untuk toko mengenai laundry yang akan dilakukan" id="input_notes" class="input_column"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="user_name">Nama Pengguna</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" placeholder="Masukan Nama Pemesan" id="input_name" name="user_name" class="input_column">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="phone">Nomor Telepon/Hp</label></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" placeholder="Masukan Nomor Telepon/Hp Pemesan" id="input_phone" name="phone" class="input_column">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="address">Alamat Lengkap</label></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" placeholder="Masukan Alamat Lengkap Pemesan" id="input_address" name="address" class="input_column">
                            </td>
                        </tr>
                    </table>
                    <a id="place_order_button">Buat Pesanan</a>
                </form>
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