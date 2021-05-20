<?php

declare(strict_types=1);

namespace Crystal;


use PDO;
use Exception;
use PDOException;
use Throwable;

class Crystal_Core {

    public   $Template;
    public   $Auth;
    public   $Cms;
    public   $Database;
    public   $Image;
    //private static array $configuration = [];



    //public static function initConfiguration(array $configuration): void
    //{
    //    self::$configuration = $configuration;

    //}

    function __construct(array $configuration)  {
        
        $this->validateConfig($configuration);
        $this->createConnection($configuration);
        
        //$this->Database = new mysqli($server,$user,$pass,$db);
        //$this->Database->set_charset('utf8');

        // obiekt tempalte

        include(APP_PATH . "core/models/m_template.php");
        $this->Template = new Template();
        $this->Template->setAlertTypes(array('success','warning','error'));

        // obiekt autoryzacji

        include(APP_PATH . "core/models/m_auth.php");
        $this->Auth = new Auth();

        // obiekt cms

        include(APP_PATH . "cms/models/m_cms.php");
        $this->Cms = new Cms();

        // obiekt image

        include(APP_PATH . "core/models/m_image.php");
        $this->Image = new ImageOperations();



        //start sesji

        session_start();
 
        
    }

    function __destruct()
    {
        
    }

    
    private function validateConfig(array $configuration): void
    {
      if (
        empty($config['database'])
        || empty($config['host'])
        || empty($config['user'])
        || empty($config['password'])
      ) {
        //throw new ConfigurationException('Storage configuration error');
      }
    }

    private function createConnection(array $configuration): void
    {
        $dsn = "mysql:dbname={$configuration['db']['database']};host={$configuration['db']['host']}";
        try{
        $this->Database = new PDO(
            $dsn,
            $configuration['db']['user'],
            $configuration['db']['password']      
        );}catch(Exception $e){
            echo "Błąd bazy";
        }
    }


    public function head(): void
    {
        if($this->Auth->checkLoginStatus()){
            include(APP_PATH . "core/templates/t_head.php");
        }
        if(isset($_GET['login']) && $this->Auth->checkLoginStatus() == FALSE){
            include(APP_PATH . "core/templates/t_login.php");

        }



    }

    public function toolbar(): void
    {
        if($this->Auth->checkLoginStatus()){
            include(APP_PATH . "core/templates/t_toolbar.php");
        }


    }

    public function login_link(): void
    {
        if($this->Auth->checkLoginStatus()){
            echo "<a href='" . SITE_PATH . "app/logout.php' class='btn btn-success btn-large'>Wyloguj</a>";

        } else{
            echo "<a href='?login' class='btn btn-success btn-large'> Zaloguj </a>"; 
        }

    }


}