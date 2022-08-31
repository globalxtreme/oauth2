<?php

namespace GlobalXtreme\OAuth2\Support;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

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
    public function getAuthUrl()
    {
        return "$this->baseUrl/oauth2/chooseEmployee?" . $this->setAuthFields();
    }

    /**
     * @param string $token
     *
     * @return array|null
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getEmployeeByToken()
    {
        $response = $this->getHttpClient()->get("$this->baseUrl/oauth2/user", [
            RequestOptions::HEADERS => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . (isset($_GET['token']) ? $_GET['token'] : ''),
            ]
        ]);

        $response = json_decode($response->getBody(), true);
        if (!isset($response['results'])) {
            return [];
        }

        return $response['results'] ?: [];
    }


    /** --- Functions --- */

    private function getHttpClient()
    {
        if (is_null($this->httpClient)) {
            $this->httpClient = new Client();
        }

        return $this->httpClient;
    }

    private function setAuthFields()
    {
        return http_build_query([
            'clientId' => $this->clientId,
            'clientSecret' => $this->clientSecret
        ]);
    }

}
