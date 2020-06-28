<?php

require_once ('Config.php');

class GeocoderAPI
{
    private $config;

    public function __construct()
    {
        // load config
        $this->config = new Config();
    }

    public function searchAddress(string $address): array
    {
        $queryParameters = [
            'apikey' => $this->config->getKey(),
            'geocode' => $address,
            'format' => 'json',
        ];
        $response = file_get_contents($this->config->getDomain() . '?asa' . http_build_query($queryParameters));
        if($response === false){
            throw new APIException('Error while accessing the API service');
        }
        return json_decode($response, true);
    }

    public function searchMetro(string $coordinates): array
    {
        $queryParameters = [
            'apikey' => $this->config->getKey(),
            'geocode' => $coordinates,
            'kind' => 'metro',
            'results' => 1,
            'format' => 'json'
        ];
        $response = file_get_contents($this->config->getDomain() . '?' . http_build_query($queryParameters));
        if($response === false){
            throw new APIException('Error while accessing the API service');
        }
        return json_decode($response, true);
    }
}