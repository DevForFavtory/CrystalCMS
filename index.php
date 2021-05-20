<?php

declare(strict_types=1);

namespace Crystal;
include("app/init.php");


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crystal Beauty Krystyna Pawelec</title>
    <!--Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <!--Scroll reveal CDN-->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="app/res/css/crystal_style.css" />
    <script type="text/javascript" src="<?php echo APP_RES; ?>javascript/jquery.js" ></script>
    <?php $Crystal->head(); ?>
       
</head>
<body>

<header>

    <div class="container">
        <?php $Crystal->toolbar(); ?>
    </div>

    </div>
    <div class="container">
        <nav class="nav">
            <div class="menu-toggle">
                <i class="fas fa-bars" style="color:#d0ab50;"></i>
                <i class="fas fa-times" style="color:#d0ab50;"></i>

            </div>
            <a href="index.html" class="logo" ><img src="" alt=""></a>

            <ul class="nav-list">

                <li class="nav-item">


                    <a href="#home"
                       class="nav-link active">
                       
                       Strona główna
                       </a>
                </li>

                <li class="nav-item">
                    <a href="#menu1"
                       class="nav-link" id="raf">
                        <div style="font-size: 1.3rem;color:white;">

                        <?php $Crystal->Cms->display_block('menu1', 'oneline');  ?>

                        </div>
                    </a>



                <li class="nav-item">
                    <a href="#menu2" class="nav-link">
                    <div style="font-size: 1.3rem;color:white;">

                    <?php $Crystal->Cms->display_block('menu2', 'oneline');  ?>

                    </div>
                    
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#menu3" class="nav-link">
                    <div style="font-size: 1.3rem;color:white;">

                    <?php $Crystal->Cms->display_block('menu3', 'oneline');  ?>

                    </div>
                    
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#menu4" class="nav-link">
                    <div style="font-size: 1.3rem;color:white;">

                    <?php $Crystal->Cms->display_block('menu4', 'oneline');  ?>

                    </div>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#menu5" class="nav-link">
                    <div style="font-size: 1.3rem;color:white;">

                    <?php $Crystal->Cms->display_block('menu5', 'oneline');  ?>

                    </div>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<!--header ends-->
<section class="hero" id="hero">
    <div class="container">
        <h1 id="home" class="">
            <img style="width:480px; height:480px;" src="images/logo.svg" alt="">
        </h1>

        <div class="headline-description">

            <div class="">
                <h5 style="font-size:4.5rem;">
                
                <?php

                 $Crystal->Cms->display_block('signature', 'oneline',1);  
                 
                 ?>

                </h5>

            </div>
        </div>
    </div>
</section>
<!--Hero ends-->

<section class="section-promotion">

    <div class="container" id="menu1">
        <div class="crystal-info">
            <div class="crystal-description padding-right ">


                <h1 class="headline headline-dark">
                <?php $Crystal->Cms->display_block('menu1', 'oneline');  ?>
                </h1>


                <p>
                    <?php $Crystal->Cms->display_block('content-right-first', 'textarea');  ?>
                </p>

            </div>
            <div class="crystal-info-img">
            <?php $Crystal->Cms->display_image('101');  ?>
            <?php $Crystal->Cms->display_image('102');  ?>
            </div>
        </div>
    </div>
</section>
<!---Discover our story ends--->
<section class="section-where" id="menu2">
    <div class="container">





        <h1 class="headline headline-dark"> 
        <?php $Crystal->Cms->display_block('menu2', 'oneline');  ?>
        </h1>

        <?php $Crystal->Cms->display_block('content-main');  ?>
            </br>
            </br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1383.153287389306!2d18.6111505442891!3d54.336174647290576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fd738ade16ef77%3A0x57dd1b59f2f00fd0!2sPasa%C5%BC%20Che%C5%82mski.%20Centrum%20Handlowe!5e0!3m2!1spl!2spl!4v1595528182982!5m2!1spl!2spl" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div style="width:426px;height:240px; float:left;">
                <?php $Crystal->Cms->display_image('105');  ?>
            </div>
        </p>

    </div>
</section>
<!--Tasteful recipes ends-->
<section class="section-price" id="menu3">
    <div class="container">



        <div class="crystal-info">
        <div class="crystal-description " style="text-align: left;">
        <div class="row">
            
            
            <div class="col-6">
                <h1 class="headline headline-dark">
                 <?php $Crystal->Cms->display_block('price', 'oneline');  ?>
                 </h1>
                 <h3>
                 
                 <?php $Crystal->Cms->display_block('price_list');  ?>

                 </h3>
                   
            </div>

            <div class="col-6">
                <h1 class="headline headline-dark">
                <?php $Crystal->Cms->display_block('price1', 'oneline');  ?>
                 </h1>

                <h3>
                    
                <?php $Crystal->Cms->display_block('price_list1');  ?>





                </h3>
                </div>


                </div>
            </div>
            </div>
            <div class="crystal-description " style="">
        <div class="row">
            
            
            <div class="col-6">
                <h1 class="headline headline-dark">
                 Pielęgnacja Stóp</h1>




                <h3>
                    <p>1. Pedicure klasyczny bez malowania 75 zł</p>
                    <p>2. Pedicure klasyczny z malowaniem 85 zł </p>
                    <p>3. Pedicure japoński 90 zł</p>
                    <p>4. Pedicure hybrydowy 120zł</p>
                    <p>5. Pedicure hybrydowy french 130zł</p>
                    <p>6. Opracowanie paznokci na stopach+ malowanie klasycznym lakierem 50 zł</p>
                    <p>7. Opracowanie paznokci na stopach+ malowanie hybrydowym lakierem 80 zł.</p>
                    <p>8. Opracowanie paznokci na stopach plus zdjęcie starej hybrydy plus malowanie hybrydowym lakierem 90 zł.</p>
                    <p>9. Opracowanie paznokci na stopach+ malowanie hybrydowym lakierem french 100 zł.</p>
                    <p>10. Malowanie klasycznym lakierem na stopach 25 zł.</p>
                    <p>11. Opiłowanie paznokci u stóp 25 zł.</p>
                    <p>12. Usunięcie skórek i opracowanie frezarką 30 zł.  </p>
                </h3>
                </div>
                <div class="col-6">

                <h1 class="headline headline-dark"> Depilacja Pastą Cukrową</h1>
                <h3>
                    <p>1. Wąsik 15-20 zł.</p>
                    <p>2. Broda 10-30 zł.</p>
                    <p>3. Cała Twarz  40-60 zł.</p>
                    <p>4. Przedramiona 30-50 zł.</p>
                    <p>5. Ramiona 30-50zł.</p>
                    <p>6. Całe ręce 50 zł.</p>
                    <p>7. Pachy 30-35 zł.</p>
                    <p>8. Bikini Standardowe 60 zł.</p>
                    <p>9. Bikini Brazylijskie 90 zł.</p>
                    <p>10. Bikini Hollywood 100 zł.</p>
                    <p>11. Uda 70 zł.</p>
                    <p>12. Łydki 70 zł.</p>
                    <p>13. Całe nogi 130 zł.</p>
                    <p>14. Pośladki 50 zł.</p>
                    <p>15. Brzuch 20 zł.</p>
                    <p>16. Odcinek lędźwiowy 20-30zł.</p>
                    <p>17. Plecy 80-100 zł. </p>
                    <p>18. Klatka piersiowa męska 80-100 zł</p>
                    <p>19. Dodatkowe małe miejsce plus 10-15 zł.</p>


                </h3>

                </div>

            </div>
       
        </div>

















        <div class="crystal-info">
            <div class="crystal-description " style="text-align: left;">


                <h1 class="headline headline-dark"> PIELĘGNACJA TWARZY</h1>



                <h3>
                    <p>1. Konsultacja bez zabiegu 40 zł </p>
                    <p>2. Konsultacja do zabiegu 0 zł </p>
                    <p>3. Zabieg dla Pani w ciąży bądź karmiącej 160 zł</p>
                    <p>4. Peeling kawitacyjny: </p>
                    <p><li>twarz 150 zł </li> </p>
                    <p><li>twarz + szyja 170 zł</li> </p><!-- comment -->
                    <p><li>twarz + szyja + dekolt 190</li> </p>
                    <p><li>+ kwasy +30 zł</li> </p>
                    <p>5. Mikrodermabrazja: </p>
                    <p><li>twarz 160 zł </li> </p>
                    <p><li>twarz + szyja 180zł</li> </p><!-- comment -->
                    <p><li>twarz + szyja + dekolt 200 zł</li> </p>
                    <p><li>+ kwasy +30 zł</li> </p>
                    <p>6. Fale radiowe + wcześniej kawitacja:</p>
                    <p><li>twarz 170 zł </li> </p>
                    <p><li>twarz + szyja 190 zł</li> </p><!-- comment -->
                    <p><li>twarz + szyja + dekolt 210 zł</li> </p>
                    <p><li>+ kwasy +30 zł</li> </p>

                </h3>



            </div>

            <div class="crystal-description " style="text-align: left;">






                <h3>
                    <p>7. Oczyszczanie wodorowe: </p>
                    <p><li>twarz 200 zł </li> </p>
                    <p><li>twarz + szyja 170 zł</li> </p><!-- comment -->
                    <p><li>twarz + szyja 220 zł</li> </p>
                    <p><li>twarz + szyja + dekolt 240 zł </li> </p>
                    <p>8. Oczyszczanie wodorowe 7 etapowe: </p>
                    <p><li>twarz 250 zł </li> </p>
                    <p><li>twarz + szyja 270 zł</li> </p><!-- comment -->
                    <p><li>twarz + szyja + dekolt 290 zł</li> </p>
                    <p>9. Infuzja jonowa + 20 zł do peelingu kawitacyjnego lub mikrodermabrazji, w oczyszczaniu wodorowym wieloetapowym już się znajduje. </p>
                    <p>10. Mezoterapia bezigłowa: </p>
                    <p><li>twarz 150 zł </li> </p>
                    <p><li>twarz + szyja 170 zł</li> </p><!-- comment -->
                    <p><li>twarz + szyja + dekolt 190 zł</li> </p>
                    <p><li>+ peeling kawitacyjny wcześniej 20 zł</li> </p>
                    <p><li>+ kwasy 30 zł</li> </p>

                </h3>



            </div>
        </div>
    </div>
</section>
<!---DISCOver our menu ends-->

<!---perfect blend ends-->
<section class="section-reservation">
    <div class="container">
        <div class="crystal-info">
            <div class="crystal-description padding-right">


                <h1 class="headline headline-dark">
                <?php $Crystal->Cms->display_block('oneline_reservation', 'oneline');  ?>
                 </h1>
<p>

<?php $Crystal->Cms->display_block('content_reservation', 'textarea');  ?>
</p>


               
                <a href="https://booksy.com/pl-pl/" class="btn cta-btn">Zapisz się na wizytę</a>

            </div>
            <div class="image-group">
            <?php $Crystal->Cms->display_image('103');  ?>
            <?php $Crystal->Cms->display_image('104');  ?>
            </div>
        </div>
</section>
<!---culinary delight ends-->
<!--View Products-->
<section id="menu4">
    <div class="crystal-description ">
        <div class="global-headline">

            <h1 id="view" class="headline headline-dark">
            <?php $Crystal->Cms->display_block('menu4', 'oneline');  ?>
            </h1>

        </div>

        <div class="section-discover-us">
            <div class="container">
                <div class="crystal-info-amy">
                    <div class="image-group-amy padding-right ">
                    <?php $Crystal->Cms->display_image('1');  ?>
                    <?php $Crystal->Cms->display_image('2');  ?>
                    <?php $Crystal->Cms->display_image('3');  ?>
                    <?php $Crystal->Cms->display_image('4');  ?>
                    <?php $Crystal->Cms->display_image('5');  ?>
                    <?php $Crystal->Cms->display_image('6');  ?>
                    


                    </div>
</section>

<!---View Products-->
<footer>
    <div class="container">
        <div class="back-to-top">
            <a href="#"><i class="fas fa-chevron-up"></i></a>
        </div>
        <div class="footer-content">
            <div class="footer-content-about ">
                <h4 id="menu5">
                <?php $Crystal->Cms->display_block('menu5', 'oneline');  ?>
                </h4>

                <p>
                    <?php $Crystal->Cms->display_block('content-right-secend', 'textarea');  ?>
                </p>

            </div>
            <div class="footer-content-divider animate-bottom">
                <div class="social-media">
                    <h4>
                    
                    <?php $Crystal->Cms->display_block('content-social', 'textarea');  ?>
                    
                    </h4>
                    <ul class="social-icons">

                        <a href="#"><i class="fab fa-instagram"></i></a>

                        <a href="https://www.facebook.com/pages/category/Health-Beauty/Crystal-Beauty-Krystyna-Pawelec-105042171447223/"><i class="fab fa-facebook-square"></i></a>

                        <a href="#"><i class="fab fa-twitter"></i></a>

                        <a href="#"><i class="fab fa-whatsapp  text-center"></i></a>

                    </ul>
                </div>
            </div>
        </div>

    </div>
    </div>
</footer>


<script>
//Select element function
const selectElement = function (element) {
return document.querySelector(element);
};

let menuToggler = selectElement(".menu-toggle");
let body = selectElement("body");
let menuOptions = selectElement(".nav-link");

menuToggler.addEventListener("click", function () {
body.classList.toggle("open");
});

$('.nav-list').click(function(e){
        $("body").removeClass("open");
    });


    </script>

</body>
</html>
