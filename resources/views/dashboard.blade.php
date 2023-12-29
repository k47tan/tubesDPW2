<!-- resources/views/dashboard.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Vaping</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&family=Pangolin&display=swap"
        rel="stylesheet">
</head>

<body>
    @include('template.navbar')
    <div class="background"></div>
    <div class="product">
        <div class="title-kategori">
            <h2>Product Kategori</h2>
        </div>
        <div class="kategori">
            <a href="atomizer"><img src="{{ asset('assets/img/product1.png') }}" alt=""></a>
            <a href="mod"><img src="{{ asset('assets/img/product2.png') }}" alt=""></a>
            <a href="liquid"><img src="{{ asset('assets/img/product3.png') }}" alt=""></a>
            <a href="battery"><img src="{{ asset('assets/img/product4.png') }}" alt=""></a>
        </div>
        <div class="view-more" style="--clr:#6da5c0">
            <a href="all_product" data-text="&nbsp;View More">&nbsp;View More&nbsp;</a>
        </div>
    </div>
    @include('template/footer')
</body>

</html>
