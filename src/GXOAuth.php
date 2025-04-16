<?php

namespace GlobalXtreme\OAuth2;

use GlobalXtreme\OAuth2\Contracts\GXOAuth as GXOAuthContract;
use GlobalXtreme\OAuth2\Support\GXAccessToken;
use GlobalXtreme\OAuth2\Support\GXEmployee;
use GlobalXtreme\OAuth2\Support\GXOAutManager;
use Symfony\Component\HttpFoundation\RedirectResponse;


/**
 * @method static RedirectResponse      redirect()
 * @method static GXAccessToken         accessToken()
 * @method static GXEmployee            employee()
 * @method static GXEmployee            employeeFromToken(string $token)
 *
 * @method static GXOAuth   __set_state(array $array)
 *
 * </autodoc>
 */
class GXOAuth implements GXOAuthContract
{
    use GXOAutManager;
}
