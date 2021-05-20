<?php

declare(strict_types=1);

namespace Crystal;

include('../init.php');
$Crystal->Auth->checkAuthorization();

$Crystal->Template->load(APP_PATH . 'panel/views/v_panel.php');


