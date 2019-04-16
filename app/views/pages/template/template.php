<!doctype html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138500604-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-138500604-1');
        </script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.css" media="screen">
    <link rel="stylesheet" href="https://bootswatch.com/_assets/css/custom.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="app/views/css/mos.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
        <title>Manufactury of Shapes</title>
    </head>
    <body>
        <?php require_once "app/views/pages/template/menu.php"; ?>


        <div class="carousel">
            <div class="container-fluid clean">
                <img src="app/views/img/001a.jpeg"  class="img-fluid">
                <div class="container centered">
                    <div class="row">
                        <div class="col-4 dark-back-sides both-violet">
                            <h2 class="text-left super-strong">STRONA ZA £100</h2>
                            <p class="text-left lead-one">Pakiet podstawowy:</p>
                            <p>
                                <ul>
                                    <li class="text-left lead">Informacje o firmie,</li>
                                    <li class="text-left lead">Oferta dla klienta,</li>
                                    <li class="text-left lead">Galeria,</li>
                                    <li class="text-left lead">Formularz kontaktowy,</li>
                                    <li class="text-left lead">Google map.</li>
                                </ul>
                            </p>
                        </div>
                        <div class="col-8">
                            <p class="centered-paragraph-left quotation-small">Nie musisz być bogaty, żeby zacząć, ale musisz zacząć, żeby byc bogaty.<br>
                            <span class="quotation-small-author">- Les Brown -</span></p>
                        </div>
                    </div>   
                </div>
            </div>

            <div class="container-fluid clean">
                <img src="app/views/img/003a.jpeg" class="img-fluid">
                <div class="container centered">
                    <div class="row">
                        <div class="col-4 dark-back-sides both-violet">
                            <h2 class="text-left super-strong">W KONTAKCIE</h2>
                            <p class="text-left lead-one">Wsparcie dla komunikacji:</p>
                            <p>
                                <ul>
                                    <li class="text-left lead">Formularze kontaktowe,</li>
                                    <li class="text-left lead">Kalendarze spotkań,</li>
                                    <li class="text-left lead">Implementacja nowych narzędzi komunikacji w istniejących projektach</li>
                                </ul>
                            </p>
                        </div>
                        <div class="col-8">
                            <p class="centered-paragraph-left quotation-small">Bądź na tyle blisko swoich  klientów, aby powiedzieć im czego chcą, zanim sami się na to zdecydują.<br>
                            <span class="quotation-small-author">- Steve Jobs -</span></p>
                        </div>
                    </div>   
                </div>
            </div>

            <div class="container-fluid clean">
                <img src="app/views/img/004a.jpeg" class="img-fluid">
                <div class="container centered">
                    <div class="row">
                        <div class="col-4 dark-back-sides both-violet">
                            <h2 class="text-left super-strong">USZYTE NA MIARĘ</h2>
                            <p class="text-left lead-one">Lek na całe zło:</p>
                            <p></p>
                            <p class="text-left lead">
                                Powiedz nam czego potrzebujesz do usprawnienia swojej działalności a my postaramy się zaproponować najlepsze rozwiązanie. 
                            </p>
                        </div>
                        <div class="col-8">
                            <p class="centered-paragraph-left quotation-small">Teraz nie pora myśleć o tym, czego ci brak. Lepiej pomyśl, co możesz zrobić z tym, co masz.<br>
                            <span class="quotation-small-author">- Ernest Hemingway -</span></p>
                        </div>
                    </div>   
                </div>
            </div>

            <div class="container-fluid clean">
                <img src="app/views/img/009a.jpeg" class="img-fluid">
                <div class="container centered">
                    <div class="row">
                        <div class="col-4 dark-back-sides both-violet">
                            <h2 class="text-left super-strong">... I WAŻNIEJSZE</h2>
                            <p class="text-left lead-one">Wyróżnienie produktu:</p>
                            <p>
                                <ul>
                                    <li class="text-left lead">Micro Sites,</li>
                                    <li class="text-left lead">Kampanie,</li>
                                    <li class="text-left lead">Przygotowanie materiałów w ujednoliconej formie dla wielu typów publikacji.</li>
                                </ul>
                            </p>
                        </div>
                        <div class="col-8">
                            <p class="centered-paragraph-left quotation-small">Interes, który nic poza pieniędzmi nie przynosi, jest złym interesem.<br>
                            <span class="quotation-small-author">- Henry Ford -</span></p>
                        </div>
                    </div>   
                </div>
            </div>

        </div>

        <?php
            View::render($path, $data);
        ?>

        <?php
            require_once "app/views/pages/secure/footer.php";
        ?>


        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="app/views/js/slick/slick/slick.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
        <script src="app/views/js/carousel.js"></script>
    <script src="app/views/js/enquiry.js?v=2"></script>

        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>