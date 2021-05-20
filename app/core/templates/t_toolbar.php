<?php

declare(strict_types=1);

namespace Crystal;

?>
<div id="toolbar">
    <div id="toolbar-wrapper">
    <div class="span9">
    <strong>Crystal Beauty</strong> &nbsp; &nbsp;
     <a href="#" id="edit_t">Podgląd</a>
        &nbsp; | &nbsp; <a href="<?php echo SITE_PATH ?>app/settings/password.php" class="crystal_password">Zmiana hasła</a>
        &nbsp; | &nbsp; <a href="<?php echo SITE_PATH ?>app/upload.php" class="crystal_upload">Dodaj zdjęcie</a>
        &nbsp; | &nbsp; <a href="<?php echo SITE_PATH ?>app/gallery.php" class="crystal_gallery">Galeria</a>
       




    </div>
    
    
    
    
    
    <div class="span3">
    Witaj <strong><?php echo $_SESSION['username']   ?></strong>&nbsp; | &nbsp; <?php echo "<a href='" . SITE_PATH . "app/logout.php' >Wyloguj</a>"; ?>
    </div>


    </div>


</div>