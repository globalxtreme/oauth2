<?php

namespace GlobalXtreme\OAuth2\Support;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class GXClient
{
    /**
     * @var string
     */
    public $baseUrl = 'https://employee.dps.globalxtreme.net';

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientSecret;

    /**
     * @var Client
     */
    protected $httpClient;


    /**
     * Set up base configuration
     */
    public function __construct()
    {
        $this->baseUrl = isset($_ENV['BASE_URL']) ? $_ENV['BASE_URL'] : $this->baseUrl;
        $this->clientId = isset($_ENV['CLIENT_ID']) ? $_ENV['CLIENT_ID'] : '';
        $this->clientSecret = isset($_ENV['CLIENT_SECRET']) ? $_ENV['CLIENT_SECRET'] : '';
    }


    /**
     * @return string
     */
    public function getAuthorizationUrl()
    {
        return "$this->baseUrl/oauth2/authorization?" . $this->setAuthorizationFields();
    }

    public function getAccessToken()
    {
        $response = $this->getHttpClient()->post("$this->baseUrl/oauth2/token", [
            RequestOptions::HEADERS => $this->getHeaders(),
            RequestOptions::FORM_PARAMS => $this->getTokenFields(),
        ]);

        return json_decode($response->getBody(), true);
    }

    /**
     * @param string $token
     *
     * @return array|null
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getEmployee($token)
    {
        $response = $this->getHttpClient()->get("$this->baseUrl/oauth2/user", [
            RequestOptions::HEADERS => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $token,
            ]
        ]);

        return json_decode($response->getBody(), true);
    }


    /** --- Functions --- */

    private function getHttpClient()
    {
        if (is_null($this->httpClient)) {
            $this->httpClient = new Client();
        }

        return $this->httpClient;
    }

    private function setAuthorizationFields()
    {
        $_SESSION['state'] = $state = Str::random(40);

        return http_build_query([
            'state' => $state,
            'client_id' => $this->clientId
        ]);
    }

    private function getHeaders()
    {
        return ['Accept' => 'application/json'];
    }

    private function getTokenFields()
    {
        return [
            'grant_type' => 'authorization_code',
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'code' => $_GET['code'],
            'redirect_uri' => "",
        ];
    }

}
