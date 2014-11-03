<?php 

spl_autoload_register ('autoload');
function autoload ($className) {
  $fileName ='models/'.$className . '.php';
  include  $fileName;
  }

require_once 'config.php'; 
require_once 'framework/rout.php'; 
require_once 'framework/model.php'; 
require_once 'framework/arrayModel.php'; 
require_once 'framework/sqlModel.php';
require_once 'framework/view.php'; 
require_once 'framework/controller.php'; 
Rout::start();

