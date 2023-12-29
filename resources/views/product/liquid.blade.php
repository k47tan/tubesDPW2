<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liquid</title>

    <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">

    <!--link font awesome-->
    <script src="https://kit.fontawesome.com/ad6991be8a.js" crossorigin="anonymous"></script>
</head>

<body>
    @include('template/navbar')

    <div class="bars">
        <div class="button-choice">
            <a ref="{{ asset('all_product') }}">All</a>
            <a href="{{ asset('atomizer') }}">Atomizer</a>
            <a href="{{ asset('mod') }}">Mod</a>
            <a class="nav-link active" href="{{ asset('liquid') }}">Liquid</a>
            <a href="{{ asset('battery') }}">Battery</a>
        </div>
    </div>

    <div class="container-main">
        @foreach ($data as $liquid)
        <div class="box">
            <div class="card" style="background-color: #b5b0b0;">
                <div class="image">
                    <p> Image Product </p>
                </div>
                <div class="text">
                    <h4>
                        {{ $liquid->name_product }}
                    </h4>
                    </a>
                    <p>
                        {{ $liquid->price_product }}
                    </p>
                </div>
                <div class="link">
                    <a href="../transaksi/addToCart.php?action=plus&id=&link=product">Beli</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @include('template/footer')
</body>

</html>
