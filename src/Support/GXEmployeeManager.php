<?php

namespace GlobalXtreme\OAuth2\Support;

trait GXEmployeeManager
{
    /**
     * @var array
     */
    protected $attribute;

    /**
     * @param $attribute
     */
    public function __construct($attribute)
    {
        $this->attribute = is_array($attribute) ? $attribute : func_get_args();
    }


    /**
     * @return string|null
     */
    public function getID()
    {
        return isset($this->attribute['id']) ? $this->attribute['id'] : null;
    }

    /**
     * @return mixed|null
     */
    public function getEmployeeNo()
    {
        return isset($this->attribute['employeeNo']) ? $this->attribute['employeeNo'] : null;
    }

    /**
     * @return mixed|null
     */
    public function getFullName()
    {
        return isset($this->attribute['fullName']) ? $this->attribute['fullName'] : null;
    }

    /**
     * @return string|null
     */
    public function getGivenName()
    {
        return isset($this->attribute['givenName']) ? $this->attribute['givenName'] : null;
    }

    /**
     * @return string|null
     */
    public function getSurname()
    {
        return isset($this->attribute['surname']) ? $this->attribute['surname'] : null;
    }

    /**
     * @return string|null
     */
    public function getEmail()
    {
        return isset($this->attribute['email']) ? $this->attribute['email'] : null;
    }

    /**
     * @return string|null
     */
    public function getGender()
    {
        return isset($this->attribute['email']) ? $this->attribute['email'] : null;
    }

    /**
     * @return \GlobalXtreme\OAuth2\Contracts\GXIDName|array
     */
    public function getCompanyOffice()
    {
        return isset($this->attribute['companyOffice']) ? new GXIDName($this->attribute['companyOffice']) : [];
    }

    /**
     * @return \GlobalXtreme\OAuth2\Contracts\GXIDName|array
     */
    public function getDepartment()
    {
        return isset($this->attribute['department']) ? new GXIDName($this->attribute['department']) : [];
    }

    /**
     * @return \GlobalXtreme\OAuth2\Contracts\GXIDName|array
     */
    public function getDivision()
    {
        return isset($this->attribute['division']) ? new GXIDName($this->attribute['division']) : [];
    }

    /**
     * @return \GlobalXtreme\OAuth2\Contracts\GXIDName|array
     */
    public function getJobPosition()
    {
        return isset($this->attribute['jobPosition']) ? new GXIDName($this->attribute['jobPosition']) : [];
    }

    /**
     * @return \GlobalXtreme\OAuth2\Contracts\GXIDName|array
     */
    public function getSection()
    {
        return isset($this->attribute['section']) ? new GXIDName($this->attribute['section']) : [];
    }

    /**
     * @return \GlobalXtreme\OAuth2\Contracts\GXIDName|array
     */
    public function getJobLevel()
    {
        return isset($this->attribute['jobLevel']) ? new GXIDName($this->attribute['jobLevel']) : [];
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'id' => $this->getID(),
            'employeeNo' => $this->getEmployeeNo(),
            'fullName' => $this->getFullName(),
            'givenName' => $this->getGivenName(),
            'surname' => $this->getSurname(),
            'email' => $this->getEmail(),
            'gender' => $this->getGender(),
            'companyOffice' => optional($this->getCompanyOffice())->toArray(),
            'department' => optional($this->getDepartment())->toArray(),
            'division' => optional($this->getDivision())->toArray(),
            'jobPosition' => optional($this->getJobPosition())->toArray(),
            'section' => optional($this->getSection())->toArray(),
            'jobLevel' => optional($this->getJobLevel())->toArray(),
        ];
    }

}