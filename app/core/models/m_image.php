<?php

declare(strict_types=1);

namespace Crystal;

use PDO;
use PDOException;
use Throwable;

class ImageOperations{

    private const  FILE_PATH = '/crystal/auu/';
    private $Crystal;


    function __construct()
    {
        global $Crystal;
        $this->Crystal = & $Crystal;
    }

    
    
    private function add_image_sql($image): void
    {
        if($stmt = $this->Crystal->Database->prepare("INSERT INTO image (image) VALUES (:image)")){
            $stmt->bindValue(':image', $image, PDO::PARAM_INT);
            $stmt->execute();
        }
    }

    public function upload_image($image_file): bool
    {
        $handle = new \Verot\Upload\Upload($image_file);
        $name = date("YmdHis") . rand(1,9999);
        if ($handle->uploaded) {
            $handle->image_convert         = 'jpg';
            $handle->file_new_name_body   = $name ;
            
            $handle->image_ratio_y        = true;
            
            $handle->process('../auu');
            if ($handle->processed) {
              $this->add_image_sql($name);
              $handle->clean();
              return TRUE;
             
            } else {
                return FALSE;
            }
          }


    }

    public function gallery(): array
    {
        try{
        $query = "SELECT * FROM image";
        $result = $this->Crystal->Database->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
            

        }catch (Throwable $e) {
            echo 'blad';
        }

        

        }
       
    private function remove_image_from_database($id): bool
    {

        if($stmt = $this->Crystal->Database->prepare("DELETE FROM image WHERE id_image = :id ")){
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return TRUE;
        }else{
            return FALSE;
        }

    }

    private function remove_image_from_ftp($image): bool
    {
        $files = $_SERVER['DOCUMENT_ROOT'].self::FILE_PATH . $image .'.jpg';  
        
        try{
            if(file_exists("$files")){

        if(unlink("$files")){
            
            return TRUE;
        }else{
            return FALSE;
        }
    }else{
        return FALSE;
    }
        }catch (Throwable $e) {
        return FALSE;
    }
}



    public function remove_image( int $id, string $image)
    {
    if($this->remove_image_from_ftp($image)){
        if($this->remove_image_from_database($id)){
            return TRUE;
        }else{
            return FALSE;
        }
    }else{
        return FALSE;
    }

    }
    





}




