<?php

declare(strict_types=1);

namespace Crystal;

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <meta name="AdsBot-Google" content="noindex, nofollow" />

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Crystal Beauty </title>
    <link href="res/css/bootstrap.min.css" rel="stylesheet">
    <link href="res/css/signin.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->




    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

</head>
<body class="text-center">
<?php
        $alerts = $this->getAlerts();
        if($alerts !=''){
            echo '<ul class="alerts">' . $alerts . '</ul>';
        }
        ?>

 <a href="logout.php">Wyloguj</a>       




</body>
</html>





