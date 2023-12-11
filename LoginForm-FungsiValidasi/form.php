<?php
// Memasukkan fungsi otentikasi dari fungsi1.php
include 'fungsi1.php';

// Variabel untuk pesan otentikasi
$pesanOtentikasi = '';

// Memeriksa apakah formulir dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil username dan password dari formulir
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Melakukan otentikasi menggunakan fungsi ototentikasi
    if (ototentikasi($username, $password)) {
        // Otentikasi berhasil
        $pesanOtentikasi = "Login berhasil!";
        // menambahkan tindakan lebih lanjut setelah otentikasi berhasil di sini
    } else {
        // Otentikasi gagal
        $pesanOtentikasi = "Login gagal. Silakan periksa kembali.";
    }
}
?>

<!-- Form HTML untuk otentikasi -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Form Otentikasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(120deg, #ddeeff 0%, #b4d7f1 100%);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            width: 320px;
            max-width: 90%;
        }

        .container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #1e90ff;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            transition: border-color 0.3s ease-in-out;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #1e90ff;
        }

        input[type="submit"] {
            background-color: #1e90ff;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        input[type="submit"]:hover {
            background-color: #007bff;
        }

        .pesan {
            font-family: 'Poppins', sans-serif;
            text-align: center;
            color: #1e90ff;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Form Login</h2>
        <form method="post" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <input type="submit" value="Login">
        </form>

        <!-- Menampilkan pesan otentikasi -->
        <div class="pesan">
            <?php echo $pesanOtentikasi; ?>
        </div>
    </div>
</body>

</html>