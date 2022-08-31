<?php

namespace GlobalXtreme\OAuth2\Support;

use GlobalXtreme\OAuth2\GXEmployee;

trait GXOAutManager
{
    /**
     * @var GXClient
     */
    protected $employeeClient;


    /**
     * Set default client id and secret
     */
    public function __construct()
    {
        $this->employeeClient = new GXClient();
    }


    /**
     * @return void
     */
    public static function redirect()
    {
        header("Location: " . (new self)->employeeClient->getAuthUrl());
        exit();
    }

    /**
     * @return GXEmployee
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public static function employee()
    {
        $employee = (new self)->employeeClient->getEmployeeByToken();

        return new GXEmployee(isset($employee['employee']) ? $employee['employee'] : null);
    }

}
