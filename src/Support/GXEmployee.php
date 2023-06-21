<?php

namespace GlobalXtreme\OAuth2\Support;

use GlobalXtreme\OAuth2\Contracts\GXEmployee as GXEmployeeContract;

class GXEmployee implements GXEmployeeContract
{
    /**
     * @var string
     */
    protected $token;

    /**
     * @var array
     */
    protected $attribute;


    /**
     * @param $token
     * @param $attribute
     */
    public function __construct($token, $attribute)
    {
        $this->token = $token;
        $this->attribute = is_array($attribute) ? $attribute : func_get_args();
    }


    /**
     * @return string|null
     */
    public function getToken()
    {
        return $this->token;
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
     * @return GXIDName|array
     */
    public function getCompanyOffice()
    {
        return isset($this->attribute['companyOffice']) ? new GXIDName($this->attribute['companyOffice']) : [];
    }

    /**
     * @return GXIDName|array
     */
    public function getDepartment()
    {
        return isset($this->attribute['department']) ? new GXIDName($this->attribute['department']) : [];
    }

    /**
     * @return GXIDName|array
     */
    public function getDivision()
    {
        return isset($this->attribute['division']) ? new GXIDName($this->attribute['division']) : [];
    }

    /**
     * @return GXIDName|array
     */
    public function getJobPosition()
    {
        return isset($this->attribute['jobPosition']) ? new GXIDName($this->attribute['jobPosition']) : [];
    }

    /**
     * @return GXIDName|array
     */
    public function getSection()
    {
        return isset($this->attribute['section']) ? new GXIDName($this->attribute['section']) : [];
    }

    /**
     * @return GXIDName|array
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
            'companyOffice' => ($companyOffice = $this->getCompanyOffice()) ? $companyOffice->toArray() : null,
            'department' => ($department = $this->getDepartment()) ? $department->toArray() : null,
            'division' => ($division = $this->getDivision()) ? $division->toArray() : null,
            'jobPosition' => ($jobPosition = $this->getJobPosition()) ? $jobPosition->toArray() : null,
            'section' => ($section = $this->getSection()) ? $section->toArray() : null,
            'jobLevel' => ($jobLevel = $this->getJobLevel()) ? $jobLevel->toArray() : null,
        ];
    }

}
