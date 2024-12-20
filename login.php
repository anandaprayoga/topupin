<?php
session_start();

// Membuat koneksi
$conn = mysqli_connect('localhost', 'root', '', 'unipin');

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Mempersiapkan dan melakukan bind
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $user, $pass);

    // Menjalankan pernyataan
    $stmt->execute();

    // Menyimpan hasil
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $_SESSION['username'] = $user;
        header("Location: index.php");
        exit();
    } else {
        header("Location: login.html");
    }

    $stmt->close();
}

$conn->close();
?>
