<?php
    require_once('../src/GeocoderAPI.php');
    require_once('../src/Exceptions/APIException.php');
    require_once('../src/Exceptions/ConfigException.php');

    // check post body
    if(isset($_POST['address'])) {
        $address = $_POST['address'];
        try{
            $geocoder = new GeocoderAPI();
            echo json_encode(['successful' => $geocoder->searchAddress($address)], JSON_UNESCAPED_UNICODE);
        }
        catch (APIException $exception)
        {

        }
        catch (ConfigException $exception)
        {

        }
    }
    else{
        header('Location: /');
    }