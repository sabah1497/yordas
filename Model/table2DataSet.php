<?php

require_once ('Database.php');
require_once ('table2Data.php');
require_once ('table3Data.php');
require_once ('table4Data.php');

class table2DataSet{


    protected $_dbHandle, $_dbInstance;

    public function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }

    public function getFile()
    {
        $sqlQuery = "SELECT * FROM yordas.table2";
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
        $dataSet = [];
        while ($row = $statement->fetch()) {
            $dataSet[] = new table2Data($row);
        }
        return $dataSet;

    }

    public function getAll()
    {
        $sqlQuery = "SELECT * FROM yordas.table2, yordas.table3, yordas.table4";
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
        $dataSet = [];
        while ($row = $statement->fetch()) {
            $dataSet[] = new table2Data($row);
            $dataSet[] = new table3Data($row);
        }
        return $dataSet;

    }

// SELECT table2.SubstanceID, table2.Substancename FROM table2 WHERE table2.ECnumber = "233-334-2"

    public function getEC($searchText)
    {
        $sqlQuery = "SELECT * FROM yordas.table2, yordas.table3 WHERE ECnumber LIKE '%".$searchText . "%' OR CASNumber LIKE '%".$searchText . "%'";
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
        $dataSet = [];
        while ($row = $statement->fetch()) {
            $dataSet[] = new table2Data($row);
        }
        return $dataSet;

    }

}
?>