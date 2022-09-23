<?php

namespace App\FrameworkTools\Implementations\Route;

use App\FrameworkTools\ProcessServerElements;
use App\Controllers\CarController;
use App\Controllers\InsertDataController;
use App\Controllers\HelloWorldController;

class RouteProcess {

    public static function execute() {
        $processServerElements = ProcessServerElements::start();
        $routeArray = [];
    
        switch($processServerElements->getVerb()) {
            case 'GET':

                switch ($processServerElements->getRoute()) {

                    case '/car':
                        return (new CarController)->getCar();
                    break;
                    case '/car/id-by-car':
                        return (new CarController)->getIdCar();
                    break;
                    case '/car/name-by-car':
                        return (new CarController)->getNameCar();
                    break;

                    case '/seller':
                        return (new CarController)->getSeller();
                    break;
                    case '/seller/id-by-seller':
                        return (new CarController)->getIdSeller();
                    break;
                    case '/seller/name-by-seller':
                        return (new CarController)->getNameSeller();
                    break;
                    case '/seller/get-all-car-by-seller':
                        return (new CarController)->getNameCarSeller();
                    break;

                    case '/buyer':
                        return (new CarController)->getBuyer();
                    break;
                    case '/buyer/id-by-buyer':
                        return (new CarController)->getIdBuyer();
                    break;
                    case '/buyer/name-by-buyer':
                        return (new CarController)->getNameBuyer();
                    break;
                    case '/buyer/get-all-cars':
                        return (new CarController)->getNameCarBuyer();
                    break;
                } break;
                
        }
        

    }

}