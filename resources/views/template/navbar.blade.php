<head>
    <!-- CSS internal -->
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&family=Pangolin&display=swap"
        rel="stylesheet">
    <!-- Icon -->
    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
</head>

<nav>
    <a href="/" class="navbarLogo">
        <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
    </a>
    <div class="navbarText">
        <h1>Warung Vaping</h1>
        <h2>Welcome, {{ auth()->user()->name }}</h2>
    </div>
    <div class="searchBox">
        <input type="text" placeholder="Search..">
        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="boomerang"
            colors="primary:#0a2e5c,secondary:#00000" stroke="10" style="width:30px;height:30px">
        </lord-icon>
    </div>
    <div class="dropdown">
        <a href="javascript:void(0)"><i class="fa-solid fa-user"></i></a>
        <div class="dropdown-content">
            <a href="../user/user-profil.php" class="fa-solid fa-user">
                <i>
                    <h1>katan</h1>
                </i>
            </a>
            <a href="../transaksi/keranjang.php" class="fa-solid fa-cart-shopping">
                <i>
                    Keranjang
                </i>
            </a>
            <a href="../login/logout.php" class="fa-solid fa-right-from-bracket">
                <i>
                    Logout
                </i>
            </a>
        </div>
    </div>
</nav>
