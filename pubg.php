<?php

include './koneksi.php';

$title = "PUBG Indonesia";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TopUpin - PUBGM</title>
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
                                <img src="./dist/img/products/pubgm_rps_tile.jpg" alt="">
                            </div>

                            <div>
                                <div class="game-publisher">
                                    <span class="type-product">UC</span>
                                    <p class="product-dev text-muted">Tencent</p>
                                </div>

                                <p class="product-name fs-lg-5">PUBGM Indonesia</p>
                            </div>
                        </div>

                        <div class="product-desc mt-1" id="text-container">
                            <p class="p-0 m-0"><roboto>Jangan biarkan permainan kamu terganggu karena kekurangan UC! Sekarang kamu bisa top up UC Tencent dengan mudah dan cepat melalui TopUpin. Bagaimana caranya? Kamu tinggal masukkan ID kamu lalu pilih</roboto></p>
                                <p class="mt-3">TopUpin menyediakan pilihan opsi pembayaran yang beragam melalui DANA, Go-Pay, SAKUKU, DOKU Wallet, Telkomsel, True Money, AkuLaku, Yap!, BNI, BCA, CIMB Clicks, Permata, Mandiri, Danamon, Maybank BII, Indomaret, Alfamart, pembayaran via kartu kredit sampai pulsa. Tidak mau ribet? Top up diamond FF bisa kamu lakukan tanpa harus registrasi, login dan tanpa kartu kredit. Di TopUpin, semuanya transaksi bisa dilakukan tanpa ribet.</p>
                                Dikembangkan oleh Tencent, PUBGM adalah game battle royale yang bisa dimainkan via Android dan iOS. Popularitasnya sebagai game yang paling banyak diunduh menempatkan PUBGM sebagai “Best Popular Vote Game” dari Google Playstore tahun 2017 lalu.</p>
                            <button type="button" class="moreBtn" id="moreBtn" onclick="moreText()">More</button>
                        </div>

                        <div class="product-list">
                            <div class="list-icon">
                                <a href="https://play.google.com/store/apps/details?id=com.tencent.ig" target="_blank">
                                    <i class="fas fa-download"></i>
                                    <p class="mt-1">Unduh</p>
                                </a>
                            </div>
                            <div class="list-icon">
                                <a href="https://www.pubgmobile.com/id/home.shtml" target="_blank">
                                    <i class="fas fa-globe"></i>
                                    <p class="mt-1">Situs Web</p>
                                </a>
                            </div>
                            <div class="list-icon">
                                <a href="https://www.facebook.com/PUBGMOBILE/" target="_blank">
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
    <button type="submit" id="checkout-button" onclick="window.location.href='https://www.codashop.com/id-id/pubg-mobile-uc-redeem-code'">Beli Sekarang!</button>
    <!-- /Content -->

    <!-- Masukkan Pembayaran disini -->


    <!-- Jquery JS -->
    <script src="./plugins/jquery/jquery-3.6.0.js"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="./plugins/bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Polyfill -->
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>

    <!-- Stripe API -->
    <script src="https://js.stripe.com/v3/"></script>

    <!-- Charge JS -->
    <script src="./dist/js/charge,js"></script>

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

    <script>
        function TransaksiValid() {
            var nominal = document.forms["form-transaksi"]["nominal"].value;
            // var metode = document.forms["form-transaksi"]["pembayaran"].value;
            var email = document.forms["form-transaksi"]["email"].value;
            // var phone = document.forms["form-transaksi"]["phone"].value;

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

            // Nominal Validation
            if (nominal == "") {
                // alert("Mohon memilih Nominal Voucher terlebih dahulu!");
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

            // Metode Validation
            // if (metode == "") {
            //     // alert("Mohon memilih Metode Pembayaran!");
            //     Toast.fire({
            //         icon: 'warning',
            //         titleText: 'Harap pilih metode pembayaran!',
            //         showClass: {
            //             popup: 'animate__animated animate__flipInX'
            //         },
            //         hideClass: {
            //             popup: 'animate__animated animate__flipOutX'
            //         }
            //     })
            //     return false;
            // }

            // Email Validaiton
            var filter = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            if (email == "") {
                // alert("Mohon menginputkan Alamat Email!");
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

            // Telefon Validation
            // if (phone == "") {
            //     // alert("Mohon menginputkan Nomor Whatsapp!");
            //     Toast.fire({
            //         icon: 'warning',
            //         titleText: 'Harap mengisi nomor Whatsapp!',
            //         showClass: {
            //             popup: 'animate__animated animate__flipInX'
            //         },
            //         hideClass: {
            //             popup: 'animate__animated animate__flipOutX'
            //         }
            //     })
            //     return false;
            // }
            // if (isNaN(phone)) {
            //     // alert("Nomor Whatsapp tidak Valid!");
            //     Toast.fire({
            //         icon: 'warning',
            //         titleText: 'Nomor Whatsapp tidak valid!',
            //         showClass: {
            //             popup: 'animate__animated animate__flipInX'
            //         },
            //         hideClass: {
            //             popup: 'animate__animated animate__flipOutX'
            //         }
            //     })
            //     return false;
            // }
        };
    </script>
</body>

</html>
