<?php

namespace App\Controllers;

use App\FrameworkTools\Abstracts\Controllers\AbstractControllers;

use App\FrameworkTools\Database\DatabaseConnection;


class InsertDataController extends AbstractControllers{

    public function getCar() {
        $pdo = DatabaseConnection::start()->getPDO();
        $params = $this->processServerElements->getInputJSONData();

        $query = "SELECT * FROM car";
        
        $statement = $pdo->prepare($query);

        $statement->execute([
            ':name' => $params["name"],
            ':car_model' => $params["car_model"],
            ':year' => $params["year"],
            ':motorization' => $params["motorization"]
        ]);

        view([
            'success'=> true
        ]);
    }

}