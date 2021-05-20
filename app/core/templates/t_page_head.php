<?php

declare(strict_types=1);

namespace Crystal;

?>

<!DOCTYPE html>
<head>
    <title>Crystal Beauty Krystyna Pawelec</title>
    <meta charset="UTF-8">
    
    
    <link type="text/css" rel="stylesheet" href="<?php echo APP_RES; ?>css/crystal_style.css" >
    <script type="text/javascript" src="<?php echo APP_RES; ?>javascript/jquery.js" ></script>
    
    <script>
        
        $(document).ready(function(){
            
            $('#crystal_cancel').live('click', function(e){
                e.preventDefault();
                parent.$.colorbox.close();
            });
            
        });
        
    </script>
    
</head>

<body>