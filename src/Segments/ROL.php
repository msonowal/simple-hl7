<?php

namespace Msonowal\HL7\Segments;

use Msonowal\HL7\Segment;

/**
 * ROL segment class
 * 
 * http://hl7-definition.caristix.com:9010/Default.aspx?version=HL7%20v2.5.1&segment=ROL
 * https://www.interfaceware.com/hl7-standard/hl7-segment-ROL.html
 *
 * ROL: Role
 * The role segment contains the data necessary to add, update, correct, and delete from the record persons involved, as well as their functional involvement with the activity being transmitted.
 *  
 *  SEQ LENGTH  DT  OPT RPT / # TBL #   NAME
 *  ROL.1   60  EI  C   1       Role Instance ID
 *  ROL.2   2   ID  R   1   0287    Action Code
 *  ROL.3   250 CE  R   1   0443    Role-ROL
 *  ROL.4   250 XCN R   *       Role Person
 *  ROL.5   26  TS  O   1       Role Begin Date/Time
 *  ROL.6   26  TS  O   1       Role End Date/Time
 *  ROL.7   250 CE  O   1       Role Duration
 *  ROL.8   250 CE  O   1       Role Action Reason
 *  ROL.9   250 CE  O   *       Provider Type
 *  ROL.10  250 CE  O   1   0406    Organization Unit Type
 *  ROL.11  250 XAD O   *       Office/Home Address/Birthplace
 *  ROL.12  250 XTN O   *       Phone
 */

class ROL extends Segment
{	
	public function __construct(array $fields = null)
    {
        parent::__construct('ROL', $fields);
    }

    //Role Instance ID
    //EI.1  199 ST  O       Entity Identifier
    // EI.2    20  IS  O   0363    Namespace Id
    // EI.3    199 ST  C       Universal Id
    // EI.4    6   ID  C   0301    Universal Id Type
    public function setRoleInstanceId($value, int $position = 1)
    {
        return $this->setField($position, $value);
    }
	

    public function setActionCode($value, int $position = 2)
    {
		//AD/CO/DE/LI/UC/UN/UP
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setRole($value, int $position = 3)
    {
		//AD, AI (for assistant), AP
		//CP
		//DP
        // AD  Admitting
        // AT  Attending
        // CP  Consulting Provider
        // FHCP    Family Health Care Professional
        // PP  Primary Care Provider
        // RP  Referring Provider
        // RT  Referred to Provider    //
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setRolePerson($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setRoleBeginDateTime($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }


    public function getRoleInstanceId(int $position = 1)
    {
        return $this->getField($position);
    }

    public function getActionCode(int $position = 2)
    {
        return $this->getField($position);
    }

    public function getAssignedPatientLocation(int $position = 3)
    {
        return $this->getField($position);
    }

    public function getRole(int $position = 3)
    {
        return $this->getField($position);
    }

    public function getRolePerson(int $position = 4)
    {
        return $this->getField($position);
    }

    public function getRoleBeginDateTime(int $position = 5)
    {
        return $this->getField($position);
    }

}
