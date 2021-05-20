<?php

?>

<!DOCTYPE html>
<head>
    <title>Crystal Beauty Krystyna Pawelec</title>
    <meta charset="UTF-8">
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/7d9c307444.js"></script>
    <script type="text/javascript" src="<?php echo APP_RES; ?>javascript/jquery.js" ></script>
    
    <script>
        
        $(document).ready(function(){
            
            $('#crystal_cancel').live('click', function(e){
                e.preventDefault();
                parent.$.colorbox.close();
            });
            
        });
        
    </script>
    
</head>

<body>


<div class="container">

<div style="position:absolute;right:5px;top:5px;">
<a href="#" id="crystal_cancel" class="btn btn-secondary btn-lg">Zamknij</a>
</div>

<div class="row">

<div class="text-center">
  
<br>
  <h1>Galeria</h1>
  <br>
  <?php
        $alerts = $this->getAlerts();
        if($alerts !=''){
            echo '<ul class="alerts">' . $alerts . '</ul>';
        }
        ?>
  </div>
  </div>
 
  <div style="float:left;"> </div>
  <?php


if ($_SESSION['change_image_galery'] == TRUE){
    foreach ($_SESSION['gallery'] as $images){
    echo '<div style="float:left;">
   
    <a href="'. SITE_PATH . 'app/gallery.php?image_change='.$images['image'] .'" class="crystal_password">
    <div style="position: relative;left:80px;color:#6c757d; ">
    <i class="fa fa-plus" style="font-size:25px;" aria-hidden="true"></i>
    </div>
    </a>
    
    
    <a href="../auu/'.  $images['image'].   '.jpg" target="_blank">
    <img src="../auu/'.  $images['image'].   '.jpg" class="rounded" style="width:170px;margin-bottom:5px;margin-right:2px;float:left;" alt="...">
    </a>
    </div>
    ';
    }

}else{

  if(isset($_SESSION['gallery'])){
foreach ($_SESSION['gallery'] as $images){

    echo '<div style="float:left;">
   
    <a href="'. SITE_PATH . 'app/gallery.php?id='.$images['id_image'] .'&image='.$images['image'].'" class="crystal_password">
    <div style="position: relative;left:80px;color:#6c757d; ">
    <i class="fa fa-trash-o" style="font-size:25px;" aria-hidden="true"></i>
    </div>
    </a>
    
    
    <a href="../auu/'.  $images['image'].   '.jpg" target="_blank">
    <img src="../auu/'.  $images['image'].   '.jpg" class="rounded" style="width:170px;margin-bottom:5px;margin-right:2px;float:left;" alt="...">
    </a>
    </div>
    ';
  
  
  
}unset($_SESSION['gallery']);

  }
}
        ?>


  <div class="row">


  </div>

  
  




</div>

</body>

</html>
