<?php

namespace Src\Controller;

include (dirname(__DIR__)."/Gateways/InventoryGateway.php");
use Src\Gateways\InventoryGateway;

class InventoryController {
    private $requestMethod;
    private $Id;

    private $inventoryGateway;


    public function __construct($requestMethod, $Id)
    {

        $this->requestMethod = $requestMethod;
        $this->Id = $Id;

        $this->inventoryGateway = new InventoryGateway();

    }

    public function processRequest()
    {
        switch ($this->requestMethod) {
            case 'GET':
                $response = $this->getAllInventory();
                break;
            case 'POST':
                $response = $this->createInventoryFromRequest();
                break;
            case 'PUT':
                $response = $this->updateInventoryFromRequest();
                break;
            default:
                $response = $this->notFoundResponse();
                break;
        }
        header($response['status_code_header']);
        if ($response['body']) {
            echo $response['body'];
        }
    }

    private function getAllInventory()
    {
        $result = $this->inventoryGateway->findAll();
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = json_encode($result);
        return $response;
    }


    private function notFoundResponse()
    {
        $response['status_code_header'] = 'HTTP/1.1 404 Not Found';
        $response['body'] = null;
        return $response;
    }

    private function createInventoryFromRequest()
    {
        $input = (array) json_decode(file_get_contents('php://input'), TRUE);
        $result = $this->inventoryGateway->createInventory($input);
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = json_encode($result);
        return $response;
    }

    private function updateInventoryFromRequest(){
        $input = (array) json_decode(file_get_contents('php://input'), TRUE);
        $result = $this->inventoryGateway->updateInventory($input);
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = json_encode($result);
        return $response;
    }



}