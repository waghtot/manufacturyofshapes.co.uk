<!doctype html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.css" media="screen">
    <link rel="stylesheet" href="https://bootswatch.com/_assets/css/custom.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="app/views/css/jquery.mosaic.css">
    <link rel="stylesheet" href="app/views/css/mos.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script> -->
    
        <title>Manufactury of Shapes</title>
    </head>
    <body>
        <?php require_once "app/views/pages/template/menu.php"; ?>


        <div class="carousel">
            <div class="container-fluid clean">
                <img src="app/views/img/001a.jpeg"  class="img-fluid">
                <div class="container centered">
                    <h1 class="text-left super-strong">£100 ZA STRONĘ?</h1>
                    <h3 class="text-left">Nie obejmuje ceny hostingu i domeny</h3>
                </div>
            </div>

            <div class="container-fluid clean">
                <img src="app/views/img/003a.jpeg" class="img-fluid">
                <div class="container centered">
                    <h1 class="text-left super-strong">W KONTAKCIE</h1>
                    <p></p>
                </div>
            </div>

            <div class="container-fluid clean">
                <img src="app/views/img/004a.jpeg" class="img-fluid">
                <div class="container centered">
                    <h1 class="text-left super-strong">USZYTE NA MAIRĘ</h1>
                    <p></p>
                </div>
            </div>

            <div class="container-fluid clean">
                <img src="app/views/img/009a.jpeg" class="img-fluid">
                <div class="container centered">
                    <h1 class="text-left super-strong">WAŻNE I WAŻNIEJSZE</h1>
                    <p></p>
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