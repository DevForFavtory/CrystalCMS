<?php

declare(strict_types=1);

namespace Crystal;

include("init.php");

$Crystal->Auth->logout();
$Crystal->Template->redirect(SITE_PATH);
