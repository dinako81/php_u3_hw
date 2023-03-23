<?php

namespace App;

use App\Controler\HomeController;


class App {

    public static function process()
    {

// ipaistinti

    }
// routeris gauna masyva su url

// If sveitaine, eini is vetaine, if virtuve eini i virtuve
// ziurim visada metoda


    private static function router(array $url) 
    {
//  ipaistinti


    }


// funkcija kuri atvaizduos templlates
// buferio startas globalus

public static function views($tmp, $data = [])
    {
        $path = __DIR__ . '/../views/';
        extract($data);

        ob_start();
        require $path . 'top.php';
        require $path . $tmp . '.php';
        require $path . 'bottom.php';
        $html = ob_get_contents();
        ob_end_clean();
        return $html;

    }


}