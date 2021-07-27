<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Eskimo Vacation</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <link rel="stylesheet" href="css/aos.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="css/custm.css" />
    <link href="https://unpkg.com/aos@2.2/dist/aos.css" rel="stylesheet" />
    <style>
       html, body {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6),
                                               rgba(0, 0, 0, 0.6)),
                                                  url("img/body4.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            padding: 10px;
            text-align: center;
            color: white;
        }
        .bn {
            border :1px solid white;
            padding: 10px 100px;
            color: white;
            width: 300px;
            border-radius: 20px;
            background-color: rgb(247, 194, 22);
            color: rgb(250, 247, 236);
        }
        @keyframes slideUpFromBottom {
            0% {
                transform: translateY(100%);
            }
            100% {
                transform: translateY(0);
            }
        }

        img {
            animation: 1s ease-out 0s 1 slideUpFromBottom;
        }
        .vac {
            animation: 1s ease-out 2s 1 slideUpFromBottom;
        }
        p {
             animation: 1s ease-out 4s 1 slideUpFromBottom;
        }
    </style>
</head>

<body>
    <!-- Start your project here-->
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6" style="margin-top: 180px;">
              <img src="img/esk.png" class="" height="100px"><br><br>
           <div class="vac">
                <span class="esk" style="font-size: 60px; line-height: 50px; font-weight: bolder;"><span
                        style="font-weight: bolder;">Eskimo </span>Vacation</span>
           </div>
           <br>
           
            <p>
                Win $10000 worth vacation from Eskimo token distribution vacation contest.
            </p> 
            <a href="page.php" class="bn">Take a Tour</a>
        </div>
        <div class="col-md-3"></div>
    </div>
    <!-- End your project here-->
    <script src="js/aos.js"></script>
    <script>
        AOS.init({
            easing: 'ease-in-out-sine'
        });
    </script>
    <!-- MDB -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/aos@2.2/dist/aos.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>