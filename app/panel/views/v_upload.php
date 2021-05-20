

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
            

<div class="row justify-content-md-center">


<div class="row">
<div class="col">

<div class="text-center">
  
             <div style="clear:both"> </div>
<i class="fa fa-picture-o " style="font-size:100px;text-align: center;" aria-hidden="true"></i>
</div>
</div>
</div>
<div class="row">
<div class="col">
<form enctype="multipart/form-data" method="post" action="" id="upload">
  <div class="mb-3">
  
  <input class="form-control" type="file" id="formFile" name="image_field">
  </div>
  <div class="text-center">
  
  <div style="clear:both"> </div>
  <input class="btn btn-primary btn-lg"  type="submit" name="Submit" value="upload">
  <a href="#" id="crystal_cancel" class="btn btn-secondary btn-lg">Zamknij</a>
  </div>
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