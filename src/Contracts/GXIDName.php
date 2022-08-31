<?php

namespace GlobalXtreme\OAuth2\Contracts;

interface GXIDName
{
    /**
     * The get id from employee response
     *
     * @return int|string|null
     */
    public function getID();

    /**
     * The getting name from employee response
     *
     * @return string|null
     */
    public function getName();

}
