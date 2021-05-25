<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Service</title>
	<link rel="stylesheet" href="bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/454de254d5.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="intro">
        <div class="intro__media">
            <!-- <video src="video/video.mp4" autoplay muted loop></video> -->
        </div>
    </div>
    <!--MENU SECTION START-->
    <?php
        include_once('header.php'); 
    ?>
    <!--MENU SECTION END-->
    <main>
        <!--HOME SECTION START-->
        <section id="home" >
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                        <div id="carousel-slider" class="carousel slide animate-in" data-anim-type="fade-in-up" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <h3>"Жазылым" арқылы керемет жеңілдіктер</h3>
                                    <p>
                                        Картаға қызмет көрсетуге жеңілдік, көбірек кэшбэк және серіктестердің ерекше шарттары. <br>
                                        <b>1-ші ай тегін, содан кейін - айына тек 1100 тг  </b>
                                    </p>
                                </div>
                                <div class="carousel-item">
                                    <h3>Бейне қызметтер ATF PRO-мен қолжетімдірек</h3>
                                    <p>
                                        Сүйікті фильмдер мен сериалдарды бір жазылым арқылы көріңіз <br>
                                        <b>1-ші ай тегін, содан кейін - айына тек 1100 тг  </b>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2 scroll-me">
                        <p>Жоғары кэшбэк және басқа да артықшылықтар алу үшін ATFGOLD PRO-ға жазылыңыз</p>
                        <div class="social">
                            <a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-facebook "></i></a>
                            <a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-google-plus "></i></a>
                            <a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-linkedin "></i></a>
                            <a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-pinterest "></i></a>
                            <a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-github "></i></a>
                        </div>
                        <a href="#subscribeMap" class="btn button-custom btn-custom-two">Жазылымды қосу</a>
                    </div>
                </div>
            </div>
        </section>
        <!--HOME SECTION END-->
        <!--SERVICE SECTION START-->
        <section id="services" >
            <div class="container">
                <div class="row text-center header">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 animate-in" data-anim-type="fade-in-up">
                        <h3>ATFBank-тің барлық қызметтеріндегі артықшылықтар</h3>
                        <hr/>
                    </div>
                </div>
                <div class="all_service" data-anim-type="fade-in-up">
                    <div class="services-wrapper">
                        <ion-icon name="document-outline"></ion-icon>
                        <h3>5% -ға дейін кірісті ұлғайту</h3>
                        ATFGOLD дебеттік карточкасындағы 300 000 тг-ге дейінгі қалдық үшін
                    </div>
                    <div class="services-wrapper">
                        <ion-icon name="file-tray-full-outline"></ion-icon>
                        <h3>Қызмет көрсету және хабарлама үшін 0 теңге</h3>
                        ATFGOLD үшін ақысыз қызмет, басқа карталар үшін 100% жеңілдік
                    </div>
                    <div class="services-wrapper">
                        <ion-icon name="clipboard-outline"></ion-icon>
                        <h3>Тегін аударма</h3>
                        Айына 200 000 теңге дебеттік карталардан басқа банктердің карталарына
                    </div>
                    <div class="services-wrapper">
                        <ion-icon name="calendar-outline"></ion-icon>
                        <h3>Жинақтан көп табыс</h3>
                        Жинақ шоты бойынша 3,5%, теңгедегі депозит бойынша 5% дейін
                    </div>
                    <div class="img_card">
                        <img src="img/456426685812.png" alt="">
                    </div>
                </div>
                <!-- ------------------------------------------------------------------------------------ -->
                <div class="row text-center header">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 animate-in" data-anim-type="fade-in-up">
                        <h3>Көбірек кэшбэк</h3>
                        <hr/>
                    </div>
                </div>
                <div class="cash_back" data-anim-type="fade-in-up">
                    <div class="img_cashback">
                        <img src="img/Cashback-button.jpg" alt="">
                    </div>
                    <div class="services-wrapper">
                        <ion-icon name="clipboard-outline"></ion-icon>
                        <h3>Кэшбэк лимитін ұлғайту</h3>
                        Далеко-далеко за словесными горами в стране гласных и согласных, живут рыбные тексты.
                    </div>
                    <div class="services-wrapper">
                        <ion-icon name="clipboard-outline"></ion-icon>
                        <h3>Кэшбэк 15% басқалары үшін</h3>
                        ATFGOLD арқылы кинотеатрларға, концерттерге және театрларға ақы төлеу кезінде
                    </div>
                    <div class="services-wrapper">
                        <ion-icon name="clipboard-outline"></ion-icon>
                        <h3>7% кэшбэкпен кез-келген сақтандыру</h3>
                        Автокөлікке және АТФБанк сақтандырудың басқа полистеріне саяхат
                    </div>
                </div>
                <!-- ------------------------------------------------------------------------------------ -->
                <div class="row text-center header">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 animate-in" data-anim-type="fade-in-up">
                        <h3>Жеке өмір мен бизнес үшін қосымша бонустар</h3>
                        <hr/>
                    </div>
                </div>
                <div class="business" data-anim-type="fade-in-up">
                    <div class="services-wrapper">
                        <ion-icon name="clipboard-outline"></ion-icon>
                        <h3>Саяхат бонустары</h3>
                        Қонақүйлер үшін 10% дейін қайтару, 7% дейін - ATFBank Travel-ден сатып алған кезде авиабилеттерді комиссиясыз қайтару және айырбастау.
                    </div>
                    <div class="services-wrapper">
                        <ion-icon name="clipboard-outline"></ion-icon>
                        <h3>Тегін ұялы байланыс</h3>
                        ATFBank Mobile-ден Қазақстан бойынша қоңырау шалу үшін айына 60 минут
                    </div>
                    <div class="services-wrapper">
                        <ion-icon name="clipboard-outline"></ion-icon>
                        <h3>ЖК үшін шот тиімдірек</h3>
                        Қолма — қол ақшаны комиссиясыз енгізу және картаға шығару - 100 000 тг және одан көп
                    </div>
                </div>
            </div>
        </section>
        <!--SERVICE SECTION END-->
        <!--PRICING SECTION START-->
        <section id="pricing" >
            <div class="container">
                <div class="row film_header">
                    <div class="col-lg-6 film_title">
                        <h3>Өзіңіздің сүйікті фильмдеріңіз бен телешоуларыңызды бір жазылыммен көріңіз</h3>
                        <p>ATFGOLD-пен бірге айына 3600 тг</p>
                        <a href="#subscribeMap" class="btn button-custom btn-custom-two">Жазылымды қосу</a>
                    </div>
                    <div class="col-lg-6 film_content">
                        <img src="img/h-128247104.jpg" alt="">
                    </div>
                </div>
                <div class="row text-center header animate-in" data-anim-type="fade-in-up">
                    <div class="col-12">
                        <h3>Бір жазылымда 3 бейне қызмет</h3>
                        <hr />
                    </div>
                </div>
                <div class="row pad-bottom animate-in justify-content-center" data-anim-type="fade-in-up">
                    <div class="col-12">
                        <div class="row db-padding-btm db-attached">
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="light-pricing">
                                    <div class="film_logo">
                                        <img src="img/b12614dc21e31b8fffe850acb99f85e6.jpg" alt="">
                                    </div>
                                    <div class="type">
                                        START
                                    </div>  
                                    <p>Фильмдер, телехикаялар, мультфильмдер және START сериясының эксклюзивті премьералары</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="light-pricing popular">
                                    <div class="film_logo">
                                        <img src="img/Ivi_logo.png" alt="">
                                    </div>
                                    <div class="type">
                                        IVI
                                    </div>
                                    <p>Фильмдер, мультфильмдер және сериалдар. Кез-келген құрылғыдан, оффлайн және жарнамасыз көру</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="light-pricing">
                                    <div class="film_logo">
                                        <img src="img/logob9.png" alt="">
                                    </div>
                                    <div class="type">
                                        AMEDIATEKA
                                    </div>
                                    <p>Сериалдар мен фильмдердің премьералары, сонымен қатар жетекші студиялардың хиттері</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="subscribeMap" >
            <div class="container">
                <div class="row text-center header animate-in" data-anim-type="fade-in-up">
                    <div class="col-12">
                        <h3>Бір минут ішінде қосыңыз</h3>
                        <hr />
                    </div>
                </div>
                <div class="row map" data-anim-type="fade-in-up">
                    <div class="col-1">
                        <h1>1</h1>
                    </div>
                    <hr class="col-lg-3 col-md-2 col-sm-2">
                    <div class="col-1">
                        <h1>2</h1>
                    </div>
                    <hr class="col-lg-3 col-md-2 col-sm-2">
                    <div class="col-1">
                        <h1>3</h1>
                    </div>
                </div>
                <div class="row map_description">
                    <div class="col-3">
                        <p>ATFGOLD, бейне қызметтер жазылымдарына тіркеліңіз</p>
                    </div>
                    <div class="col-3">
                        <p>Егер сізде ATFGOLD картасы болмаса, жазылымдарыңызбен бір уақытта оған өтініш беріңіз</p>
                    </div>
                    <div class="col-3">
                        <p>Өзіңіздің сүйікті фильмдеріңізді көріңіз және ATFGOLD-тағы артықшылықтардан пайдаланыңыз</p>
                    </div>
                </div>
            </div>
        </section>
        <!--PRIICING SECTION END-->
        <!--SUBSCRIPTION SECTION END-->
        <section>
            <div class="container">
                <div class="row text-center header animate-in" data-anim-type="fade-in-up">
                    <div class="col-12">
                        <h3>ЖАЗЫЛЫМДАРҒА ТІРКЕЛУ</h3>
                        <hr />
                    </div>
                </div>
                <div class="row subscriptions" data-anim-type="fade-in-up">
                    <div class="col-4">
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="" id="btncheck1" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck1">
                                <img src="img/456426685812.png" alt="">
                                <h1>ATFGOLD PRO</h1>
                                <p>Жоғары табыс және көп кэшбэк</p>
                            </label>

                            <input type="checkbox" class="" id="btncheck2" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck2">Бейне қызметтер</label>
                        </div>
                        <div class="subsCalc">
                            <h1>Айына төлем</h1>
                            <p>1100 тг</p>
                            <hr>
                        </div>
                    </div>
                    <div class="col-8">
                        <h1></h1>
                    </div>
                </div>
            </div>
        </section>
        <!--SUBSCRIPTION SECTION END-->
    </main>
    <?php
        include_once('footer.php'); 
    ?>
    <script src = "js/jquery-3.1.1.js"></script>
    <script src = "js/bootstrap.js"></script>
    <script src="bootstrap-5.0.0-beta3-dist/js/bootstrap.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="js/script.js"></script>
</body>
</html>