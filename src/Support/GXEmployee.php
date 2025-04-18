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
        return !empty($this->attribute['id']) ? (string)$this->attribute['id'] : null;
    }

    /**
     * @return mixed|null
     */
    public function getEmployeeNo()
    {
        return !empty($this->attribute['employeeNo']) ? (string)$this->attribute['employeeNo'] : null;
    }

    /**
     * @return mixed|null
     */
    public function getFullName()
    {
        return !empty($this->attribute['fullName']) ? (string)$this->attribute['fullName'] : null;
    }

    /**
     * @return string|null
     */
    public function getGivenName()
    {
        return !empty($this->attribute['givenName']) ? (string)$this->attribute['givenName'] : null;
    }

    /**
     * @return string|null
     */
    public function getSurname()
    {
        return !empty($this->attribute['surname']) ? (string)$this->attribute['surname'] : null;
    }

    /**
     * @return string|null
     */
    public function getEmail()
    {
        return !empty($this->attribute['email']) ? (string)$this->attribute['email'] : null;
    }

    /**
     * @return string|null
     */
    public function getGender()
    {
        return !empty($this->attribute['gender']) ? (string)$this->attribute['gender'] : null;
    }

    /**
     * @return int|null
     */
    public function getCompanyOfficeId()
    {
        return !empty($this->attribute['companyOfficeId']) ? (int)$this->attribute['companyOfficeId'] : null;
    }

    /**
     * @return string|null
     */
    public function getCompanyOfficeName()
    {
        return !empty($this->attribute['companyOfficeName']) ? (string)$this->attribute['companyOfficeName'] : null;
    }

    /**
     * @return int|null
     */
    public function getDepartmentId()
    {
        return !empty($this->attribute['departmentId']) ? (int)$this->attribute['departmentId'] : null;
    }

    /**
     * @return string|null
     */
    public function getDepartmentName()
    {
        return !empty($this->attribute['departmentName']) ? (string)$this->attribute['departmentName'] : null;
    }

    /**
     * @return int|null
     */
    public function getDivisionId()
    {
        return !empty($this->attribute['divisionId']) ? (int)$this->attribute['divisionId'] : null;
    }

    /**
     * @return string|null
     */
    public function getDivisionName()
    {
        return !empty($this->attribute['divisionName']) ? (string)$this->attribute['divisionName'] : null;
    }

    /**
     * @return int|null
     */
    public function getJobPositionId()
    {
        return !empty($this->attribute['jobPositionId']) ? (int)$this->attribute['jobPositionId'] : null;
    }

    /**
     * @return string|null
     */
    public function getJobPositionName()
    {
        return !empty($this->attribute['jobPositionName']) ? (string)$this->attribute['jobPositionName'] : null;
    }

    /**
     * @return int|null
     */
    public function getSectionId()
    {
        return !empty($this->attribute['sectionId']) ? (int)$this->attribute['sectionId'] : null;
    }

    /**
     * @return string|null
     */
    public function getSectionName()
    {
        return !empty($this->attribute['sectionName']) ? (string)$this->attribute['sectionName'] : null;
    }

    /**
     * @return int|null
     */
    public function getJobLevelId()
    {
        return !empty($this->attribute['jobLevelId']) ? (int)$this->attribute['jobLevelId'] : null;
    }

    /**
     * @return string|null
     */
    public function getJobLevelName()
    {
        return !empty($this->attribute['jobLevelName']) ? (string)$this->attribute['jobLevelName'] : null;
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
            'companyOfficeId' => $this->getCompanyOfficeId(),
            'companyOfficeName' => $this->getCompanyOfficeName(),
            'departmentId' => $this->getDepartmentId(),
            'departmentName' => $this->getDepartmentName(),
            'divisionId' => $this->getDivisionId(),
            'divisionName' => $this->getDivisionName(),
            'sectionId' => $this->getSectionId(),
            'sectionName' => $this->getSectionName(),
            'JobPositionId' => $this->getJobPositionId(),
            'JobPositionName' => $this->getJobPositionName(),
            'JobLevelId' => $this->getJobLevelId(),
            'JobLevelName' => $this->getJobLevelName(),
        ];
    }

}
