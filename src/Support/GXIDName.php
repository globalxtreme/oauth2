<?php

namespace GlobalXtreme\OAuth2\Support;

use GlobalXtreme\OAuth2\Contracts\GXIDName as GXIDNameContract;

class GXIDName implements GXIDNameContract
{
    /**
     * @var array
     */
    protected $attribute = [];


    /**
     * @param $attribute
     */
    public function __construct($attribute)
    {
        $this->attribute = is_array($attribute) ? $attribute : func_get_args();
    }


    /**
     * @return int|mixed|string|null
     */
    public function getID()
    {
        return isset($this->attribute['id']) ? $this->attribute['id'] : null;
    }

    /**
     * @return mixed|string|null
     */
    public function getName()
    {
        return isset($this->attribute['name']) ? $this->attribute['name'] : null;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'id' => $this->getID(),
            'name' => $this->getName()
        ];
    }

}
