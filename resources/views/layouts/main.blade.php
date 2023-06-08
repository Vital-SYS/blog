<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edica :: Home</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}} ">
    <link rel="stylesheet" href="{{asset('assets/vendors/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/aos/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script src="{{asset('assets/vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/loader.js')}}"></script>
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/main"><img src="{{asset('assets/images/logo.svg')}}" alt="Edica"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto d-flex justify-content-between mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('main.index')}}">Блог</a>
                    </li>
                    <li class="nav-item active">
                        @auth()
                            <a class="nav-link" href="{{route('person.main.index')}}">Личный кабинет</a>
                        @endauth

                        @guest()
                                <a class="nav-link" href="{{route('person.main.index')}}">Войти</a>
                        @endguest
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

@yield('content')

<section class="edica-footer-banner-section">
    <div class="container">
        <div class="footer-banner" data-aos="fade-up">
            <h3 class="banner-title">Хотите опубликовать свой пост?</h3>
            <p class="banner-text">Для получения права публикации, пишите на нашу почту blog@blog.com.</p>
        </div>
    </div>
</section>
<footer class="edica-footer" data-aos="fade-up">
    <div class="container">
        <div class="row footer-widget-area">
            <div class="col-md-3">
                <a href="index.html" class="footer-brand-wrapper">
                    <img src="{{asset('assets/images/logo.sv')}}g" alt="edica logo">
                </a>
                <p class="contact-details">blog@blog.com</p>
                <p class="contact-details">+23 3000 000 00</p>
                <nav class="footer-social-links">
                    <a href="#!"><i class="fab fa-instagram"></i></a>
                    <a href="#!"><i class="fab fa-vk"></i></a>
                    <a href="#!"><i class="fab fa-odnoklassniki"></i></a>
                    <a href="#!"><i class="fab fa-slack"></i></a>
                </nav>
            </div>
            <div class="col-md-3">
                <nav class="footer-nav">
                    <a href="#!" class="nav-link">Компания</a>
                    <a href="#!" class="nav-link">Блог</a>
                    <a href="#!" class="nav-link">О нас</a>
                    <a href="#!" class="nav-link">Политика Конфиденциальности</a>
                    <a href="#!" class="nav-link">Партнеры</a>
                </nav>
            </div>
            <div class="col-md-3">
                <div class="dropdown footer-country-dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="footerCountryDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="flag-icon flag-icon-ru flag-icon-squared"></span> Russia <i class="fas fa-chevron-down ml-2"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="footerCountryDropdown">
                        <button class="dropdown-item" href="#">
                            <span class="flag-icon flag-icon-us flag-icon-squared"></span> United States
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-content">
            <p class="mb-0">© Блог 2023 <a href="https://www.bootstrapdash.com" target="_blank" rel="noopener noreferrer" class="text-reset"></a>. Все права защищены.</p>
        </div>
    </div>
</footer>
<script src="{{asset('assets/vendors/popper.js/popper.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/vendors/aos/aos.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>
</body>

</html>
