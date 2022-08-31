<?php

namespace GlobalXtreme\OAuth2;

use GlobalXtreme\OAuth2\Contracts\GXOAuth as GXOAuthContract;
use GlobalXtreme\OAuth2\Support\GXOAutManager;
use Symfony\Component\HttpFoundation\RedirectResponse;


/**
 * @method static RedirectResponse      redirect()
 * @method static GXEmployee            employee()
 *
 * @method static GXOAuth   __set_state(array $array)
 *
 * </autodoc>
 */
class GXOAuth implements GXOAuthContract
{
    use GXOAutManager;
}
