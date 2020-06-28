<?php
require_once ('ConfigException.php');

class Config
{
    private const configFile = "../src/config.ini";
    private $key;

    // config class construct
    function __construct() {
        // check config file
        if (!is_file(self::configFile)) {
            throw (new ConfigException("Can't load config file"));
        }
        // read config file
        $ini_array = parse_ini_file(self::configFile, true);
        // check mandatory variables in config file
        if (!isset($ini_array['API']['key'])) {
            throw (new ConfigException("Config file corrupted"));
        }
        // check empty config variables
        if (empty($ini_array['API']['key'])) {
            throw (new ConfigException("You must set API config variables"));
        }
        // set properties
        $this->key = $ini_array['API']['key'];
    }

    public function getKey(): string
    {
        return $this->key;
    }
}