<?php

namespace GlobalXtreme\OAuth2\Support;

use GlobalXtreme\OAuth2\Exception\InvalidStateException;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;

trait GXOAutManager
{
    /**
     * @var GXClient
     */
    protected $GXClient;


    /**
     * @return void
     */
    public static function redirect()
    {
        session_start();

        header("Location: " . self::setGXClient()->getAuthorizationUrl());
        exit();
    }

    /**
     * @return GXEmployee
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public static function employee()
    {
        session_start();

        if (self::hasInvalidState()) {
            throw new InvalidStateException();
        }

        $response = self::setGXClient()->getAccessToken();

        $employee = self::setGXClient()->getEmployee(
            $token = Arr::get($response, 'access_token')
        );

        session_destroy();
        return new GXEmployee($token, $employee);
    }


    /** --- SUB FUNCTIONS --- */

    private static function setGXClient()
    {
        return new GXClient();
    }

    private static function hasInvalidState()
    {
        if (!isset($_GET['state'])) {
            return true;
        }

        $state = isset($_SESSION['state']) ? $_SESSION['state'] : null;

        return empty($state) || $_GET['state'] !== $state;
    }

}
