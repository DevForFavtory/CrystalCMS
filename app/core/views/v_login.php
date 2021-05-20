<script>

    $(document).ready(function(){
    
        $('#login').submit(function(e){
        
            e.preventDefault();

            var username = $('input#username').val();
            var password = $('input#password').val();
            var dataString ='username=' + username + '&password=' + password;

            $.ajax({
                type: "POST",
                url: "<?php echo SITE_PATH; ?>app/login.php",
                data: dataString,
                cache: false,
                success: function(html){

                    $('#cboxLoadedContent').html(html);

                }



            })
        });



        $('#crystal_cancel').live('click', function(e){
            e.preventDefault();

            $.colorbox.close();

            var page = window.location.href;
            page = page.substring(0, page.lastIndexOf('?'));
            window.location = page;


        });
     
});

</script>
<head>
    <link href="app/res/css/bootstrap.min.css" rel="stylesheet">
    <link href="app/res/css/signin.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->




    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

</head>

<div class="">

<form action="" method="post" class="form-signin" id="login">
<a href="#" id="crystal_cancel" class="cancel btn btn-succes">Zamknij</a>
    <img class="mb-4" src="app/res/images/logo.svg" alt="" >
    <h1 class="h3 mb-3 font-weight-normal">Proszę się zalogować</h1>


    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="text" name="username" id="username" class="form-control"  placeholder="Login"  value="<?php echo $this->getData('input_user'); ?>"  autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="Password" value="<?php echo $this->getData('input_pass'); ?>" >
    <div class="checkbox mb-3">
        <?php
        $alerts = $this->getAlerts();
        if($alerts !=''){
            echo '<ul class="alerts">' . $alerts . '</ul>';
        }
        ?>
    </div>
    <input class="btn btn-lg btn-primary btn-block" name="submit"  style=" background-color:black;" type="submit" value="Sign in">
    <p class="mt-5 mb-3 text-muted">&copy; 2019-2021</p>
</form>

</div>





