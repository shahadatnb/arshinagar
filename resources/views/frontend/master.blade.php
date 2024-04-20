<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arshinagar</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"></script>
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Faveicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Custom css -->
    <link rel="stylesheet" href="{{ asset('frontend/style.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/products.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/footer.css')}}">
</head>

<body>
    <div class="menubar">
        <!-- Why use Container -->
        <div class="container">
            <div class="menubar-top-item">
                <div class="logo">
                    <a href=""><img src="{{ asset('frontend/img/Logo.png')}}" alt=""></a>
                </div>
                <div class="search-bar">
                    <form action="">
                        <select id="selects" name="" id="">
                            <option value="">All</option>
                            <option value="">Book</option>
                            <option value="">Fashion</option>
                            <option value="">New</option>
                            <option value="">Super Store</option>
                        </select>
                        <input type="text" id="inputField">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="menubar-right">                    
                    <a href="{{route('checkout')}}"><i class="fa-solid fa-cart-shopping"></i>{{session('cart') ? count(session('cart')) : 0}}</a>
                    <a class="singin" href="#">Sign in</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Body Area -->
    @yield('content')
            <!-- Footer Area -->
            <div class="col-md-12">
                <div class="footer-area">
                    <div class="row">
                        <!-- footer logo -->
                        <div class="col-md-3">
                            <div class="footer-logo">
                                <a href=""><img src="img/Footer Logo.png" alt=""></a>
                            </div>
                            <div class="footer-social">
                                <p>Stay Connected</p>
                                <div class="social-icon">
                                    <a href="#"><i id="instagram" class="fab fa-whatsapp"></i></a>
                                    <a href="#"><i id="facebook" class="fab fa-facebook"></i></a>
                                    <a href="#"><i id="youtube" class="fab fa-youtube"></i></a>
                                    <a href="#"><i id="linkedin" class="fab fa-linkedin"></i></a>
                                    <a href="#"><i id="twitter" class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="footer-head-office"><h1>প্রধান কার্যালয়</h1>
                                <p><i class="fa-solid fa-square-phone"></i> <strong>+8801711-993829</strong></p>
                                <p><i class="fa-solid fa-envelope"></i> arshinagargroup@yahoo.com</p>
                            </div>
                            <div class="footer-address">
                                <i class="fa-solid fa-location-dot"></i><em>হিসনা রোড,আরশীনগর এলাকা,ফারাক পুর,<br>
                                    তারাগুনিয়া,দৌলতপুর,কুষ্টিয়া।</em>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-corporate-office">
                                <h1>কর্পোরেট অফিস</h1>
                                <p><i class="fa-solid fa-square-phone"></i> +8801811-533480</p>
                                <p><i class="fa-solid fa-envelope"></i> arshinagargroup@gmail.com</p>
                            </div>
                            <div class="footer-address">
                                <i class="fa-solid fa-location-dot"></i><em>৫/৮ কাজী নজরুল ইসলাম রোড,কোর্টপাড়া,কুষ্টিয়া।</em>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom Footer -->
            <div class="col-md-12">
                <div class="bottom-footer">
                    <p>
                        Copyright 
                        <script>
                            var date = new Date();
                                year = date.getFullYear()

                            document.write(year);
                        </script>
                        @ <a href=""><em><strong>Arshinagar Group</strong></em></a> All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script>

    </script>
    <script src="{{ asset('frontend/style.js')}}"></script>
</body>

</html>