<?php
/**
 * Created by PhpStorm.
 * User: selkh
 * Date: 2/13/2018
 * Time: 4:39 PM
 */

class PremiumMember extends Member
{
    private $_indoorActivities, $_outdoorActivities;

    public function __construct($fname, $lname, $age, $gender, $phone, $indoorActivities, $outdoorActivities)
    {
        parent::__construct($fname, $lname, $age, $gender, $phone);
        $this->_indoorActivities = $indoorActivities;
        $this->_outdoorActivities = $outdoorActivities;
        $this-> premium = true;
    }

    //******************************************************************************
    /**
     * @return mixed
     */
    public function getIndoorActivities()
    {
        return $this->_indoorActivities;
    }

    /**
     * @param mixed $indoorActivities
     */
    public function setIndoorActivities($indoorActivities)
    {
        $this->_indoorActivities = $indoorActivities;
    }

    /**
     * @return mixed
     */
    public function getOutdoorActivities()
    {
        return $this->_outdoorActivities;
    }

    /**
     * @param mixed $outdoorActivities
     */
    public function setOutdoorActivities($outdoorActivities)
    {
        $this->_outdoorActivities = $outdoorActivities;
    }
}