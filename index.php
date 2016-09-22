<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);


// loads
require('lib/bootstrap.php');
require('lib/request.php');
require('lib/model.php');
require('lib/controller.php');
require('lib/view.php');
require('lib/db.php');


$app = new Bootstrap();
?>