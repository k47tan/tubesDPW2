<?php
include('../connection.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        isset($_POST['USERNAME_USER']) && !empty($_POST['USERNAME_USER']) &&
        isset($_POST['PASSWORD_USER']) && !empty($_POST['PASSWORD_USER']) &&
        isset($_POST['EMAIL_USER']) && !empty($_POST['EMAIL_USER']) &&
        isset($_POST['ADDRESS']) && !empty($_POST['ADDRESS']) &&
        isset($_POST['NUMBER_PHONE']) && !empty($_POST['NUMBER_PHONE'])
    ) {
        // Buat query untuk memasukkan data user yang tadi diinputkan
        $query = "INSERT INTO user(ID_USER, EMAIL_USER, USERNAME_USER, PASSWORD_USER, ADDRESS, NUMBER_PHONE, SALDO) 
            VALUES (0, '$_POST[EMAIL_USER]', '$_POST[USERNAME_USER]', '$_POST[PASSWORD_USER]', '$_POST[ADDRESS]', '$_POST[NUMBER_PHONE]', 0)";

        //eksekusi query
        if ($connection->query($query) === TRUE) {
            header("Location: ../login/signin.php");
            exit();
        } else {
            echo "Error: " . $query . "<br>" . $connection->error;
        }
    } else {
        echo "Error: Form data tidak lengkap. Semua field harus diisi.";
    }

    // Tutup koneksi database
    $connection->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&family=Pangolin&display=swap"
        rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="background"></div>
    <div class="login">
        <h2>SignUp</h2>
        <form action="" method="POST" id="form">
            <div class="box">
                <input type="text" name="USERNAME_USER" required>
                <label for="USERNAME_USER">Username</label>
            </div>
            <div class="box">
                <input type="password" name="PASSWORD_USER" required>
                <label for="PASSWORD_USER">Password</label>
            </div>
            <div class="box">
                <input type="email" name="EMAIL_USER" required>
                <label for="EMAIL_USER">Email</label>
            </div>
            <div class="box">
                <input type="text" name="ADDRESS" required>
                <label for="ADDRESS">Address</label>
            </div>
            <div class="box">
                <input type="tel" name="NUMBER_PHONE" required>
                <label for="NUMBER_PHONE">No HandPhone</label>
            </div>
            <button class="button">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
            </button>
            <div class="pindah">
                <a href="../login/signin.php"> You have an account?</a>
            </div>
        </form>
    </div>
</body>

</html>