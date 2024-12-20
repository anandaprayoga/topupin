

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `customers` (
  `id_customer` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `games` (
  `id_game` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `developer` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `games` (`id_game`, `nama`, `developer`, `gambar`, `nama_file`) VALUES
(1, 'Steam Wallet Code (ID)\r\n', 'Steam (ID)', 'dist/img/Steam.jpg', 'produk.php'),
(2, 'Kode Voucher Google Play', 'Google Play', 'dist/img/googleplay.jpg', 'produk2.php'),
(3, 'Mobile Legends: Bang Bang', 'Moonton', 'dist/img/MLBB.png', 'mobilelegend.php'),
(4, 'PUBG Mobile', 'Tencent Games', 'dist/img/PUBG.png', 'pubg.php'),
(5, 'Free Fire', 'Garena', 'dist/img/freefire.jpg', 'freefire.php'),
(6, 'Valorant', 'Riot Games', 'dist/img/valorant.jpg', 'valorant.php'),
(7, 'Arena of Valor', 'Garena', 'dist/img/AOV.jpg', 'AOV.php'),
(8, 'League of Legends', 'Riot Games', 'dist/img/LOL.jpg', 'LeagueOfLegend.php'),
(9, 'Supersus', 'PI Productions', 'dist/img/supersus.png', 'SuperSUS.php'),
(10, 'Higgs Domino', 'Poker City', 'dist/img/higgs.png', 'higgsdomino.php'),
(11, 'Genshin Impact', 'Mihoyo', 'dist/img/genshin.png', 'genshinimpact.php'),
(12, 'Point Blank', 'Zepetto', 'dist/img/PB.png', 'PointBlank.php');

CREATE TABLE `pembayaran` (
  `id_bayar` int(11) NOT NULL,
  `metode` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `pembayaran` (`id_bayar`, `metode`, `gambar`) VALUES
(1, 'Debit/Kredit', ''),
(2, 'Telkomsel', ''),
(3, 'XL', ''),
(4, 'Tri', ''),
(5, 'Indosat', ''),
(6, 'Gopay', ''),
(7, 'Dana', ''),
(8, 'Ovo', ''),
(9, 'Shopeepay', ''),
(10, 'Alfamart', ''),
(11, 'Indomaret', '');

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_game` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `product` (`id_product`, `name`, `id_game`, `amount`, `created_at`) VALUES
(5, '200 Diamonds + 22 Bonus', 3, 57000, '2023-06-11 22:04:58'),
(14, '217 Diamonds + 23 Bonus', 3, 65000, '2023-06-11 18:27:16'),
(15, '256 Diamonds + 40 Bonus', 3, 76000, '2023-06-11 18:28:59'),
(16, '333 Diamonds + 37 Bonus', 3, 95000, '2023-06-11 22:01:11'),
(17, '367 Diamonds + 41 Bonus', 3, 104500, '2023-06-11 22:02:14'),
(18, '503 Diamonds + 65 Bonus', 3, 150000, '2023-06-11 22:03:00'),
(19, '774 Diamonds + 101 Bonus', 3, 230000, '2023-06-11 22:04:24'),
(20, '1003 Diamonds + 156 Bonus', 3, 285000, '2023-06-11 22:05:19'),
(21, '1708 Diamonds + 302 Bonus', 3, 475000, '2023-06-11 22:06:30'),
(22, '4003 Diamonds + 827 Bonus', 3, 1140000, '2023-06-11 22:07:23'),
(23, '5003 Diamonds + 1047 Bonus', 3, 1425000, '2023-06-11 22:08:02'),
(24, 'Steam Wallet IDR 8,000', 1, 11000, '2023-06-11 22:09:28'),
(25, 'Steam Wallet IDR 6,000', 1, 8000, '2023-06-12 03:36:28'),
(26, 'Steam Wallet IDR 12,000', 1, 16000, '2023-06-12 03:37:22'),
(27, 'Steam Wallet IDR 45,000', 1, 58000, '2023-06-12 03:37:22'),
(28, 'Steam Wallet IDR 60,000', 1, 78000, '2023-06-12 03:37:22'),
(29, 'Steam Wallet IDR 90,000', 1, 102000, '2023-06-12 03:37:22'),
(30, 'Steam Wallet IDR 120,000', 1, 150000, '2023-06-12 03:37:22'),
(31, 'Steam Wallet IDR 250,000', 1, 312000, '2023-06-12 03:37:22'),
(32, 'Steam Wallet IDR 400,000', 1, 499500, '2023-06-12 03:37:22'),
(33, 'Steam Wallet IDR 600,000', 1, 750000, '2023-06-12 03:36:55'),
(34, 'Kode Voucher 5,000', 2, 6000, '2023-06-12 04:27:47'),
(35, 'Kode Voucher 10,000', 2, 12000, '2023-06-12 04:27:47'),
(36, 'Kode Voucher 20,000', 2, 24000, '2023-06-12 04:27:47'),
(37, 'Kode Voucher 50,000', 2, 58000, '2023-06-12 04:27:47'),
(38, 'Kode Voucher 100,000', 2, 116000, '2023-06-12 04:27:47'),
(39, 'Kode Voucher 150,000', 2, 174000, '2023-06-12 04:27:47'),
(40, 'Kode Voucher 300,000', 2, 348000, '2023-06-12 04:27:47'),
(41, 'Kode Voucher 500,000', 2, 580000, '2023-06-12 04:27:47'),
(42, 'UC 50 + 2', 4, 10000, '2023-06-12 04:35:09'),
(43, 'UC 100 + 5', 4, 20000, '2023-06-12 04:35:09'),
(44, 'UC 250 + 13', 4, 50000, '2023-06-12 04:35:09'),
(45, 'UC 500 + 30', 4, 100000, '2023-06-12 04:35:09'),
(46, 'UC 1500 + 150', 4, 300000, '2023-06-12 04:35:09'),
(47, 'UC 2500 + 375', 4, 500000, '2023-06-12 04:35:09'),
(48, '5 Free Fire Diamonds', 5, 1000, '2023-06-12 06:06:11'),
(49, '12 Free Fire Diamonds', 5, 2000, '2023-06-12 06:06:11'),
(50, '50 Free Fire Diamonds', 5, 8000, '2023-06-12 06:06:11'),
(51, '70 Free Fire Diamonds', 5, 10000, '2023-06-12 06:06:11'),
(52, '140 Free Fire Diamonds', 5, 20000, '2023-06-12 06:06:11'),
(53, '355 Free Fire Diamonds', 5, 50000, '2023-06-12 06:06:11'),
(54, '720 Free Fire Diamonds', 5, 100000, '2023-06-12 06:06:11'),
(55, 'Riot Cash 45,000 IDR', 6, 54000, '2023-06-12 06:16:53'),
(56, 'Riot Cash 75,000 IDR', 6, 89000, '2023-06-12 06:16:53'),
(57, 'Riot Cash 149,000 IDR', 6, 178000, '2023-06-12 06:16:53'),
(58, 'Riot Cash 219,000 IDR', 6, 262000, '2023-06-12 06:16:53'),
(59, 'Riot Cash 359,000 IDR', 6, 429000, '2023-06-12 06:16:53'),
(60, 'Riot Cash 739,000 IDR', 6, 883000, '2023-06-12 06:16:53'),
(61, '40 AOV Vouchers', 7, 10000, '2023-06-12 06:52:11'),
(62, '90 AOV Vouchers', 7, 20000, '2023-06-12 06:52:11'),
(63, '230 AOV Vouchers', 7, 50000, '2023-06-12 06:52:11'),
(64, '470 AOV Vouchers', 7, 100000, '2023-06-12 06:52:11'),
(65, '950 AOV Vouchers', 7, 200000, '2023-06-12 06:52:11'),
(66, '1,430 AOV Vouchers', 7, 300000, '2023-06-12 06:52:11'),
(67, '2,390 AOV Vouchers', 7, 500000, '2023-06-12 06:52:11'),
(68, '150 RP', 8, 15000, '2023-06-12 06:52:11'),
(69, '775 RP', 8, 75000, '2023-06-12 06:52:11'),
(70, '1400 RP', 8, 132000, '2023-06-12 06:52:11'),
(71, '2850 RP', 8, 265000, '2023-06-12 06:52:11'),
(72, '5250 RP', 8, 474000, '2023-06-12 06:52:11'),
(73, '10000 RP', 8, 854000, '2023-06-12 06:52:11'),
(74, '100 Goldstar', 9, 14000, '2023-06-12 06:52:11'),
(75, '310 Goldstar', 9, 39000, '2023-06-12 06:52:11'),
(76, '520 Goldstar', 9, 69000, '2023-06-12 06:52:11'),
(77, '1060 Goldstar', 9, 139000, '2023-06-12 06:52:11'),
(78, '2180 Goldstar', 9, 279000, '2023-06-12 06:52:11'),
(79, '5600 Goldstar', 9, 679000, '2023-06-12 06:52:11'),
(80, '30M Koin Emas-D', 10, 5000, '2023-06-12 07:07:45'),
(81, '60M Koin Emas-D', 10, 10000, '2023-06-12 07:07:45'),
(82, '200M Koin Emas-D', 10, 30000, '2023-06-12 07:07:45'),
(83, '400M Koin Emas-D', 10, 60000, '2023-06-12 07:07:45'),
(84, '2B Koin Emas-D', 10, 250000, '2023-06-12 07:07:45'),
(85, '4B Koin Emas-D', 10, 500000, '2023-06-12 07:07:45'),
(86, '60 Genesis Crystals', 11, 17000, '2023-06-12 07:07:45'),
(87, '300+30 Genesis Crystals', 11, 81000, '2023-06-12 07:07:45'),
(88, '980+110 Genesis Crystals', 11, 255000, '2023-06-12 07:07:45'),
(89, '1980+260 Genesis Crystals', 11, 489000, '2023-06-12 07:07:45'),
(90, '3280+600 Genesis Crystals', 11, 815000, '2023-06-12 07:07:45'),
(91, '6480+1600 Genesis Crystals', 11, 1629000, '2023-06-12 07:07:45'),
(92, '1200 PB Cash', 12, 10000, '2023-06-12 07:07:45'),
(93, '2400 PB Cash', 12, 20000, '2023-06-12 07:07:45'),
(94, '6000 PB Cash', 12, 50000, '2023-06-12 07:07:45'),
(95, '12000 PB Cash', 12, 100000, '2023-06-12 07:07:45'),
(96, '24000 PB Cash', 12, 200000, '2023-06-12 07:07:45'),
(97, '36000 PB Cash', 12, 300000, '2023-06-12 07:07:45');


CREATE TABLE `transactions` (
  `id_transaction` varchar(255) NOT NULL,
  `id_customer` varchar(255) NOT NULL,
  `id_product` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `risk` varchar(255) DEFAULT NULL,
  `id_bayar` int(11) DEFAULT NULL,
  `card` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `users` (
  `id_admin` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id_admin`, `name`, `username`, `password`, `created_at`) VALUES
(1, 'Hasan Ferry', 'ferry', 'd41d8cd98f00b204e9800998ecf8427e', '2022-03-27'),
(5, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2023-06-02'),
(6, 'tes', 'te', 'd41d8cd98f00b204e9800998ecf8427e', '2023-06-11');

ALTER TABLE `customers`
  ADD PRIMARY KEY (`id_customer`);

ALTER TABLE `games`
  ADD PRIMARY KEY (`id_game`);

ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`);

ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_game` (`id_game`);

ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id_transaction`),
  ADD KEY `id_bayar` (`id_bayar`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_product` (`id_product`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id_admin`);

ALTER TABLE `games`
  MODIFY `id_game` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

ALTER TABLE `pembayaran`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

ALTER TABLE `users`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_game`) REFERENCES `games` (`id_game`);

ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`id_bayar`) REFERENCES `pembayaran` (`id_bayar`),
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id_customer`),
  ADD CONSTRAINT `transactions_ibfk_3` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);
COMMIT;
