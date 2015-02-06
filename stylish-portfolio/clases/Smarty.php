<?php
require_once('../libs/Smarty.class.php');
 
global $smarty;//suelo denominar a smarty como única variable global en mis desarrollos


$smarty = new Smarty;

$smarty->compile_check = true;
$smarty->debugging = false;
$smarty->force_compile = 1;
$smarty->template_dir  = '../templates';
$smarty->compile_dir   = '../templates_c';

?>