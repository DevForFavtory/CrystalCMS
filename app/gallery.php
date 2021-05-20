<?php



include("init.php");
include("../vendor/autoload.php");

$Crystal->Auth->checkAuthorization();
$_SESSION['gallery'] = $Crystal->Image->gallery();


if(isset($_GET['gallery'])){
    $Crystal->Template->setData('gallery', $_GET['gallery']);
    $_SESSION['change_image_galery'] = true ;
    $_SESSION['change_galery'] = $Crystal->Template->getData('gallery') ;  

}else{
    $_SESSION['change_image_galery'] = false;
}


if(isset($_GET['image_change'])){
    $Crystal->Template->setData('image_change', $_GET['image_change']);
    $Crystal->Cms->updateImage($_SESSION['change_galery'],$Crystal->Template->getData('image_change'));
    $Crystal->Template->setAlert('Zdjęcie zostało zmienione. Odśwież stronę','success');
    
}



if(isset($_GET['id']) AND isset($_GET['image'])){
    $Crystal->Template->setData('id_image', $_GET['id']);
    $Crystal->Template->setData('image', $_GET['image']);
    $Crystal->Image->remove_image($Crystal->Template->getData('id_image'),$Crystal->Template->getData('image'));
}




$Crystal->Template->load('../app/panel/views/v_gallery.php');







?>







