<?php

require_once ('Database.php');
require_once ('table2Data.php');
require_once ('table3Data.php');
require_once ('table4Data.php');

class table3DataSet{


    protected $_dbHandle, $_dbInstance;

    public function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }

    public function getFolder()
    {
        $sqlQuery = "SELECT * FROM yordas.table3";
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
        $dataSet = [];
        while ($row = $statement->fetch()) {
            $dataSet[] = new table3Data($row);
        }
        return $dataSet;
    }

}
?>