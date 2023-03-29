<?php
namespace App\Controllers;

use App\App;
use App\DB\Json;
use App\Services\Auth;
use App\Services\Messages;

class FundsController {

    public function addFunds($id)
    {
        $client = (new Json)->show($id);
        return App::views('clients/addfunds', [
            'title' => 'Add Funds',
            'client' => $client
        ]);
    }

    public function plusFunds($id)
    {
        if ($_POST['acc_balance'] < 0)
        {
            Messages::msg()->addMessage('The sum must be positive!', 'danger');
            return App::redirect('clients');
        }

        if (!is_numeric($_POST['acc_balance'] )) 
        {
            Messages::msg()->addMessage('The value should be only number!', 'danger');
            return App::redirect('clients');
        }
        else{
            $client = (new Json)->show($id);
            $data = [
                'name' => $client['name'],
                'surname'=> $client['surname'],
                'personal_code' => $client['personal_code'],
                'acc_number' => $client['acc_number'],
                'acc_balance' => $client['acc_balance'] + $_POST['acc_balance'],
                'tt' => $client['tt'],
            ];
        (new Json)->update($id, $data); 
        Messages::msg()->addMessage('Funds has added', 'success');
        return App::redirect('clients');
    }
}

    public function withdrawFunds($id)
    {
        $client = (new Json)->show($id);
        return App::views('clients/withdrawfunds', [
            'title' => 'Withdraw Funds',
            'client' => $client
        ]);
    }

    public function minusFunds($id)
    {
        // if ($_POST['acc_balance'] > $client['acc_balance'])
        // {
        //     Messages::msg()->addMessage('There are not enough funds in the account!', 'danger');
        //     return App::redirect('clients');
        // }

        if ($_POST['acc_balance'] < 0)
        {
            Messages::msg()->addMessage('The sum must be positive!', 'danger');
            return App::redirect('clients');
        }

        if (!is_numeric($_POST['acc_balance'] )) 
        {
            Messages::msg()->addMessage('The value should be only number!', 'danger');
            return App::redirect('clients');
        }
        else{
            $client = (new Json)->show($id);
            $data = [
                'name' => $client['name'],
                'surname'=> $client['surname'],
                'personal_code' => $client['personal_code'],
                'acc_number' => $client['acc_number'],
                'acc_balance' => $client['acc_balance'] - $_POST['acc_balance'],
                'tt' => $client['tt'],
            ];
        (new Json)->update($id, $data); 
        Messages::msg()->addMessage('Funds has withdrawed', 'success');
        return App::redirect('clients');
    }
}
    }