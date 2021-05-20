<?php

declare(strict_types=1);

namespace Crystal;

include('init.php');

if(isset($_POST['username'])){

   $Crystal->Template->setData('input_user', $_POST['username']);
   $Crystal->Template->setData('input_pass', $_POST['password']);
    if($_POST['username'] == '' || $_POST['password'] = '' ){
        $Crystal->Template->setAlert('Uzupełnij wymagane pola','error');
        echo '<script>$.colorbox.resize();</script>'; 
        $Crystal->Template->load(APP_PATH . "core/views/v_login.php");
    }
    else if(  $Crystal->Auth->validateLogin($Crystal->Template->getData('input_user'), $Crystal->Template->getData('input_pass')) == FALSE ){

        $Crystal->Template->setAlert('Błędny login lub hasło','error');
        echo '<script>$.colorbox.resize();</script>'; 
        $Crystal->Template->load(APP_PATH . "core/views/v_login.php");

    }
    else{
        $_SESSION['username'] = $Crystal->Template->getData('input_user');
        $_SESSION['login'] = TRUE;
       
        $Crystal->Template->load(APP_PATH . "core/views/v_logginigin.php");
    }



}
else{
    $Crystal->Template->load(APP_PATH . "core/views/v_login.php");
}

