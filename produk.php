<?php
include './koneksi.php';

$title = "Steam Wallet (USD)";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TopUpin - Steam Wallet (USD)</title>
    <style>#checkout-button {
            display: block;
            margin: 0 auto; /* Memposisikan tombol di tengah */
            padding: 8px 15px;
            background-color: #ff7f00; /* Warna oranye */
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: auto;
            text-align: center; /* Teks berada di tengah tombol */
        }

        #checkout-button:hover {
            background-color: #ff6600; /* Warna oranye lebih gelap saat hover */
        }
</style>

    <link rel="stylesheet" href="./vendor/stripe/stripe-php/style.css">

    <?php include './docs/head.html'; ?>
</head>

<body>
    <!-- Navbar -->
    <?php include './docs/navbar.html'; ?>
    <!-- //Navbar -->

    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 pt-4">
                <div class="card card-product">
                    <div class="card-body card-chest">
                        <div class="d-flex flex-row justify-items-start">
                            <div class="product-icon">
                                <img src="./dist/img/Steam.jpg" alt="">
                            </div>

                            <div>
                                <div class="game-publisher">
                                    <span class="type-product">Voucher</span>
                                    <p class="product-dev text-muted">Steam ID</p>
                                </div>

                                <p class="product-name fs-lg-5">Steam Wallet Code (ID)</p>
                            </div>
                        </div>

                        <div class="product-desc mt-1" id="text-container">
                            <p class="p-0 m-0"><strong><em>**Kode dapat ditukarkan sesuai dengan Wilayah Steam Wallet / Pengaturan Mata Uang Anda.**</em></strong></p>
                                <p class="mt-3">Mau top up Steam Wallet? Kamu bisa mendapatkan Steam Wallet Code dengan membelinya di TopUpin. Caranya sangat mudah, tinggal pilih saja nominal isi Steam Wallet yang kamu inginkan. Kamu bisa beli voucher Steam dengan nominal mulai dari 1 USD sampai 100 USD.</p>
                                <p>Beli Steam Wallet di TopUpin bisa dilakukan via Visa dan MasterCard. Top up Steam Wallet juga bisa dilakukan tanpa harus mendaftar, login dan tanpa ribet aktifasi.</p>
                                <p>Steam adalah layanan distribusi digital video game yang dibuat oleh Valve. Awalnya diluncurkan hanya untuk pembaruan otomatis game mereka, sekarang Steam bisa digunakan untuk membeli dan melakukan pembaruan game dari pihak ketiga. Kamu bisa memanfaatkan Steam dengan beli voucher Steam di TopUpin.</p>
                        </div>

                        <div class="product-list">
                            <div class="list-icon">
                                <a href="https://store.steampowered.com/about/" target="_blank">
                                    <i class="fas fa-download"></i>
                                    <p class="mt-1">Unduh</p>
                                </a>
                            </div>
                            <div class="list-icon">
                                <a href="https://store.steampowered.com/" target="_blank">
                                    <i class="fas fa-globe"></i>
                                    <p class="mt-1">Situs Web</p>
                                </a>
                            </div>
                            <div class="list-icon">
                                <a href="https://steamcommunity.com/" target="_blank">
                                    <i class="fas fa-comments"></i>
                                    <p class="mt-1">Komunitas</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" id="checkout-button" onclick="window.location.href='https://www.codashop.com/id-id/steam-wallet-code-indonesia'">Beli Sekarang!</button>
            <!-- <div class="col-sm-12 col-md-12 col-lg-12 pt-4 form-transaction">
                <form autocomplete="off" action="./pilih_metode.php" method="POST" name="form-transaksi" onsubmit="return TransaksiValid()" id="payment-form">
                    <div class="card card-product">
                        <div class="card-body card-chest">
                            <div class="d-flex flex-row justify-items-start step-title mb-4">
                                <div class="step-circle">1</div>
                                <span class="text-uppercase step-right-circle">Pilih Nominal</span>
                            </div>
                            <div class="input-grid-container">
                                <?php
                                    $brgs = mysqli_query($koneksi, "SELECT * FROM product WHERE id_game = 1 ORDER BY amount ASC");
                                    $no = 1;
                                    while ($p = mysqli_fetch_array($brgs)) {
                                    $no++
                                ?>
                                <div class="input-grid-items">
                                    <input type="radio" name="nominal" id="<?php echo $no ?>" class="hidebx" value="<?php echo $p['amount']?>">
                                    <label for="<?php echo $no ?>" class="lbl-radio">
                                        <div class="display-box">
                                            <span class="nominal"><?php echo $p['name']?> Rp.<?php echo $p['amount']?></span>
                                        </div>
                                    </label>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="card card-product mb-4">
                        <div class="card-body card-chest-2">
                            <div class="d-flex flex-row justify-items-start step-title mb-4">
                                <div class="step-circle">2</div>
                                <span class="text-uppercase step-right-circle">Masukkan Email dan ID Pengguna</span>
                            </div>

                            <div class="input-grid-container-2">
                                <div class="input-grid-items-2 input-group input-group-sm mb-2">
                                    <input type="text" name="email" id="email" placeholder="Email Address" class="form-control input-email-telfon StripeElement StripeElement--empty"></input>
                                </div>

                                <div class="input-grid-items-2 input-group input-group-sm">
                                    <input type="text" name="id_game" id="id_game" placeholder="ID Games" class="form-control input-email-telfon StripeElement StripeElement--empty"></input>
                                </div>
                            </div>

                            <div class="buy-button mt-2">
                                <div id="card-errors" role="alert" class="card-error"></div>
                                <p class="catatan-buy">Catatan: Voucher akan dikirim ke email di atas setelah transaksi selesai. Silakan hubungi Layanan Pelanggan jika mengalami masalah.</p>
                                <button type="submit" id="checkout-button">Beli Sekarang!</button>
                            </div>
                        </div>
                    </div> -->
                </form>
            </div>
        </div>
    </div>
    <!-- /Content -->

    <!-- Jquery JS -->
    <script src="./plugins/jquery/jquery-3.6.0.js"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="./plugins/bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Polyfill -->
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>

    <!-- Stripe API -->
    <script src="https://js.stripe.com/v3/"></script>

    <!-- Charge JS -->
    <script src="./dist/js/charge.js"></script>

    <!-- OwlCarousel JS -->
    <script src="./plugins/owlcarousel/owl.carousel.min.js"></script>

    <!-- SweetAlert2 JS -->
    <script src="./plugins/sweetalert2/sweetalert2.all.min.js"></script>

    <!-- Box Icons JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.0.1/dist/boxicons.min.js" integrity="sha512-baN0M8ppsz0FvHb9my1X0eQ0eeEXjs0EI+QZvU8NkN072R3DF+hnpO80RKd3q+p/5B4jrD8C3t18B03T7+DI7g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Main JS -->
    <script src="./dist/js/main.js"></script>

    <script>
        function moreText() {
            const readMoreBtn = document.getElementById("moreBtn");
            const textContainer = document.getElementById("text-container");

            textContainer.classList.toggle("show-more");
            if (readMoreBtn.innerText === "More") {
                readMoreBtn.innerText = "Less";
            } else {
                readMoreBtn.innerText = "More";
            }
        };
    </script>

    <!-- <script>
        function TransaksiValid() {
            var nominal = document.forms["form-transaksi"]["nominal"].value;
            var email = document.forms["form-transaksi"]["email"].value;

            const Toast = Swal.mixin({
                toast: false,
                position: 'center',
                showConfirmButton: false,
                timer: 2000,
                allowOutsideClick: true,
                padding: '.2em',
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            if (nominal == "") {
                Toast.fire({
                    icon: 'warning',
                    titleText: 'Harap pilih item terlebih dahulu!',
                    showClass: {
                        popup: 'animate__animated animate__flipInX'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__flipOutX'
                    }
                });
                return false;
            }

            var filter = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            if (email == "") {
                Toast.fire({
                    icon: 'warning',
                    titleText: 'Harap mengisi alamat email!',
                    showClass: {
                        popup: 'animate__animated animate__flipInX'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__flipOutX'
                    }
                });
                return false;
            }

            if (!filter.test(email)) {
                Toast.fire({
                    icon: 'warning',
                    titleText: 'Alamat Email tidak valid!',
                    showClass: {
                        popup: 'animate__animated animate__flipInX'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__flipOutX'
                    }
                });
                return false;
            }
        };
    </script> -->
</body>

</html>
