<?php

namespace GlobalXtreme\OAuth2;

use GlobalXtreme\OAuth2\Contracts\GXIDName;
use GlobalXtreme\OAuth2\Contracts\GXEmployee as GXEmployeeContract;
use GlobalXtreme\OAuth2\Support\GXEmployeeManager;


/**
 * @method string           getID()
 * @method string           getFullName()
 * @method string           getGivenName()
 * @method string           getSurname()
 * @method string           getEmail()
 * @method string           getGender()
 * @method GXIDName         getCompanyOffice()
 * @method GXIDName         getDepartment()
 * @method GXIDName         getDivision()
 * @method GXIDName         getJobPosition()
 * @method GXIDName         getSection()
 * @method GXIDName         getJobLevel()
 *
 * @method static GXEmployee   __set_state(array $array)
 *
 * </autodoc>
 */
class GXEmployee implements GXEmployeeContract
{
    use GXEmployeeManager;
}
