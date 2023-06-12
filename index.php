<?php

require_once "src/App.php";

$elapsedTime = \Core\App::weakup(__DIR__);
echo __DIR__;
stackMessages("Page loaded in: $elapsedTime s", true);