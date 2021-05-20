<?php

declare(strict_types=1);




?>



<!DOCTYPE html>
<head>
    <title>Crystal Beauty Krystyna Pawelec</title>
    <meta charset="UTF-8">
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/7d9c307444.js"></script>
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



<div class="container">
<br>
<br>
<div style="position:absolute;right:5px;top:5px;">
<a href="#" id="crystal_cancel" class="btn btn-secondary btn-lg">Zamknij</a>
</div>           

<div class="row justify-content-md-center">


<div class="row">
<div class="col">

<div class="text-center">
  
             <div style="clear:both"> </div>
             <h1>Zmień hasło <i class="fa fa-key" aria-hidden="true"></i> </h1>
</div>
</div>
</div>
<div class="row">
<div class="col">
<form action="#" method="post" id="edit">

            <label class="form-control"   for="oldpass">Stare hasło</label>
            <input class="form-control"  type="password" name="oldpass" id="oldpass" value="<?php echo $this->getData('oldpass'); ?>">
            <label class="form-control"  for="newpass">Nowe hasło</label>
            <input class="form-control"  type="password" name="newpass" id="newpass" value="<?php echo $this->getData('newpass'); ?>">
            <label class="form-control"   for="newpass2">Powtórz nowe hasło</label>
            <input class="form-control"  type="password" name="newpass2" id="newpass2" value="<?php echo $this->getData('newpass2'); ?>">

            <br>
            <br>
            <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Wyślij">
        </form>

<br>
<?php
        $alerts = $this->getAlerts();
        if($alerts !=''){
            echo $alerts ;
        }
        ?>






</form>
</div>
</div>


</div>
</div>

</body>



        
  



