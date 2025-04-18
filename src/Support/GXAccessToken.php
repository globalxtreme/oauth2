<?php

namespace GlobalXtreme\OAuth2\Support;

use GlobalXtreme\OAuth2\Contracts\GXAccessToken as GXAccessTokenContract;

class GXAccessToken implements GXAccessTokenContract
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
        $this->attribute = $attribute;
    }


    /**
     * @return string|null
     */
    public function getAccessToken()
    {
        return !empty($this->attribute['access_token']) ? (string)$this->attribute['access_token'] : null;
    }

    /**
     * @return string|null
     */
    public function getTokenType()
    {
        return !empty($this->attribute['token_type']) ? (string)$this->attribute['token_type'] : null;
    }

    /**
     * @return int|null
     */
    public function getExpiresIn()
    {
        return !empty($this->attribute['expires_in']) ? (int)$this->attribute['expires_in'] : null;
    }

    /**
     * @return string|null
     */
    public function getScope()
    {
        return !empty($this->attribute['scope']) ? (string)$this->attribute['scope'] : null;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'accessToken' => $this->getAccessToken(),
            'tokenType' => $this->getTokenType(),
            'expiresIn' => $this->getExpiresIn(),
            'scope' => $this->getScope(),
        ];
    }

}
