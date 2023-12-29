<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <title>Login</title>
</head>

<body>
    <div class="Background"></div>
    <div class="login">
        <h2>SigIn</h2>
        <form action="login/proses" method="POST" id="form">
            @csrf
            <div class="box">
                <input type="text" name="name" required>
                <label for="name">Username</label>
                <!-- Tampilkan pesan error untuk username -->
                <span class="error">
                </span>
            </div>
            <div class="box">
                <input type="password" name="password" required>
                <label for="password">Password</label>
                <!-- Tampilkan pesan error untuk password -->
                <span class="error">
                </span>
            </div>
            <button class="button">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                LogIn
            </button>
            <div class="pindah">
                <a href="../login/signup.php"> You don't have an account?</a>
            </div>

        </form>
    </div>
</body>

</html>
