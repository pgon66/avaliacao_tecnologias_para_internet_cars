<?php

namespace App\Controllers;

use App\FrameworkTools\Abstracts\Controllers\AbstractControllers;

use App\FrameworkTools\Database\DatabaseConnection;


class CarController extends AbstractControllers{

    public function getCar() {
        $pdo = DatabaseConnection::start()->getPDO();

        $car = $pdo->query("SELECT * FROM car;")->fetchAll();

        view($car);
    }

    public function getIdCar() {
        $pdo = DatabaseConnection::start()->getPDO();
        
        $requestVariables = $this->processServerElements->getVariables();
        $valueOfVariable;

        foreach ($requestVariables as $value) {
            $valueOfVariable = $value["value"];
        }

        $car = $pdo->query("SELECT * FROM car WHERE id_car = '{$valueOfVariable}';")->fetchAll();

        view($car);
    }

    public function getNameCar() {
        $pdo = DatabaseConnection::start()->getPDO();
        
        $requestVariables = $this->processServerElements->getVariables();
        $valueOfVariable;

        foreach ($requestVariables as $value) {
            $valueOfVariable = $value["value"];
        }

        $car = $pdo->query("SELECT * FROM car WHERE name = '{$valueOfVariable}';")->fetchAll();

        view($car);
    }

    public function getSeller() {
        $pdo = DatabaseConnection::start()->getPDO();

        $car = $pdo->query("SELECT * FROM seller;")->fetchAll();

        view($car);
    }

    public function getIdSeller() {
        $pdo = DatabaseConnection::start()->getPDO();
        
        $requestVariables = $this->processServerElements->getVariables();
        $valueOfVariable;

        foreach ($requestVariables as $value) {
            $valueOfVariable = $value["value"];
        }

        $car = $pdo->query("SELECT * FROM seller WHERE id_seller = '{$valueOfVariable}';")->fetchAll();

        view($car);
    }
    
    public function getNameSeller() {
        $pdo = DatabaseConnection::start()->getPDO();
        
        $requestVariables = $this->processServerElements->getVariables();
        $valueOfVariable;

        foreach ($requestVariables as $value) {
            $valueOfVariable = $value["value"];
        }

        $car = $pdo->query("SELECT * FROM seller WHERE name = '{$valueOfVariable}';")->fetchAll();

        view($car);
    }

    public function getNameCarSeller() {
        $pdo = DatabaseConnection::start()->getPDO();
        
        $requestVariables = $this->processServerElements->getVariables();
        $valueOfVariable;

        foreach ($requestVariables as $value) {
            $valueOfVariable = $value["value"];
        }

        $car = $pdo->query("SELECT * FROM car WHERE car.id_car IN (SELECT sells.id_car FROM sells WHERE sells.id_seller = (SELECT seller.id_seller FROM seller WHERE seller.name = '{$valueOfVariable}'));")->fetchAll();

        view($car);
    }

    public function getBuyer() {
        $pdo = DatabaseConnection::start()->getPDO();

        $car = $pdo->query("SELECT * FROM buyer;")->fetchAll();

        view($car);
    }

    public function getIdBuyer() {
        $pdo = DatabaseConnection::start()->getPDO();
        
        $requestVariables = $this->processServerElements->getVariables();
        $valueOfVariable;

        foreach ($requestVariables as $value) {
            $valueOfVariable = $value["value"];
        }

        $car = $pdo->query("SELECT * FROM buyer WHERE id_buyer = '{$valueOfVariable}';")->fetchAll();

        view($car);
    }
    
    public function getNameBuyer() {
        $pdo = DatabaseConnection::start()->getPDO();
        
        $requestVariables = $this->processServerElements->getVariables();
        $valueOfVariable;

        foreach ($requestVariables as $value) {
            $valueOfVariable = $value["value"];
        }

        $car = $pdo->query("SELECT * FROM buyer WHERE name = '{$valueOfVariable}';")->fetchAll();

        view($car);
    }

    public function getNameCarBuyer() {
        $pdo = DatabaseConnection::start()->getPDO();
        
        $requestVariables = $this->processServerElements->getVariables();
        $valueOfVariable;

        foreach ($requestVariables as $value) {
            $valueOfVariable = $value["value"];
        }

        $car = $pdo->query("SELECT * FROM car WHERE car.id_car IN (SELECT sells.id_car FROM sells WHERE sells.id_buyer = (SELECT buyer.id_buyer FROM buyer WHERE buyer.name = '{$valueOfVariable}'));")->fetchAll();

        view($car);
    }

}