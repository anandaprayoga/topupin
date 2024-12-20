    <?php

    use function PHPSTORM_META\map;

    require_once('vendor/autoload.php');
    require_once('config/db.php');
    require_once('lib/pdo_db.php');
    require_once('models/customer.php');
    require_once('models/transaction.php');

    // Sanitize POST Array
    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

    $nominal = $POST['nominal'];
    $email = $POST['email'];
    $id_game = $POST['id_game'];

    header("location:plugins/midtrans/examples/snap/checkout-process-simple-version.php?nominal=$nominal&email=$email&id_game=$id_game");