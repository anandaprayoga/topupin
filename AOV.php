<?php

include './koneksi.php';

$title = "Mobile Legends: Bang Bang";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TopUpin - Arena of Valor</title>
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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./vendor/stripe/stripe-php/style.css">

    <!-- External Head -->
    <?php include './docs/head.html'; ?>
</head>

<body>
    <!-- Navbar -->
    <?php include './docs/navbar.html'; ?>
    <!-- //Navbar -->

    <!-- Content -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 pt-4">
                <div class="card card-product">
                    <div class="card-body card-chest">
                        <div class="d-flex flex-row justify-items-start">
                            <div class="product-icon">
                                <img src="./dist/img/AOV.jpg" alt="Arena of Valor">
                            </div>
                            <div>
                                <div class="game-publisher">
                                    <span class="type-product">Garena</span>
                                    <p class="product-dev text-muted">Garena</p>
                                </div>
                                <p class="product-name fs-lg-5">Arena of Valor</p>
                            </div>
                        </div>

                        <div class="product-desc mt-1" id="text-container">
                            <p class="p-0 m-0"><roboto>Sedang cari cara top up AOV praktis dan cepat?</roboto></p>
                                <p class="mt-3">Beli voucher AOV di TopUpin jawabannya. Cukup isi ID kamu, tentukan nominal yang diinginkan, dan bayar dengan metode pembayaran pilihanmu. Akun AOV kamu akan terisi voucher tersebut secara otomatis.</p>
                                <p>Top up AOV murah juga dapat kamu lakukan tanpa perlu registrasi atau login. Bahkan, kamu bisa transaksi dengan cepat meski tidak punya kartu kredit.</p>
                                <p><b>Tentang AOV:</b></p>
                                <p>Arena of Valor adalah game mobile dengan genre MOBA (Multiplayer Online Battle Arena) yang dikembangkan oleh Tencent dan dirilis oleh Garena. Game ini dirilis di Indonesia untuk pengguna Android dan iOS pada 6 Juni 2017. Game tersebut juga telah dirilis di beberapa negara lainnya, seperti; Taiwan, Thailand, Vietnam, Korea Selatan, Turki dan Eropa dengan menggunakan judul alternatif seperti Strike of Kings dan Realm of Valor. Beli Voucher AOV di TopUpin sekarang juga!</p>
                        </div>

                        <div class="product-list">
                            <div class="list-icon">
                                <a href="https://play.google.com/store/apps/details?id=com.garena.game.kgid" target="_blank">
                                    <i class="fas fa-download"></i>
                                    <p class="mt-1">Unduh</p>
                                </a>
                            </div>
                            <div class="list-icon">
                                <a href="https://main.aov.garena.co.id/" target="_blank">
                                    <i class="fas fa-globe"></i>
                                    <p class="mt-1">Situs Web</p>
                                </a>
                            </div>
                            <div class="list-icon">
                                <a href="https://www.facebook.com/garena.aov/" target="_blank">
                                    <i class="fas fa-comments"></i>
                                    <p class="mt-1">Komunitas</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" id="checkout-button" onclick="window.location.href='https://www.codashop.com/id-id/arena-of-valor'">Beli Sekarang!</button>
    <!-- /Content -->

    <!-- JavaScript -->
    <script src="./plugins/jquery/jquery-3.6.0.js"></script>
    <script src="./plugins/bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="./dist/js/charge.js"></script>
    <script src="./plugins/owlcarousel/owl.carousel.min.js"></script>
    <script src="./plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.0.1/dist/boxicons.min.js" integrity="sha512-baN0M8ppsz0FvHb9my1X0eQ0eeEXjs0EI+QZvU8NkN072R3DF+hnpO80RKd3q+p/5B4jrD8C3t18B03T7+DI7g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

    <script>
        function TransaksiValid() {
            var nominal = document.forms["form-transaksi"]["nominal"].value;
            var email = document.forms["form-transaksi"]["email"].value;
            var id_game = document.forms["form-transaksi"]["id_game"].value;

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
            })

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
                })
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
                })
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
                })
                return false;
            }

            if (id_game == "") {
                Toast.fire({
                    icon: 'warning',
                    titleText: 'Harap mengisi ID Game!',
                    showClass: {
                        popup: 'animate__animated animate__flipInX'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__flipOutX'
                    }
                })
                return false;
            }
        };
    </script>
</body>

</html>
