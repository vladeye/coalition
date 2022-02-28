<?php

namespace Src\Gateways;

define("DB_FILE", dirname(__DIR__) . "/Gateways/db.json");

class InventoryGateway
{
    function findAll(){
        $current_data = file_get_contents(DB_FILE);
        $array_data = json_decode($current_data, true);
        $respData = [];
        $respData["status"] = "success";
        $respData["total"] = count($array_data);
        $respData["records"] = $array_data;

        return $respData;
    }
    function createInventory($input) {
        $message = [];
        if(file_exists(DB_FILE))
        {
            $final_data=$this->createAppend($input);
            if(file_put_contents(DB_FILE, $final_data))
            {
                $message["text_success"] = "Data added Success fully";
            }
        }
        else
        {
            $final_data=$this->createWrite($input);
            if(file_put_contents(DB_FILE, $final_data))
            {
                $message["text_success"] = "File created and  data added Success fully";
            }

        }
        return $message;

    }
    function createAppend($input)
    {
        $current_data = file_get_contents(DB_FILE);
        $array_data = json_decode($current_data, true);
        $extra = array(
            'recid'                 => end($array_data)['recid'] + 1,
            'product_name'          => $input['product_name'],
            'quantity_in_stock'     => $input["quantity_in_stock"],
            'price_per_item'        => $input["price_per_item"],
            'created_at'            => date("m-d-Y H:i:s"),
            'total_value_number'    => intval($input["quantity_in_stock"]) * intval($input["price_per_item"])
        );
        $array_data[] = $extra;
        $final_data = json_encode($array_data);
        return $final_data;
    }

    function createWrite($input)
    {
        $file = fopen(DB_FILE, "w");
        $array_data = array();
        $extra = array(
            'recid'                 => 1,
            'product_name'          => $input['product_name'],
            'quantity_in_stock'     => $input["quantity_in_stock"],
            'price_per_item'        => $input["price_per_item"],
            'created_at'            => date("m-d-Y H:i:s"),
            'total_value_number'    => intval($input["quantity_in_stock"]) * intval($input["price_per_item"])
        );
        $array_data[] = $extra;
        $final_data = json_encode($array_data);
        fclose($file);
        return $final_data;
    }

    function updateInventory($input){
        $message = [];
        $current_data = file_get_contents(DB_FILE);
        $array_data = json_decode($current_data, true);

        $key = array_search($input['recid'], array_column($array_data, 'recid'));
        if($key !== false){
            $array_data[$key]['product_name'] = $input['product_name'];
            $array_data[$key]['quantity_in_stock'] = $input['quantity_in_stock'];
            $array_data[$key]['price_per_item'] = $input['price_per_item'];
            $array_data[$key]['total_value_number'] = intval($input["quantity_in_stock"]) * intval($input["price_per_item"]);
            $final_data = json_encode($array_data);
            if(file_put_contents(DB_FILE, $final_data))
            {
                $message["text_success"] = "Data updated Successfully";
            }
        } else {
            $message["text_success"] = "No id found";
        }
        return $message;
    }
}