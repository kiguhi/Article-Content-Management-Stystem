<?php
require_once 'conn.php';
require_once 'output_functions.php';
require_once 'header.php';
outputgradetwoeng1($_GET['article']);

g2engcomments($_GET['article'],TRUE);
require_once 'footer.php';
?>
        