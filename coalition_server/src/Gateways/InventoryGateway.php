<?php

namespace Src\Gateways;

define("DB_FILE", dirname(__DIR__) . "/Gateways/db.json");

class InventoryGateway
{
    function findAll(){
        $current_data = file_get_contents(DB_FILE);
        $array_data = json_decode($current_data, true);
        return $array_data;
    }
    function createInventory($input) {
        $message = [];
        if(file_exists(DB_FILE))
        {
            $final_data=$this->createAppend();
            if(file_put_contents(DB_FILE, $final_data))
            {
                $message["text_success"] = "Data added Success fully";
            }
        }
        else
        {
            $final_data=$this->createWrite();
            if(file_put_contents(DB_FILE, $final_data))
            {
                $message["text_success"] = "File created and  data added Success fully";
            }

        }
        return $message;

    }
    function createAppend()
    {
        $current_data = file_get_contents(DB_FILE);
        $array_data = json_decode($current_data, true);
        $extra = array(
            'name' => $_POST['name'],
            'gender' => $_POST["gender"],
            'age' => $_POST["age"],
            'education' => $_POST["education"],
            'designation' => $_POST["designation"],
            'DOB' => $_POST["dob"]

        );
        $array_data[] = $extra;
        $final_data = json_encode($array_data);
        return $final_data;
    }

    function createWrite()
    {
        $file = fopen(DB_FILE, "w");
        $array_data = array();
        $extra = array(
            'name' => $_POST['name'],
            'gender' => $_POST["gender"],
            'age' => $_POST["age"],
            'education' => $_POST["education"],
            'designation' => $_POST["designation"],
            'dob' => $_POST["dob"]

        );
        $array_data[] = $extra;
        $final_data = json_encode($array_data);
        fclose($file);
        return $final_data;
    }
}