<?php

require_once ('Database.php');

class table2Data
{
    public $_SubstanceID, $_ECnumber, $_CASnumber, $_Substancename;

    public function __construct($dbRow)
    {
        $this->_SubstanceID = $dbRow['SubstanceID'];
        $this->_ECnumber = $dbRow['ECnumber'];
        $this->_CASnumber = $dbRow['CASnumber'];
        $this->_Substancename = $dbRow['Substancename'];
    }

    /**
     * @return mixed
     */
    public function getSubstanceID()
    {
        return $this->_SubstanceID;
    }


    /**
     * @return mixed
     */
    public function getECNumber()
    {
        return $this->_ECnumber;
    }


    /**
     * @param mixed $CAS_number
     */
    public function getCASNumber()
    {
        return $this->_CASnumber;
    }


    /**
     * @return mixed
     */
    public function getSubstanceName()
    {
        return $this->_Substancename;
    }
}


    ?>