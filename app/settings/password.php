<?php

declare(strict_types=1);

namespace Crystal;


include ('../init.php');
include ('models/m_settings.php');

$settings = new Settings();

$Crystal->Auth->checkAuthorization();

if(isset($_POST['submit'])){

    $Crystal->Template->setData('oldpass', $_POST['oldpass']);
    $Crystal->Template->setData('newpass', $_POST['newpass']);
    $Crystal->Template->setData('newpass2', $_POST['newpass2']);

    //walidacja

    if($_POST['oldpass'] == '' || $_POST['newpass'] == '' || $_POST['newpass2'] == ''  ){

        $Crystal->Template->setAlert("Wypełnij wymagane pola",'error');
        $Crystal->Template->load(APP_PATH . 'settings/views/v_password.php');


    } else if ($_POST['newpass'] != $_POST['newpass2']){

        $Crystal->Template->setAlert("Hasła nie są takie same",'error');
        $Crystal->Template->load(APP_PATH . 'settings/views/v_password.php');

    } else if ($Crystal->Auth->validateLogin($Crystal->Auth->getCurrentUserName(), $Crystal->Template->getData('oldpass')) == FALSE){

        $Crystal->Template->setAlert("Stare hasło jest nieprawidłowe",'error');
        $Crystal->Template->load(APP_PATH . 'settings/views/v_password.php');

    } else {

        $changed = $settings->changePassword($Crystal->Auth->getCurrentUserName(), $Crystal->Template->getData('newpass'));
        if ($changed == TRUE){

            $Crystal->Template->setData('oldpass', '');
            $Crystal->Template->setData('newpass', '');
            $Crystal->Template->setData('newpass2', '');
            $Crystal->Template->setAlert("Hasło zostało zmienione",'success');
            $Crystal->Template->load(APP_PATH . 'settings/views/v_password.php');
        }else{

            $Crystal->Template->setData('oldpass', '');
            $Crystal->Template->setData('newpass', '');
            $Crystal->Template->setData('newpass2', '');
            $Crystal->Template->setAlert("Wystąpił błąd",'error');
            $Crystal->Template->load(APP_PATH . 'settings/views/v_password.php');



        }

    }



} else {
    $Crystal->Template->load(APP_PATH . 'settings/views/v_password.php');
}