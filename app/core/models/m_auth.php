<?php

declare(strict_types=1);

namespace Crystal;

use PDO;
use PDOException;
use Throwable;

class Auth {

    private  $salt = 'er66FDb8';

    function __construct(){

   }

   function validateLogin ($user, $pass){
        global $Crystal ;

        $passnew = md5($pass.$this->salt);

        if($stmt = $Crystal->Database->prepare("SELECT * FROM `users` WHERE `username` = :user AND `password` = :pass ")){
            $stmt->bindValue(':user', $user, PDO::PARAM_STR);
            $stmt->bindValue(':pass', $passnew, PDO::PARAM_STR);
            $stmt->execute();
            $stmt->fetchAll();

            if($stmt->rowCount() > 0 ){
                
                return TRUE;
            }
            else{
               
                return FALSE;
            }
        }
            else{
                die();
            }
   }



   function checkLoginStatus(){
        if(isset($_SESSION['login'])){
            return TRUE;

        }
        else{
            return FALSE;
        }

   }


   function checkAuthorization(){
        global $Crystal;
        if($this->checkLoginStatus() == FALSE){
            $Crystal->Template->error('unathorized');

        }

   }

   function getCurrentUserName(){

        return $_SESSION['username'];
   }

   function getSalt(){
        return $this->salt;
   }


   function logout(){
        session_destroy();
        session_start();
   }









}