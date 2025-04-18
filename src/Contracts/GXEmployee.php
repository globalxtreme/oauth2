<?php

namespace GlobalXtreme\OAuth2\Contracts;

interface GXEmployee
{
    /**
     * The function for get access token
     *
     * @return string|null
     */
    public function getToken();

    /**
     * The function for get Employee ID
     *
     * @return string|null
     */
    public function getID();

    /**
     * The function for get Employee Number
     *
     * @return string|null
     */
    public function getEmployeeNo();

    /**
     * The function for get Employee Full name
     *
     * @return string|null
     */
    public function getFullName();

    /**
     * The function for get Employee Given name
     *
     * @return string|null
     */
    public function getGivenName();

    /**
     * The function for get Employee Surname
     *
     * @return string|null
     */
    public function getSurname();

    /**
     * The function for get Employee Email
     *
     * @return string|null
     */
    public function getEmail();

    /**
     * The function for get Employee Gender
     *
     * @return string|null
     */
    public function getGender();

    /**
     * The function for get Employee Company office
     *
     * @return int|null
     */
    public function getCompanyOfficeId();

    /**
     * The function for get Employee Company office
     *
     * @return string|null
     */
    public function getCompanyOfficeName();

    /**
     * The function for get Employee Department
     *
     * @return int|null
     */
    public function getDepartmentId();

    /**
     * The function for get Employee Department
     *
     * @return string|null
     */
    public function getDepartmentName();

    /**
     * The function for get Employee Division
     *
     * @return int|null
     */
    public function getDivisionId();

    /**
     * The function for get Employee Division
     *
     * @return string|null
     */
    public function getDivisionName();

    /**
     * The function for get Employee Section
     *
     * @return int|null
     */
    public function getSectionId();

    /**
     * The function for get Employee Section
     *
     * @return string|null
     */
    public function getSectionName();

    /**
     * The function for get Employee Job Position
     *
     * @return int|null
     */
    public function getJobPositionId();

    /**
     * The function for get Employee Job Position
     *
     * @return string|null
     */
    public function getJobPositionName();

    /**
     * The function for get Employee Job level
     *
     * @return int|null
     */
    public function getJobLevelId();

    /**
     * The function for get Employee Job level
     *
     * @return string|null
     */
    public function getJobLevelName();

}