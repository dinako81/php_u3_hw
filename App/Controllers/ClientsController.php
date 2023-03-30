<?php
namespace App\Controllers;

use App\App;
use App\DB\Json;
use App\Services\Auth;
use App\Services\Messages;

class ClientsController {

    public function __construct()
    {
        if (!Auth::get()->isAuth()) {
            App::redirect('login');
            die;
        }
    }

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
        if ($client['personal_code'] == $_POST['personal_code']) {
            Messages::msg()->addMessage('Personal ID is not unique!', 'warning');
            return App::redirect('clients/create');
        }  
        if (strlen($_POST['personal_code']) < 11) {
            Messages::msg()->addMessage('Personal ID should have 11 digits!', 'warning');
            return App::redirect('clients/create');
        }
        // if (!preg_match('/^[3-6]\d{2}[0-1]\d[0-3]\d{4}$/', $_POST['personal_code'])) {
        //     Messages::msg()->addMessage("Personal ID isn't valid!", 'warning');
        //     return App::redirect('clients/create');
        // }
        if (strlen($_POST['name']) < 3) {
            Messages::msg()->addMessage('The name must contain at least 3 letters!', 'warning');
            return App::redirect('clients/create');
        }  
        if (strlen($_POST['surname']) < 3) {
            Messages::msg()->addMessage('The surname must contain at least 3 letters!', 'warning');
            return App::redirect('clients/create');
        }  
        if(!preg_match ("/^[a-zA-z]*$/", $_POST['name'] )) {  
            Messages::msg()->addMessage('Only letters are allowed in name!', 'warning');
            return App::redirect('clients/create');
        } 
        if(!preg_match ("/^[a-zA-z]*$/", $_POST['surname'] )) {  
            Messages::msg()->addMessage('Only letters are allowed in surname!', 'warning');
            return App::redirect('clients/create');
        } else {


        $data = [];
        $id = rand(1, 100000);
        $data['user_id'] = $id;
        $data['name'] = $_POST['name'];
        $data['surname'] = $_POST['surname'];
        $data['personal_code'] = $_POST['personal_code'];
        $data['acc_number'] = 'LT' . rand(0, 9) . rand(0, 9) . ' ' . '0014' . ' ' . '7' . rand(0, 9) . rand(0, 9) . rand(0, 9) . ' ' . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9)  . ' ' . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);
        $data['acc_balance'] = $_POST['acc_balance'];
        $data['tt'] = isset($_POST['tt']) ? 1 : 0;
        (new Json)->create($data);
        Messages::msg()->addMessage('New client was created', 'success');
        return App::redirect('clients');
        }
    }
    

    public function show($id)
    {
        $client = (new Json)->show($id);

        return App::views('clients/show', [
            'title' => 'Client Page',
            'client' => $client
        ]);
    }

    public function edit($id)
    {
        $client = (new Json)->show($id);

        return App::views('clients/edit', [
            'title' => 'Edit Client',
            'client' => $client
        ]);
    }

    public function update($id)
    {
        $data = [];
        $data['name'] = $_POST['name'];
        $data['surname'] = $_POST['surname'];
        $data['personal_code'] = $_POST['personal_code'];
        $data['acc_balance'] = $_POST['acc_balance'];
        $data['tt'] = isset($_POST['tt']) ? 1 : 0;
        (new Json)->update($id, $data); 
        Messages::msg()->addMessage('New client was edited', 'warning');
        return App::redirect('clients');
    }

    public function delete($id)
    {
        $client = (new Json)->show($id);

        if ($client['acc_balance'] > 0) {
            Messages::msg()->addMessage('Cannot delete client with a positive account balancei', 'danger');
            return App::redirect('clients');
        } else{
        (new Json)->delete($id);
        Messages::msg()->addMessage('The client has been deleted', 'warning');
        return App::redirect('clients');
        }
    }
    
}