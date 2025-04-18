<?php

namespace GlobalXtreme\OAuth2\Contracts;

interface GXAccessToken
{
    /**
     * The function for get access token
     *
     * @return string|null
     */
    public function getAccessToken();

    /**
     * The function for get Employee ID
     *
     * @return string|null
     */
    public function getTokenType();

    /**
     * The function for get Employee Number
     *
     * @return int|null
     */
    public function getExpiresIn();

    /**
     * The function for get Employee Full name
     *
     * @return string|null
     */
    public function getScope();

}