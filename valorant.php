<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TopUpin - Valorant</title>
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
                                <img src="./dist/img/valorant.jpg" alt="Valorant">
                            </div>
                            <div>
                                <div class="game-publisher">
                                    <span class="type-product">Riot Cash</span>
                                    <p class="product-dev text-muted">Riot Games Services Pte. Ltd.</p>
                                </div>
                                <p class="product-name fs-lg-5">Valorant - Riot Cash Pin</p>
                            </div>
                        </div>

                        <div class="product-desc mt-1" id="text-container">
                            <p class="p-0 m-0"><roboto>Bergabung dengan pertarungan menembak dan top up Riot Cash sekarang di TopUpin!</roboto></p>
                                <p class="mt-3">Beli Riot Cash melalui TopUpin Credits, DANA, OVO, ShopeePay, Telkomsel, Indosat, Tri, XL, GO-PAY, SAKUKU, DOKU WALLET, True Money, LinkAja, BNI, BCA, CIMB Clicks, Mandiri, Permata, Danamon, Maybank BII, Indomaret, Alfamart, dan banyak lagi! Tidak diperlukan kartu kredit atau pendaftaran akun.</p>
                                <p>Caranya mudah! Pilih denominasi yang diinginkan, selesaikan pembayaran, dan Riot Cash akan langsung ditambahkan ke akun Riot Cash kamu!</p>
                        </div>

                        <div class="product-list">
                            <div class="list-icon">
                                <a href="https://playvalorant.com/id-id/?gad=1&gclid=CjwKCAjwyeujBhA5EiwA5WD7_ZxB9RMVAlRV06Tm0QmapU8-DrjM-0-0E7oaVsx8BEndXlCJrp50RxoCVKwQAvD_BwE&gclsrc=aw.ds" target="_blank">
                                    <i class="fas fa-download"></i>
                                    <p class="mt-1">Unduh</p>
                                </a>
                            </div>
                            <div class="list-icon">
                                <a href="https://playvalorant.com/id-id/?gad=1&gclid=CjwKCAjwyeujBhA5EiwA5WD7_ZxB9RMVAlRV06Tm0QmapU8-DrjM-0-0E7oaVsx8BEndXlCJrp50RxoCVKwQAvD_BwE&gclsrc=aw.ds" target="_blank">
                                    <i class="fas fa-globe"></i>
                                    <p class="mt-1">Situs Web</p>
                                </a>
                            </div>
                            <div class="list-icon">
                                <a href="https://www.facebook.com/valorantIndonesia/" target="_blank">
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
    <button type="submit" id="checkout-button" onclick="window.location.href='https://www.codashop.com/id-id/valorant'">Beli Sekarang!</button>
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

            if (nominal == "") {
                alert("Nominal harus dipilih");
                return false;
            }
            if (email == "") {
                alert("Email harus diisi");
                return false;
            }
            if (id_game == "") {
                alert("ID Game harus diisi");
                return false;
            }
            return true;
        }
    </script>

</body>
</html>
