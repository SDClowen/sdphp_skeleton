<?php
require_once "vendor/autoload.php";

$elapsedTime = \Core\App::wakeup(__DIR__);
stackMessages("Page loaded in: $elapsedTime s", true);