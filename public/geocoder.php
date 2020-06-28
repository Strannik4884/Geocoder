<?php
    require_once('../src/Config.php');

    // check post body
    if(isset($_POST['address'])) {
        $address = $_POST['address'];
        try {
            // load config file
            $config = new Config();
        }
        catch (ConfigException $exception){
            echo json_encode(['error' => $exception->getMessage()]);
        }
    }
    else{
        header('Location: /');
    }