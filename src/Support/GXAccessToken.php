<?php

namespace GlobalXtreme\OAuth2\Support;

class GXAccessToken
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
        return isset($this->attribute['access_token']) ? $this->attribute['access_token'] : null;
    }

    /**
     * @return string|null
     */
    public function getTokenType()
    {
        return isset($this->attribute['token_type']) ? $this->attribute['token_type'] : null;
    }

    /**
     * @return int|null
     */
    public function getExpiresIn()
    {
        return isset($this->attribute['expires_in']) ? $this->attribute['expires_in'] : null;
    }

    /**
     * @return string|null
     */
    public function getScope()
    {
        return isset($this->attribute['scope']) ? $this->attribute['scope'] : null;
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
