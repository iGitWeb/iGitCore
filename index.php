<?php
    require_once("bin/core/iGit.core.php");
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    $app = new iGcore();
    $app->module->getModule();
?>