<?php

declare(strict_types=1);

namespace Crystal;

define("SITE_PATH","http://localhost/crystal/");
define("APP_PATH",str_replace("\\","/",dirname(__FILE__)) . "/" );
define("APP_RES","http://localhost/crystal/app/res/");

require_once(APP_PATH . "core/core.php");

$configuration = require_once("config/config.php");

$Crystal = new Crystal_Core($configuration);
