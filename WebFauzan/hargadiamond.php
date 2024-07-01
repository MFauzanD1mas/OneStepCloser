<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Harga Diamond</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javaxsript"  src="hitungharga.js"></script>
    <link rel="stylesheet"  href="harga.css">
    <style>
        .submit {
            width: 30%;
            padding: 12px 20px 12px 20px;
            background-color: #102C57;
            margin-top: 50px;
            margin-bottom: 8px;
            color: #ffffff;
            font-size: 14px;
            line-height: 20px;
            font-weight: 400;
            border-radius: 8px;
            text-transform: uppercase;
        }
        .submit:hover{
            background-color: #410505;
        }
    </style>
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><img src="https://www.transparentpng.com/download/diamond/O3UOts-diamond-best-png.png"></div>
            <div class="menu">
                <ul>
                    <li><a href="home.html" class="tbl-biru">Home</a></li>
                    <li><a href="kalkulator.html" class="tbl-biru">Kalkulator</a></li>
                    <li><a href="member.php" class="tbl-biru">Member</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="left-side">
            <h1>Top Up Mobile Legends</h1>
            <div class="description">
                <p>Top up ML diamond Mobile Legends harga paling murah. Cara topup MLBB termurah:</p>
                <ol>
                    <li>Masukkan ID & server</li>
                    <li>Pilih Nominal</li>
                    <li>Masukkan jumlah</li>
                    <li>Pilih Pembayaran</li>
                    <li>Tulis Kode Promo (jika ada)</li>
                    <li>Masukkan No WhatsApp</li>
                    <li>Klik Order Now & lakukan Pembayaran</li>
                    <li>Diamonds otomatis masuk ke akun game</li>
                </ol>
            </div>
        </div>
        <form action="hasil.php" method="POST">
            <div class="right-side">
                <div class="data-akun">
                        <h1 style="height: 40px;">Masukkan Data Akun</h1>
                        <input type="number" placeholder="Tulis ID" name="ID" id="ID">
                        <input type="number" placeholder="Tulis Server" name="server" id="server">
                        <p>Untuk menemukan ID & Server akun Anda, klik avatar Anda di pojok kiri atas layar dan buka tab Info Umum. Contoh: 12345678 (9864), maka ID adalah 12345678 dan Server adalah 9864</p>
                </div>
                <form method="POST">
                <div class="nominal">
                    <div class="bungkus-2">
                        <div class="atas">
                            <h2>Pilih Nominal</h2>
                            <div class="item">
                                <div class="title">Coupon Pass</div>
                                <div class="price">Rp 75.217</div>
                                <input type="checkbox" id="item1" name="topup_items[]" value="item1">
                        </div>
                    </div>
                    <h2>Special Items</h2>
                    <div class="tengah">
                        <div class="item">
                            <div class="title">Weekly Diamond Pass</div>
                            <div class="price">Rp 27.990</div>
                            <input type="checkbox" id="item2" name="topup_items[]" value="item2">                    
                        </div>
                        <div class="item">
                            <div class="title">2x Weekly Diamond Pass</div>
                            <div class="price">Rp 55.979</div>       
                            <input type="checkbox" id="item3" name="topup_items[]" value="item3">             
                        </div>
                        <div class="item">
                            <div class="title">4x Weekly Diamond Pass</div>
                            <div class="price">Rp 111.958</div>
                            <input type="checkbox" id="item4" name="topup_items[]" value="item4">                    
                        </div>
                        <div class="item">
                            <div class="title">5x Weekly Diamond Pass</div>
                            <div class="price">Rp 139.947</div>
                            <input type="checkbox" id="item5" name="topup_items[]" value="item5">                    
                        </div>
                        <div class="item">
                            <div class="title">3x Weekly Diamond Pass</div>
                            <div class="price">Rp 83.968</div>
                            <input type="checkbox" id="item6" name="topup_items[]" value="item6">                    
                        </div>
                        <div class="item">
                            <div class="title">Twilight Pass</div>
                            <div class="price">Rp 149.532</div>
                            <input type="checkbox" id="item7" name="topup_items[]" value="item7">                    
                        </div>
                    </div>
                    <h2>Top Up Instant</h2>
                    <div class="bawah">
                        <div class="item">
                            <div class="title">5 (5+0) Diamonds</div>
                            <div class="price">Rp 1.498</div>
                            <input type="checkbox" id="item8" name="topup_items[]" value="item8">                    
                        </div>
                        <div class="item">
                            <div class="title">10 (9+1) Diamonds</div>
                            <div class="price">Rp 3.038</div>
                            <input type="checkbox" id="item9" name="topup_items[]" value="item9">                    
                        </div>
                        <div class="item">
                            <div class="title">14 (13+1) Diamonds</div>
                            <div class="price">Rp 4.051</div>
                            <input type="checkbox" id="item10" name="topup_items[]" value="item10">                    
                        </div>
                        <div class="item">
                            <div class="title">12 (11+1) Diamonds</div>
                            <div class="price">Rp 3.496</div>
                            <input type="checkbox" id="item11" name="topup_items[]" value="item11">
                        </div>
                        <div class="item">
                            <div class="title">15 (15+0) Diamonds</div>
                            <div class="price">Rp 4.494</div>
                            <input type="checkbox" id="item12" name="topup_items[]" value="item12">                    
                        </div>
                        <div class="item">
                            <div class="title">17 (16+1) Diamonds</div>
                            <div class="price">Rp 4.994</div>
                            <input type="checkbox" id="item13" name="topup_items[]" value="item13">
                        </div>
                    </div>
                    <button type="submit" class="submit" value="Check Out" onclick="calculateTotalPrice()">chek out</button>
                    </div>
                </div>
                </form>
            </div>
        </form>
    </div>
    <footer>
        <div class="footer">
            <p>© 2024 | Fauzan Dimas</p>
        </div>
    </footer>
</body>
</html>