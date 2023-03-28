<?php
namespace App\Controllers;

use App\App;
use App\DB\Json;

class ClientsController {

    public function index()
    {
        $clients = (new Json)->showAll();
        return App::views('clients/index', [
            'title' => 'Clients List',
            'clients' => $clients
        ]);
    }

    public function create()
    {
        
        return App::views('clients/create', [
            'title' => 'New Client'
        ]);
    }
    public function store()
    {
        $data = [];
        $data['name'] = $_POST['name'];
        $data['surname'] = $_POST['surname'];
        $data['tt'] = isset($_POST['tt']) ? 1 : 0;
        (new Json)->create($data);
        return App::redirect('clients');
    }


    
}