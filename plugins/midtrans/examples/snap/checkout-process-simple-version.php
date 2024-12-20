<?php
// This is just for very basic implementation reference, in production, you should validate the incoming requests and implement your backend more securely.
// Please refer to this docs for snap popup:
// https://docs.midtrans.com/en/snap/integration-guide?id=integration-steps-overview

namespace Midtrans;

require_once dirname(__FILE__) . '/../../Midtrans.php';
// Set Your server key
// can find in Merchant Portal -> Settings -> Access keys
Config::$serverKey = 'SB-Mid-server-UPbJEoOciXY9r8VPAnqSybHG';
Config::$clientKey = 'SB-Mid-client-cV8o6l921bZBCM03';

// non-relevant function only used for demo/example purpose
printExampleWarningMessage();

// Uncomment for production environment
// Config::$isProduction = true;
Config::$isSanitized = Config::$is3ds = true;
$nominal = $_GET['nominal'];
$email = $_GET['email'];
$id_game = $_GET['id_game'];

include '../../../../koneksi.php';
$query="";
// Required
$transaction_details = array(
    'order_id' => rand(),
    'gross_amount' => $nominal, // no decimal allowed for creditcard
);
// Optional
$item_details = array (
    array(
        'id' => 'a1',
        'price' => $nominal,
        'quantity' => 1,
        'name' => "Apple"
    ),
  );
// Optional
$customer_details = array(
    'first_name'    => "Andri",
    'last_name'     => "Litani",
    'email'         => $email,
    'phone'         => "081122334455",
);
// Fill transaction details
$transaction = array(
    'transaction_details' => $transaction_details,
    'customer_details' => $customer_details,
    'item_details' => $item_details,
);

$snap_token = '';
try {
    $snap_token = Snap::getSnapToken($transaction);
}
catch (\Exception $e) {
    echo $e->getMessage();
}
// echo "snapToken = ".$snap_token;

function printExampleWarningMessage() {
    if (strpos(Config::$serverKey, 'your ') != false ) {
        echo "<code>";
        echo "<h4>Please set your server key from sandbox</h4>";
        echo "In file: " . __FILE__;
        echo "<br>";
        echo "<br>";
        echo htmlspecialchars('Config::$serverKey = \'SB-Mid-server-UPbJEoOciXY9r8VPAnqSybHG\';');
        die();
    } 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../login.css">
    <script src="https://kit.fontawesome.com/9ce994caf4.js" crossorigin="anonymous"></script>
    <title>Login Page</title>
</head>
<body>
    <div class="input">
        <h1>Detail Pembelian</h1>
        <div class="box-input">
            <!-- <i class="fa-solid fa-user"></i> -->
            <label for="">Harga : <?php echo $nominal; ?></label>
        </div>
        <div class="box-input">
            <!-- <i class="fa-solid fa-lock"></i> -->
            <label for="">ID game: <?php echo $id_game; ?></label>
        </div>
        <br>
        <!-- <button type="submit" name="login" class="btn-input">Login</button> -->
        <button class="btn-input" id="pay-button">Pay!</button>
        <!-- TODO: Remove ".sandbox" from script src URL for production environment. Also input your client key in "data-client-key" -->
        <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<?php echo Config::$clientKey;?>"></script>
        <script type="text/javascript">
            document.getElementById('pay-button').onclick = function(){
                // SnapToken acquired from previous step
                snap.pay('<?php echo $snap_token?>');
            };
        </script>
    </div>
</body>
</html>