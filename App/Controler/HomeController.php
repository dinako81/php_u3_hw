<?php

namespace App\HomeController;
// kad uzloadinti

use App\App;

class HomeController{

    public function Home ()
    
    {
            return App::view('home/index', [
                'title' => 'Home'
            ]);
    }


}