<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/admin-dashboard.css') }}">
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <div class="logo"> <img src="{{ asset('assets/img/logo.png') }}" alt="imgnotfound"></div>
            <div class="profile-prefiew">
                <img src="{{ asset('assets/img/user.svg') }}" alt="">
                <h3>usernameAdmin</h3>
                <p>ADMIN</p>
            </div>
            <div class="list-link">
                <ul>
                    <li class="active"><i class="fa-solid fa-houser"></i><a href="admin/admin-dashboard.php">Dashboard</a></li>
                    <li class=""><i class="fa-solid fa-bag-shopping"></i><a href="admin/admin-product.php">Product</a></li>
                    <li class=""><i class="fa-solid fa-stopwatch"></i><a href="admin/admin-recent.php">Recent Activity</a></li>
                </ul>
            </div>
            <div class="logout"><a href=""></a></div>
        </div>
    </div>
</body>

</html>
