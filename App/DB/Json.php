<?php
namespace App\DB;

use Ramsey\Uuid\Uuid;


class Json implements DataBase {

    private $data;

    //naujo jason failo sukurimas
    public function __construct()
    { 
        if (!file_exists(__DIR__ .'/data.json')) {
            file_put_contents(__DIR__ .'/data.json', json_encode([]));
        }
        $this->data = json_decode(file_get_contents(__DIR__ .'/data.json'), 1);
    // 1 - kad butu masyvas masyve - objektas masyve.
    }

    // įrašymas - kai baigiam skripto darba i jasona irasom kas buvo data. Skaitymas ir irasymas vyks automatiskai.

    public function __destruct ()
    {
    file_put_contents(__DIR__ .'/data.json', json_encode($this->data));
    }

    function create(array $clientData) : void
    {
        $id = $uuid = Uuid::uuid4()->toString();
        $clientData['id'] = $id;
        $this->data = $clientData;
    }

    function update(int $clientId, array $clientData) : void
    {
        
    }

    function delete(int $clientId) : void
    {
        
    }

    function show(int $clientId) : array
    {

    }
    
    function showAll() : array
    {
        
    }

}