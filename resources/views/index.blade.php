<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Diamonds</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">

                <nav class="nav">
                    <a class="nav__link active" href="#home">Home</a>
                    <a class="nav__link" href="#products">Products</a>
                    <a class="nav__link" href="#details">Details</a>
                    <a href="/admin/dashboard" class="nav__link">Admin</a>
                    <a href="{{ route('auth.login') }}" class="nav__link">Login</a>
                    <a href="{{ route('auth.register') }}" class="nav__link">Register</a>
                </nav>
            </div>
        </div>
    </header>
    <div class="intro" id="home">
        <div class="container">
            <div class="intro__inner">
                <h1 class="intro__title">Perhaps time’s definition of coal is the diamond</h1>
            </div>
        </div>
    </div>
    <!-- /.intro -->
    <!-- Categories Section Begin -->
    <section class="section" id="products">
        <div class="container">
            <div class="section__header">
                <h2 class="section__title">PRODUCTS</h2>
            </div>
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg">
                            <img width="225px;" heiht="165px;" src="{{ asset('images/d4.png') }}" alt="">
                            <hr>
                            <div style="text-align:center;">
                                <h6>1.00 Carat E SI1 Excellent Cut
                                    Round Diamond</h6>
                                <h2 class="diamondprice">$3,930</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg">
                            <img width="225px;" heiht="165px;" src="{{ asset('images/d3.png') }}" alt="">
                            <hr>
                            <div style="text-align:center;">
                                <h6>1.00 Carat E SI1 Excellent Cut
                                    Round Diamond</h6>
                                <h2 class="diamondprice">$3,930</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg">
                            <img width="225px;" heiht="165px;" src="{{ asset('images/d4.png') }}" alt="">
                            <hr>
                            <div style="text-align:center;">
                                <h6>1.00 Carat E SI1 Excellent Cut
                                    Round Diamond</h6>
                                <h2 class="diamondprice">$3,930</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg">
                            <img width="225px;" heiht="165px;" src="{{ asset('images/d3.png') }}" alt="">
                            <hr>
                            <div style="text-align:center;">
                                <h6>1.00 Carat E SI1 Excellent Cut
                                    Round Diamond</h6>
                                <h2 class="diamondprice">$3,930</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg">
                            <img width="225px;" heiht="165px;" src="{{ asset('images/d4.png') }}" alt="">
                            <hr>
                            <div style="text-align:center;">
                                <h6>1.00 Carat E SI1 Excellent Cut
                                    Round Diamond</h6>
                                <h2 class="diamondprice">$3,930</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section Begin -->
    <section class="section" id="details">
        <div class="container">
            <div class="section__header">
                <h2 class="section__title">DETAILS</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large" src="{{ asset('images/d1.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 align-self-center">
                    <div class="product__details__text">
                        <h4>1.01 CARAT H-VS2 EXCELLENT CUT
                            ROUND DIAMOND</h4>
                        <p>SKU:7950032</p>
                        <h2 class="diamondprice">$2,930</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--footer starts from here-->
    <footer class="footer">
        <div class="container">
            <!--foote_bottom_ul_amrc ends here-->
            <p class="text-center">Copyright @2021 | Designed With by <a href="#">Lambos Lucian aaw1713.lamboslucian@gmail.com</a></p>
            <!--social_footer_ul ends here-->
        </div>

    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Product Details Section End -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>