<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/favicon.png" type="image/png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Мат. Моделированием</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/mathModeling/public/css/bootstrap.css">
    <link rel="stylesheet" href="/mathModeling/public/css/app.css">
    <link rel="stylesheet" href="/mathModeling/vendor/linericon/style.css">
    <link rel="stylesheet" href="/mathModeling/public/css/font-awesome.min.css">
    <link rel="stylesheet" href="/mathModeling/vendor/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/mathModeling/public/css/magnific-popup.css">
    <link rel="stylesheet" href="/mathModeling/vendor/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="/mathModeling/vendor/animate-css/animate.css">
    <link rel="stylesheet" href="/mathModeling/vendor/flaticon/flaticon.css">
    <!-- main css -->
    <link rel="stylesheet" href="/mathModeling/public/css/style.css">
</head>

<body>

<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container" style="height: 74px;">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html"><img src="/mathModeling/public/img/logo_white_2.png" alt="" width="250" height="100"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-center">
                        <li class="nav-item active"><a class="nav-link" href="/">Главная</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Видео</a>
                        <li class="nav-item"><a class="nav-link" href="#projects">проекты</a>
                        <li class="nav-item"><a class="nav-link" href="#about">О нас</a>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <div class="info_item d-flex flex-row">
                            <i class="fa fa-envelope" style="color: white; margin-right:10px;"></i>
                            <h6><a href="mailto:mat.mod@esterlab.org" style="color: white;">mat.mod@esterlab.org</a></h6>
                        </div>
                        <div class="info_item d-flex flex-row">
                            <i class="fa fa-facebook-f" style="color: white; margin-right:16px;"></i>
                            <h6><a href="https://www.facebook.com/Math.Modeling" style="color: white;">Присоединяйся к нам!</a></h6>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================Header Menu Area =================-->

<!--================Home Banner Area =================-->
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="home_left_img">
                        <img class="img-fluid" src="/mathModeling/public/img/banner/home-left.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7" style="padding-bottom: 60px;" id="consult-form-wrapper">
                    <div class="banner_content">
                        <h2>
                            Проблемы с мат. моделированием ?<br>
                        </h2>
                        <p>
                            Мы специализируемся по расчетам на прочность - статическую, динамическую.
                            Решаем задачи газодинамики и термодинамики! Владеем основами расчетов на устойчивость и классом нелинейных задач (контактные и пластические НДС).
                        </p>
                        {{-- vue component of the form --}}
                        <consult-form></consult-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Start About Us Area =================-->
<section class="about_us_area section_gap_top" id="about">
    <div class="container">
        <div class="row about_content align-items-center">
            <div class="col-lg-6">
                <div class="section_content" id="video">
                    <h6>О нас</h6>
                    <h1>Мат. Mоделирование</h1>
                    <p>Мы специализируемся по расчетам на статическую и динамическую прочность.
                        Решаем задачи:<br/>
                        - газодинамики<br/>
                        - термодинамики<br/>
                        - оптимизации геометрических параметров
                        и т.д.!<br/><br/>

                        Гарантия возвращения уплаченных средств за приобретенную услугу, если ты останешься недовольным или из-за срыва сроков.
                    </p>
                    <div class="d-flex align-items-center">
                        <a id="play-home-video" class="video-play-button" href="https://www.youtube.com/watch?v=76YRxxReO4A">
                            <span></span>
                        </a>
                        <div class="watch_video text-uppercase" style="margin-left: 12px">
                            Смотреть Видео
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about_us_image_box justify-content-center">
                    <img class="img-fluid w-100" src="/mathModeling/public/img/about_img (1).png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End About Us Area =================-->


<!--================ Start Blog Area ================-->
<section class="blog_area" id="projects">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_title">
                    <h2>Наши последние проекты</h2>
                    <h1>Наши последние проекты</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div style="margin-top: 30px;" class="col-lg-4 col-md-6">
                <div class="blog_items">
                    <div class="blog_img_box">
                        <img class="img-fluid" src="/mathModeling/public/img/projects/R-8.png" style="height: 263px;" alt="">
                    </div>
                    <div class="blog_content">
                        <a class="title" href="javascript:void(0)">математического моделирования</a>
                        <p>Использование математического моделирования для численного
                            исследования мероприятия снижения веса крупногабаритных пластин путем перехода на полые пластины с внутренней гофрой</p>
                    </div>
                </div>
            </div>
            <div style="margin-top: 30px;" class="col-lg-4 col-md-6">
                <div class="blog_items">
                    <div class="blog_img_box">
                        <img class="img-fluid" src="/mathModeling/public/img/projects/R-7.png" style="height: 263px;" alt="">
                    </div>
                    <div class="blog_content">
                        <a class="title" href="javascript:void(0)">Математическое моделирование</a>
                        <p>Математическое моделирование экспериментальной сверпластической формовки простейшей формы!</p>
                    </div>
                </div>
            </div>
            <div style="margin-top: 30px;" class="col-lg-4 hidden-md">
                <div class="blog_items">
                    <div class="blog_img_box">
                        <img class="img-fluid" src="/mathModeling/public/img/projects/R-6.png" style="height: 263px;" alt="">
                    </div>
                    <div class="blog_content">
                        <a class="title" href="javascript:void(0)">Расчет (НДС)</a>
                        <p>Расчет напряженно-деформированного состояния (НДС) фрезы! </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" style="margin-top: 30px;">
                <div class="blog_items">
                    <div class="blog_img_box">
                        <img class="img-fluid" src="/mathModeling/public/img/projects/R-5.png" style="height: 263px;" alt="">
                    </div>
                    <div class="blog_content">
                        <a class="title" href="javascript:void(0)">математического моделирования</a>
                        <p>Результаты расчета различных валиков со шлицевыми соединениями. Такой вид деталей чрезвычайно распространен в машиностроении.
                            Можно ограничиться аналитическим расчетом, при этом оценка численным методом одного-двух подобных элементов конструкции даст некоторую уверенность в конструкции.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" style="margin-top: 30px;">
                <div class="blog_items">
                    <div class="blog_img_box">
                        <img class="img-fluid" src="/mathModeling/public/img/projects/R-4.png" style="height: 263px;" alt="">
                    </div>
                    <div class="blog_content">
                        <a class="title" href="javascript:void(0)">Расчет поплавка</a>
                        <p>"расчет поплавка"! Замкнутая оболочка с внутренним давлением! Скидка для магистров и соискателей!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 hidden-md" style="margin-top: 30px;">
                <div class="blog_items">
                    <div class="blog_img_box">
                        <img class="img-fluid" src="/mathModeling/public/img/projects/R-3.png" style="height: 263px;" alt="">
                    </div>
                    <div class="blog_content">
                        <a class="title" href="javascript:void(0)">Математическое моделирование</a>
                        <p>Использование численных методов (в данном случае, метода конечных элементов), использование расчетной модели высокого уровня, решение задачи в нелинейной постановке (использование контактных элементов и моделирование болтов со специальными
                            элементами, имитирующими затяжку) позволило максимально доставерно осуществить расчет дополнительных термических давлений.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" style="margin-top: 30px;">
                <div class="blog_items">
                    <div class="blog_img_box">
                        <img class="img-fluid" src="/mathModeling/public/img/projects/R-2.png" style="height: 263px;" alt="">
                    </div>
                    <div class="blog_content">
                        <a class="title" href="javascript:void(0)">математического моделирования</a>
                        <p>Использование математического моделирования для численного
                            исследования мероприятия снижения веса крупногабаритных пластин путем перехода на полые пластины с внутренней гофрой</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" style="margin-top: 30px;">
                <div class="blog_items">
                    <div class="blog_img_box">
                        <img class="img-fluid" src="/mathModeling/public/img/projects/R-1.png" style="height: 263px;" alt="">
                    </div>
                    <div class="blog_content">
                        <a class="title" href="javascript:void(0)">математического моделирования</a>
                        <p>Оценка напряженно-деформированного состояния сварного бачка из листовой стали. На внутренние поверхности бачка приложено максимальное расчетное давление. Оценка по уровню напряжений и перемещений.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--================ End Blog Area ================-->

<!--================Footer Area =================-->
<footer class="footer_area section_gap_top">
    <div class="container">
        <div class="row footer_inner">
            <div class="col-12">
                <h3 style="color: white;
    margin-left: -15px;">
                    Бесплатная консультация! Ждем твои вопросы прямо сейчас !
                </h3>
            </div>
            <div class="pb-3" id="consult-form-wrapper-2">
                <consult-form></consult-form>
            </div>
        </div>
        <div class="row single-footer-widget">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="copy_right_text">
                    <p>
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Все права защищены.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--================End Footer Area =================-->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/mathModeling/public/js/jquery-3.2.1.min.js"></script>
<script src="/mathModeling/public/js/popper.js"></script>
<script src="/mathModeling/public/js/bootstrap.min.js"></script>
<script src="/mathModeling/public/js/stellar.js"></script>
<script src="/mathModeling/public/js/jquery.magnific-popup.min.js"></script>
<script src="/mathModeling/vendor/nice-select/js/jquery.nice-select.min.js"></script>
<script src="/mathModeling/vendor/isotope/imagesloaded.pkgd.min.js"></script>
<script src="/mathModeling/vendor/isotope/isotope-min.js"></script>
<script src="/mathModeling/vendor/owl-carousel/owl.carousel.min.js"></script>
<script src="/mathModeling/public/js/jquery.ajaxchimp.min.js"></script>
<script src="/mathModeling/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="/mathModeling/vendor/counter-up/jquery.counterup.min.js"></script>
<script src="/mathModeling/public/js/mail-script.js"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="/mathModeling/public/js/gmaps.min.js"></script>
<script src="/mathModeling/public/js/theme.js"></script>
<script src="/mathModeling/public/js/app.js"></script>
</body>

</html>