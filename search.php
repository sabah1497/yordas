<?php



require_once('Model/table2DataSet.php');
require_once('Model/table3DataSet.php');


$view = new stdClass();


$table = new table2DataSet();

if(isset($_POST['submitSearch']))
{
    $searchText=$_POST['search'];

    $view->allDetails = $table->getEC($searchText);
}
else
{
    echo '';
//    $view->all = $table->getAll();

}

require_once('view/header.phtml');
require_once('view/index.phtml');
