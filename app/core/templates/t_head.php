<?php

declare(strict_types=1);

namespace Crystal;

?>
<link type="text/css" rel="stylesheet" href="<?php echo APP_RES; ?>css/colorbox.css" >
<script type="text/javascript" src="<?php echo APP_RES; ?>javascript/jquery.js" ></script>
<script type="text/javascript" src="<?php echo APP_RES; ?>javascript/jquery.colorbox-min.js" ></script>
<script type="text/javascript" src="<?php echo APP_RES; ?>javascript/tiny_mce/tiny_mce.js" ></script>

<script>

$(document).ready(function(){
        $('.crystal_edit').each(function(){
            var height = $(this).outerHeight();
            if(height < 25) {height = 25; }
            var width = $(this).parent().width();
            
            $(this).height(height).width(width);
            $(this).find('.crystal_edit_link').height(height-2).width(width-2);
        });

        $('#edit_t').click(function(e){
            e.preventDefault();
            
            if($(this).text() == 'Podgląd'){
                $(this).text('Edytuj');
            } else {
                $(this).text('Podgląd');
            }
            $('.crystal_edit_link').toggle();
            $('.crystal_edit_type').toggle();
        });

        $('.crystal_edit_link, .crystal_edit_type').click(function(e){
            $(this).colorbox({});

        });
    
    $('.crystal_panel, .crystal_password, .crystal_upload').click(function(e){
        $(this).colorbox({
            iframe: true,
            top: '25px',
            width: '600px',
            height: '600px'



        });
    });


       
    $('.crystal_upload').click(function(e){
        $(this).colorbox({
            iframe: true,
            top: '25px',
            width: '380px',
            height: '420px'



        });
    });
    
    $('.crystal_gallery').click(function(e){
        $(this).colorbox({
            iframe: true,
            top: '25px',
            width: '900px',
            height: '800px'



        });
    });

    $('.crystal_price').click(function(e){
        $(this).colorbox({
            iframe: true,
            top: '25px',
            width: '900px',
            height: '800px'



        });
    });
    
    

    });


</script>


