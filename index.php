
<?php
require_once('view/header.phtml');
require_once ('Model/table2DataSet.php');
require_once ('Model/table3DataSet.php');
require_once ('Model/table4DataSet.php');

$view = new stdClass();
$table = new table2DataSet();
$view->allDetails = $table->getFile();



$tables = new table3DataSet();
$view->folder = $tables->getFolder();

$tab = new table4DataSet();
$view->tab = $tab->getTab();


require_once('view/index.phtml');
?>