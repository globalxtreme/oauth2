<?php

namespace GlobalXtreme\OAuth2\Contracts;

interface GXEmployee
{
    /**
     * The function for get Employee ID
     *
     * @return string
     */
    public function getID();

    /**
     * The function for get Employee Full name
     *
     * @return string
     */
    public function getFullName();

    /**
     * The function for get Employee Given name
     *
     * @return string
     */
    public function getGivenName();

    /**
     * The function for get Employee Surname
     *
     * @return string
     */
    public function getSurname();

    /**
     * The function for get Employee Email
     *
     * @return string
     */
    public function getEmail();

    /**
     * The function for get Employee Gender
     *
     * @return string
     */
    public function getGender();

    /**
     * The function for get Employee Company office
     *
     * @return GXIDName
     */
    public function getCompanyOffice();

    /**
     * The function for get Employee Department
     *
     * @return GXIDName
     */
    public function getDepartment();

    /**
     * The function for get Employee Division
     *
     * @return GXIDName
     */
    public function getDivision();

    /**
     * The function for get Employee Job Position
     *
     * @return GXIDName
     */
    public function getJobPosition();

    /**
     * The function for get Employee Section
     *
     * @return GXIDName
     */
    public function getSection();

    /**
     * The function for get Employee Job level
     *
     * @return GXIDName
     */
    public function getJobLevel();

}