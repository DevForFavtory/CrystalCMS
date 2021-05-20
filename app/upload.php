<?php

declare(strict_types=1);

namespace Crystal;

include("../vendor/autoload.php");
include("init.php");


$Crystal->Auth->checkAuthorization();



if(isset($_POST['Submit'])){



if(isset($_FILES['image_field'])){

 if($Crystal->Image->upload_image($_FILES['image_field'])){
  $Crystal->Template->setAlert('Zdjęcie zostało dodane','success');
  $Crystal->Template->load(APP_PATH . 'panel/views/v_upload.php');
 }else{

  $Crystal->Template->setAlert('Błąd','error');
  $Crystal->Template->load(APP_PATH . 'panel/views/v_upload.php');
 }

}

}else{
    $Crystal->Template->load(APP_PATH . 'panel/views/v_upload.php');
}