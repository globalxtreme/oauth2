<?php

namespace GlobalXtreme\OAuth2\Contracts;

interface GXOAuth
{
    /**
     * Redirect the user to the authentication page for the provider.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public static function redirect();

    /**
     * Get the GXUser instance for the authenticated employee.
     *
     * @return \GlobalXtreme\OAuth2\Contracts\GXAccessToken
     */
    public static function accessToken();

    /**
     * Get the GXUser instance for the authenticated employee.
     *
     * @return \GlobalXtreme\OAuth2\Contracts\GXEmployee
     */
    public static function employee();

    /**
     * Get the GXUser instance for the authenticated employee.
     *
     * @return \GlobalXtreme\OAuth2\Contracts\GXEmployee
     */
    public static function employeeFromToken(string $token);

}
