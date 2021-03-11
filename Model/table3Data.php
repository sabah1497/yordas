<?php

require_once ('Database.php');

class table3Data
{
    public $_Substances, $_RelatedInformation;

    public function __construct($dbRow)
    {
        $this->_Substances = $dbRow['Substances'];
        $this->_RelatedInformation = $dbRow['RelatedInformation'];
    }


    /**
     * @return mixed
     */
    public function getSubstances()
    {
        return $this->_Substances;
    }

    /**
     * @return mixed
     */
    public function getRelatedInformation()
    {
        return $this->_RelatedInformation;
    }


}


    ?>