<?php
session_start(); // Mulai sesi

// Simpan username dan password yang benar di sini
$correct_username = "user123";
$correct_password = "password123";

// Periksa apakah pengguna telah mengirimkan formulir login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Periksa apakah username dan password yang dimasukkan oleh pengguna cocok
    if ($_POST["username"] == $correct_username && $_POST["password"] == $correct_password) {
        // Login berhasil, atur sesi dan redirect ke halaman selamat datang
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $correct_username;
        header("location: welcome.php");
        exit;
    } else {
        $login_err = "Username atau password salah";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<h2>Login</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
    </div>
    <div>
        <input type="submit" value="Login">
    </div>
    <?php if (!empty($login_err)) { ?>
        <p><?php echo $login_err; ?></p>
    <?php } ?>
</form>

</body>
</html>
