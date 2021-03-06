<?php

declare(strict_types=1);

namespace Crystal;

$this->load(APP_PATH . 'core/templates/t_page_head.php');
?>

<div class="panel-wrapper">

    <h1>Ustawienia</h1>
    <a href="#" id="crystal_cancel" class="btn btn-succes b-close">Zamknij</a>


    <div class="crystal-panel-left">
        <ul class="nav nav-tabs nav-stacked">
            <li><a href="<?php SITE_PATH ?>../panel/index.php">Start</a></li>
            <li><a href="<?php SITE_PATH ?>../settings/password.php">Zmień hasło</a></li>
            <li><a href="<?php SITE_PATH ?>../panel/index.php">Użytkownicy</a></li>
            <li><a href="<?php SITE_PATH ?>../panel/index.php">Opcje</a></li>
        </ul>
    </div>
    <div class="crystal-panel-right">
        <h2>Panel ustawień</h2>
        <p>Wybierz opcje z lewej kolumny</p>
    </div>

</div>

<?php
$this->load(APP_PATH . 'core/templates/t_page_foot.php');
?>

