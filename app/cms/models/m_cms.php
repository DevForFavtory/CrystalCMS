<?php

declare(strict_types=1);

namespace Crystal;

use PDO;
use PDOException;
use Throwable;

class Cms{

    private $content_types = array('wysiwyg','textarea','oneline');
    private $Crystal;
    
    function __construct()
    {
        global $Crystal;
        $this->Crystal = & $Crystal;
    }


    function clean_block_id($id): string
{
    $id = str_replace(' ', '_', $id);
    $id = str_replace('-', '_', $id);
    $id = preg_replace("/[^a-zA-Z0-9_]/" , '' , $id);
    return strtolower($id);
    
}

    function display_block($id, $type = 'wysiwyg',$special = 0){
        $id = $this->clean_block_id($id);

        $type =strtolower(htmlentities($type, ENT_QUOTES));

        if(in_array($type, $this->content_types) == FALSE){
            echo "<script>
            
            alert('Nieprawidłowy typ zawartości')
            
            </script>";

            return;

        }
        $content = $this->load_block($id);
            if($content === FALSE){
                $this->create_block($id);
                $content = '';

            }

            if($this->Crystal->Auth->checkLoginStatus()){

                if ($special == 0){
                $edit_start = '<div class="crystal_edit">';
                $type . '">' . $type . '</a>';
                $edit_link = '<a class="crystal_edit_link" href="' . SITE_PATH .'app/cms/edit.php?id=' . $id .'&type=' . 
                $type . '"> Edytuj blok  </a>';
                $edit_end ='</div>';

                echo  $edit_start ;
                echo $edit_link . $content . $edit_end;
                }
                elseif ($special == 1){
                    $edit_start = '<div class="crystal_edit" style="font-size:4.5rem;" >';
                    $type . '">' . $type . '</a>';
                    $edit_link = '<a class="crystal_edit_link"  href="' . SITE_PATH .'app/cms/edit.php?id=' . $id .'&type=' . 
                    $type . '"> Edytuj blok  </a>';
                    $edit_end ='</div>';
    
                    echo  $edit_start ;
                    echo $edit_link . $content . $edit_end;                   
                }

            } else {

                echo $content;

            }

    }


    function generate_field($type, $content){

        if($type == 'wysiwyg'){
            return '<textarea name"field" id="field" class="wysiwyg">' . $content . '</textarea>';
        } else if($type == 'textarea'){

            return '<textarea name"field" id="field" class="textarea">' . $content . '</textarea>';
        }
        else if($type == 'oneline'){

            return '<input name"field" id="field" class="oneline" value="' . $content . '">';
        } else{
            $error = '<p>Użyj właściwego typu treści </p>';
            return $error; 
        }

    }


    function load_block($id){
        if($stmt = $this->Crystal->Database->prepare("SELECT content FROM content WHERE id = :id")){
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            
            
            if($stmt->rowCount() != FALSE){
                $content = $stmt->fetchColumn();
                
                return $content;
            } else {
                
                return FALSE;
            }
        }
    }
    
    function create_block($id){
        if($stmt = $this->Crystal->Database->prepare("INSERT INTO content (id) VALUES (:id)")){
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
        }
    }

    function update_block($id,$content){
        if($stmt = $this->Crystal->Database->prepare("UPDATE content SET content = :content WHERE id = :id")){
            $stmt->bindValue(':content', $content, PDO::PARAM_STR);
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            
        }
    }

    function load_image($id){
        if($stmt = $this->Crystal->Database->prepare("SELECT `id_image` FROM `gallery` WHERE `gallery` = $id")){
            
            $stmt->execute();
            
            
            if($stmt->rowCount() != FALSE){
                $content = $stmt->fetchColumn();
                
                return $content;
            } else {
                
                return FALSE;
            }
        }
    }

    function create_image($id){
        if($stmt = $this->Crystal->Database->prepare("INSERT INTO `gallery`(`gallery`, `id_image`) VALUES ('$id','puste')")){
            
            $stmt->execute();
        }
    }

    function display_image($id){              
        $image = $this->load_image($id);
        
            if($image === FALSE){            
                $this->create_image($id);
                echo 'proba';
                $image = '';

            }

            if($this->Crystal->Auth->checkLoginStatus()){

                
                
                $edit_link = '<a class="crystal_gallery" href="' . SITE_PATH .'app/gallery.php?gallery=' . $id .'">
                <img style="border: 2px dashed black;" src="auu/'. $image  . '.jpg" alt="">
                
                </a>';
                

                echo  $edit_link ;
                
            
            } else {

                echo ' <img src="auu/'. $image  . '.jpg" alt="">';

            }

    }

    function updateImage($id,$content): void
    {
        if($stmt = $this->Crystal->Database->prepare("UPDATE `gallery` SET `id_image`=:content WHERE `gallery` =:id")){
            $stmt->bindValue(':content', $content, PDO::PARAM_STR);
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            
        }
    }

    

    


}