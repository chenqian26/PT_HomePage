<?php
include_once("Smarty.class.php");
$smarty = new Smarty();
$smarty->setTemplateDir("/home/work/cq_work/PT_HomePage/public/plugins/Smarty/libs/templates");
#var_dump($smarty->template_dir);exit;
$smarty->setCompileDir("./templates_c");
$smarty->setCaching(false);
$smarty->setCacheDir("./cache");

$smarty->left_delimiter ="{";
$smarty->right_delimiter ="}";

?>
